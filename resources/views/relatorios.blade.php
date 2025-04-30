{{-- resources/views/relatorios/index.blade.php --}}
@extends('base')

@section('content')
    <div class="template-base">
        <div class="container-lg">
            @include('layouts.tab')

            <div class="br-menu" id="main-navigation">
                <div class="main-content pl-sm-3 mt-4" id="main-content">
                    <h1 class="mt-4 mb-3">Relatórios de Visitantes</h1>

                    <form method="GET">
                        <div class="row mb-4">
                            <div class="col-md-3">
                                <div class="br-datetimepicker" data-mode="single" data-type="text">
                                    <div class="br-input has-icon">
                                        <label for="data_inicio">Data Início</label>
                                     

                                        <input id="data_inicio-input" type="datetime-local" placeholder="exemplo: 02/02/2024 02:02" data-input="data-input"/>
                                        <button class="br-button circle small" type="button" aria-label="Abrir Timepicker" data-toggle="data-toggle" id="data_inicio-input-btn" tabindex="-1" aria-hidden="true"><i class="fas fa-calendar-alt" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                 
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="br-datetimepicker" data-mode="single" data-type="text">
                                    <div class="br-input has-icon">
                                        <label for="data_fim">Data Fim</label>
                                        
                                        <input id="data_fim-input" type="datetime-local" placeholder="exemplo: 02/02/2024 02:02" data-input="data-input"/>
                                        <button class="br-button circle small" type="button" aria-label="Abrir Timepicker" data-toggle="data-toggle" id="data_fim-input-btn" tabindex="-1" aria-hidden="true"><i class="fas fa-calendar-alt" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="br-input">
                                    <label for="destino">Destino</label>
                                    <input id="destino" name="destino" type="text" value="{{ request('destino') }}">
                                </div>
                            </div>


                            <div class="col-md-3 d-flex align-items-end">
                                <button class="br-button primary" type="submit">Filtrar</button>
                            </div>
                        </div>

                </div>
                </form>


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
                                <td id="cpf">999.999.999-80</td>
                                <td>{{ \Carbon\Carbon::parse('2025-04-24')->format('d/m/Y H:i') }}</td>
                                <td>{{ '2025-04-27' ? \Carbon\Carbon::parse('2025-04-27')->format('d/m/Y H:i') : '---' }}
                                <td>ANV001</td>
                                </td>
                            </tr>
                            <tr>
                                <td>JOAO MARCOS CASTRO</td>
                                <td id="cpf">888.888.888-80</td>
                                <td>{{ \Carbon\Carbon::parse('2025-04-11')->format('d/m/Y H:i') }}</td>
                                <td>{{ '2025-04-27' ? \Carbon\Carbon::parse('2025-04-27')->format('d/m/Y H:i') : '---' }}
                                <td>ANV0021</td>
                                </td>
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

    {{--     <div class="mt-4">
            <a href="{{ route('relatorios.pdf', request()->all()) }}" class="br-button secondary" target="_blank">📥
                Exportar PDF</a>
        </div> --}}
    </div>
@endsection
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const dataInicio = document.getElementById('data_inicio');
            const dataFim = document.getElementById('data_fim');
            const form = document.querySelector('form');

            function parseDate(str) {
                // Espera formato dd/mm/yyyy
                const [d, m, y] = str.split('/');
                if (!d || !m || !y) return null;
                return new Date(`${y}-${m}-${d}`);
            }

            function validarDatas() {
                const inicio = parseDate(dataInicio.value);
                const fim = parseDate(dataFim.value);

                if (inicio && fim && inicio > fim) {
                    showBrMessage('danger', 'Data inválida', 'A Data Início não pode ser maior que a Data Fim.');
                         dataInicio.value = '';
                    dataInicio.focus();
                    return false;
                }
                return true;
            }

            dataInicio.addEventListener('change', validarDatas);
            dataFim.addEventListener('change', validarDatas);

            form.addEventListener('submit', function(e) {
                if (!validarDatas()) {
                    e.preventDefault();
                }
            });

            const exportarPdfBtn = document.getElementById('exportarPdfBtn');
            const exportarExcelBtn = document.getElementById('exportarExcelBtn');

            if (exportarPdfBtn && exportarExcelBtn) {
                exportarPdfBtn.addEventListener('click', function() {
                    exportarDados('pdf');
                });

                exportarExcelBtn.addEventListener('click', function() {
                    exportarDados('excel');
                });

                function mascararCPF(cpf) {
                    // Verifica se o CPF tem 11 dígitos
                    cpf = cpf.replace(/\D/g, '');
                    if (cpf.length !== 11) {
                        throw new Error("CPF inválido. Deve conter 11 dígitos.");
                    }

                    // Mascarar os três primeiros e os dois últimos dígitos
                    const cpfMascarado = '***' + cpf.slice(3, 9) + '**';
                    return cpfMascarado;
                }

                const cpfCells = document.querySelectorAll('#cpf'); // Seleciona todas as TDs com o ID "cpf"


                cpfCells.forEach(cell => {
                    const cpfLimpo = cell.innerText.trim().replace(/\D/g, '');
                    cell.innerText = mascararCPF(cpfLimpo);
                });

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

                        console.log('Dados a serem enviados:', dados);


                        document.body.appendChild(form);
                        form.submit();
                    } else {
                        showBrMessage('danger', 'Nenhum dado encontrado', 'Nenhum dado na tabela para exportar.');
                    }
                }
            }

            
        });
    </script>
@endpush
