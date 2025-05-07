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
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />

</head>

<body>
    @include('layouts.header')


    <div id="alert-container" style="position: fixed; top: 120px; right: 32px; z-index: 9999; max-width: 400px;"></div>

    @yield('content')
    @include('layouts.footer')

    <!-- Scripts de componentes -->
    <script src="{{ asset('govbr/core.min.js') }}"></script>
    <script src="{{ asset('js/brselect.js') }}"></script>
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="https://docs-ds.estaleiro.serpro.gov.br/govbr-ds-core/dist/core-init.js"></script>

    <script>
        window.addEventListener('load', () => {

            const uploadList = [];

            function uploadTimeout() {
                return new Promise((resolve) => setTimeout(resolve, 3000));
            }

            for (const brUpload of window.document.querySelectorAll('.br-upload')) {
                uploadList.push(new core.BRUpload('br-upload', brUpload, uploadTimeout));
            }

            const selectList = [];
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
        `;
            for (const brSelect of window.document.querySelectorAll('.br-select')) {
                const brselect = new core.BRSelect('br-select', brSelect, notFoundElement);
                brSelect.addEventListener('onChange', function(e) {});
                selectList.push(brselect);
            }

            const datetimepickerList = [];
            for (const brDateTimePicker of window.document.querySelectorAll('.br-datetimepicker')) {
                datetimepickerList.push(
                    new core.BRDateTimePicker('br-datetimepicker', brDateTimePicker, {})
                );
            }

        });
    </script>

    @stack('scripts')
</body>

</html>
