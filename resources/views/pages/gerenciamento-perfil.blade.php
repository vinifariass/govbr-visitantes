{{-- resources/views/relatorios/index.blade.php --}}
@extends('base')

@section('content')
    <div class="template-base">
        <div class="container-lg">
            @include('layouts.tab')

            <div class="br-menu" id="main-navigation">
                <div class="main-content pl-sm-3 mt-4" id="main-content">

                    <form method="GET">
                        <div class="row mb-4">
                            <div class="col-md-3">
                                <div class="br-select">
                                    <div class="br-input">
                                        <label for="nome">Nome</label>
                                        <input id="nome" type="text" placeholder="Selecione o crachá" />
                                        <button class="br-button" type="button" aria-label="Exibir lista" tabindex="-1"
                                            data-trigger="data-trigger">
                                            <i class="fas fa-angle-down" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <div class="br-list" tabindex="0">
                                        <div class="br-item" tabindex="-1">
                                            <div class="br-radio">
                                                <input id="nome-cbs0" name="nome-cbs0" type="radio" />
                                                <label for="nome-cbs0">Vinicius Farias Silva</label>
                                            </div>
                                        </div>
                                        <div class="br-item" tabindex="-1">
                                            <div class="br-radio">
                                                <input id="nome-cbs1" name="nome-cbs1" type="radio" />
                                                <label for="nome-cbs1">João Marcos Castro</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="br-select">
                                    <div class="br-input">
                                        <label for="tipo_usuario">Tipo de Usuário</label>
                                        <input id="tipo_usuario" type="text" placeholder="Selecione o crachá" />
                                        <button class="br-button" type="button" aria-label="Exibir lista" tabindex="-1"
                                            data-trigger="data-trigger">
                                            <i class="fas fa-angle-down" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <div class="br-list" tabindex="0">
                                        <div class="br-item" tabindex="-1">
                                            <div class="br-radio">
                                                <input id="tipo_usuario-cbs0" name="tipo_usuario-cbs0" type="radio" />
                                                <label for="tipo_usuario-cbs0">Admin</label>
                                            </div>
                                        </div>
                                        <div class="br-item" tabindex="-1">
                                            <div class="br-radio">
                                                <input id="tipo_usuario-cbs1" name="tipo_usuario-cbs1" type="radio" />
                                                <label for="tipo_usuario-cbs1">Técnico</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="" style="display: flex; justify-content: flex-end;">
                            <button class="br-button primary" type="submit">Salvar</button>
                        </div>

                    </form>
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

            $(".br-input .input-group .input-icon").remove();

            const dataInicio = document.getElementById('data_inicio');
            const dataFim = document.getElementById('data_fim');
            const form = document.querySelector('form');

            function parseDate(str) {
                if (!str) return null;

                // Separa a parte da data e da hora
                const [datePart, timePart] = str.split(' ');

                // Divide a data em dia, mês e ano
                const [d, m, y] = datePart.split('/');

                if (!d || !m || !y) return null;

                // Se tiver hora, divide em horas e minutos
                let hh = 0;
                let mm = 0;
                if (timePart) {
                    const [hours, minutes] = timePart.split(':');
                    hh = parseInt(hours);
                    mm = parseInt(minutes);
                }

                // Retorna objeto Date ajustado (mês é 0-indexed)
                return new Date(y, m - 1, d, hh, mm);
            }

            function validarDatas() {
                var dataInicio = document.getElementById('data_inicio');
                var dataFim = document.getElementById('data_fim');
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

            form.addEventListener('submit', function(e) {
                if (!validarDatas()) {
                    e.preventDefault();
                }
            });


        });
    </script>
@endpush
