<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Font Rawline -->
    <link rel="stylesheet"
        href="https://cdngovbr-ds.estaleiro.serpro.gov.br/design-system/fonts/rawline/css/rawline.css" />
    <!-- Font Raleway -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900&amp;display=swap" />
    <!-- Design System GOV.BR CSS -->
    <link rel="stylesheet" href="{{ asset('govbr/core.min.css') }}" />
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />

</head>

<body>
    @include('layouts.header')


    <div id="alert-container" style="position: fixed; top: 80px; right: 32px; z-index: 9999; max-width: 400px;"></div>

    @yield('content')
    @include('layouts.footer')

    <!-- Scripts de componentes -->
    <script type="module" src="{{ asset('govbr/core.min.js') }}"></script>
    <script src="{{ asset('js/brselect.js') }}"></script>
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>

    <script>
        // Função global para mostrar alertas visuais
        window.showBrMessage = function(type, title, message) {
            const container = document.getElementById('alert-container');
            if (!container) return;

            // Remove mensagens antigas
            container.innerHTML = '';

            // Tipos: 'danger', 'warning', 'success', 'info'
            const iconMap = {
                danger: 'fa-times-circle',
                warning: 'fa-exclamation-triangle',
                success: 'fa-check-circle',
                info: 'fa-info-circle'
            };
            const icon = iconMap[type] || 'fa-info-circle';

            const brMessage = document.createElement('div');
                    brMessage.className = `br-message ${type}`;
                    brMessage.innerHTML = `
                    <div class="icon"><i class="fas ${icon} fa-lg" aria-hidden="true"></i></div>
                    <div class="content" role="alert">
                        <span class="message-title">${title}</span> 
                        <span class="message-body">${message}</span>
                    </div>
                    <div class="close">
                        <button class="br-button circle small" type="button" aria-label="Fechar a mensagem">
                            <i class="fas fa-times" aria-hidden="true"></i>
                        </button>
                    </div>
                    `;

            // Fechar ao clicar no X
            brMessage.querySelector('.close button').onclick = () => brMessage.remove();

            // Remover automaticamente após 5 segundos
            setTimeout(() => brMessage.remove(), 5000);

            container.appendChild(brMessage);
        }

        document.addEventListener('DOMContentLoaded', () => {
            const uploadList = [];

            function uploadTimeout() {
                return new Promise((resolve) => {
                    // Simulação de upload para o servidor
                    return setTimeout(resolve, 3000);
                });
            }

            for (const brUpload of window.document.querySelectorAll('.br-upload')) {
                uploadList.push(new core.BRUpload('br-upload', brUpload, uploadTimeout));
            }

            const selectList = []
            const notFoundElement = `
                <div class="br-item not-found">
                <div class="container">
                <div class="row">
                    <div class="col">
                    <p><strong>Ops!</strong> Não encontramos o que você está procurando!</p>
                    </div>
                </div>
                </div>
                </div>
                `
            for (const brSelect of window.document.querySelectorAll('.br-select')) {
                const brselect = new core.BRSelect('br-select', brSelect, notFoundElement)
                //Exemplo de uso de listener do select
                brSelect.addEventListener('onChange', function(e) {})
                selectList.push(brselect)
            }

            const datetimepickerList = [];
            for (const brDateTimePicker of window.document.querySelectorAll(
                    '.br-datetimepicker'
                )) {
                datetimepickerList.push(
                    new core.BRDateTimePicker('br-datetimepicker', brDateTimePicker, {})
                );
            }
        });
    </script>

    @stack('scripts')
</body>

</html>
