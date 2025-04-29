{{-- resources/views/relatorios/index.blade.php --}}
@extends('base')

@section('content')
    <div class="template-base">
        <div class="container-lg">
            @include('layouts.step')

            <div class="br-menu" id="main-navigation">
                <div class="main-content pl-sm-3 mt-4" id="main-content">
                    <h1 class="mt-4 mb-3">Relatórios de Visitantes</h1>
                    <div class="br-loading" id="loading-indicator" style="display:none" role="progressbar" aria-label="carregando exemplo indeterminado pequeno"></div>

                    <form method="GET">
                        <div class="row mb-4">
                            <div class="col-md-2">
                                <div class="br-datetimepicker" data-mode="single" data-type="text">
                                    <div class="br-input has-icon">
                                        <label for="data_inicio">Data Início</label>
                                        <input id="data_inicio" name="data_inicio" type="text" placeholder="02/02/2024"
                                            data-input="data-input" />
                                        <button class="br-button circle small" type="button" aria-label="Abrir Timepicker"
                                            data-toggle="data-toggle" id="data_inicio-btn" tabindex="-1"
                                            aria-hidden="true"><i class="fas fa-calendar-alt" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="br-datetimepicker" data-mode="single" data-type="text">
                                    <div class="br-input has-icon">
                                        <label for="data_fim">Data Fim</label>
                                        <input id="data_fim" name="data_fim" type="text" placeholder="02/04/2024"
                                            data-input="data-input" />
                                        <button class="br-button circle small" type="button" aria-label="Abrir Timepicker"
                                            data-toggle="data-toggle" id="data_fim-btn" tabindex="-1"
                                            aria-hidden="true"><i class="fas fa-calendar-alt" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="br-input">
                                    <label for="destino">Destino</label>
                                    <input id="destino" name="destino" type="text" value="{{ request('destino') }}">
                                </div>
                            </div>

                            <div class="col-md-4 d-flex align-items-end">
                                <button class="br-button primary" type="submit">Filtrar</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="br-table">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>Data de Entrada</th>
                                <th>Data de Saída</th>
                                <th>Destino</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>VINICIUS FARIAS SILVA</td>
                                <td class="cpf">999.999.999-80</td>
                                <td>{{ \Carbon\Carbon::parse('2025-04-24')->format('d/m/Y H:i') }}</td>
                                <td>{{ '2025-04-27' ? \Carbon\Carbon::parse('2025-04-27')->format('d/m/Y H:i') : '---' }}</td>
                                <td>ANV001</td>
                            </tr>
                            <tr>
                                <td>JOAO MARCOS CASTRO</td>
                                <td class="cpf">888.888.888-80</td>
                                <td>{{ \Carbon\Carbon::parse('2025-04-11')->format('d/m/Y H:i') }}</td>
                                <td>{{ '2025-04-27' ? \Carbon\Carbon::parse('2025-04-27')->format('d/m/Y H:i') : '---' }}</td>
                                <td>ANV0021</td>
                            </tr>
                            <tr>
                                <td colspan="5">Nenhum visitante encontrado nesse período.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
       <div class="d-flex gap-3 mt-4 justify-content-end">
    <button id="exportarPdfBtn" class="br-button danger mr-2" style="display: flex; align-items: center;">
        <i class="fas fa-file-pdf mr-2" style="font-size: 1.2em;"></i>
        Exportar PDF
    </button>
    <button id="exportarExcelBtn" class="br-button success" style="display: flex; align-items: center;">
        <i class="fas fa-file-excel mr-2" style="font-size: 1.2em;"></i>
        Exportar Excel
    </button>
</div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Loading ao filtrar
        const form = document.querySelector('form');
        const loading = document.getElementById('loading-indicator');
        if (form && loading) {
            form.addEventListener('submit', function () {
                loading.style.display = 'block';
            });
        }

        // CPF mascarado
        function mascararCPF(cpf) {
            cpf = cpf.replace(/\D/g, '');
            if (cpf.length !== 11) return cpf;
            return '***.' + cpf.slice(3, 6) + '.' + cpf.slice(6, 9) + '-**';
        }
        document.querySelectorAll('.cpf').forEach(cell => {
            const cpfLimpo = cell.innerText.trim().replace(/\D/g, '');
            cell.innerText = mascararCPF(cpfLimpo);
        });

        // Exportação
        const exportarPdfBtn = document.getElementById('exportarPdfBtn');
        const exportarExcelBtn = document.getElementById('exportarExcelBtn');
        if (exportarPdfBtn && exportarExcelBtn) {
            exportarPdfBtn.addEventListener('click', function() {
                exportarDados('pdf');
            });
            exportarExcelBtn.addEventListener('click', function() {
                exportarDados('excel');
            });
        }
        function exportarDados(tipo) {
            const tabela = document.querySelector('.br-table table');
            const linhas = tabela.querySelectorAll('tbody tr');
            const dados = [];
            linhas.forEach(linha => {
                const colunas = linha.querySelectorAll('td');
                if (colunas.length >= 5) {
                    dados.push({
                        nome: colunas[0].innerText.trim(),
                        cpf: colunas[1].innerText.trim(),
                        data_entrada: colunas[2].innerText.trim(),
                        data_saida: colunas[3].innerText.trim(),
                        destino: colunas[4].innerText.trim()
                    });
                }
            });
            if (dados.length > 0) {
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = `/relatorios/${tipo}`;
                const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
                const csrfInput = document.createElement('input');
                csrfInput.type = 'hidden';
                csrfInput.name = '_token';
                csrfInput.value = csrfToken;
                form.appendChild(csrfInput);
                const dadosInput = document.createElement('input');
                dadosInput.type = 'hidden';
                dadosInput.name = 'dados';
                dadosInput.value = JSON.stringify(dados);
                form.appendChild(dadosInput);
                // Adiciona os filtros (se existirem)
                const filtros = ['data_inicio', 'data_fim', 'destino'];
                filtros.forEach(filtro => {
                    const input = document.querySelector(`[name="${filtro}"]`);
                    if (input && input.value) {
                        const clone = input.cloneNode();
                        clone.name = filtro;
                        clone.value = input.value;
                        clone.removeAttribute('id');
                        form.appendChild(clone);
                    }
                });
                document.body.appendChild(form);
                form.submit();
            } else {
                showBrMessage('danger', 'Erro', 'Nenhum dado na tabela para exportar.');
            }
        }
    });
</script>
@endpush