@extends('base')

<div class="template-base">

    @section('content')
        <div class="container-lg">

            @include('layouts.tab')
            @include('layouts.step')

            <div class="br-menu" id="main-navigation">
                <div class="menu-container">
                    <div class="menu-panel">
                        <div class="menu-header">

                            <div class="menu-close">
                                <button class="br-button circle" type="button" aria-label="Fechar o menu"
                                    data-dismiss="menu"><i class="fas fa-times" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                    <div class="menu-scrim" data-dismiss="menu" tabindex="0"></div>
                </div>
                <div class="col mb-5">

                    <div class="main-content pl-sm-3 mt-4" id="main-content">
                        <h1>Visitante</h1>
                        <div class="row">
                            <!-- Campos do formulário -->
                            <div class="col-md-10" id="cadastroVisitantesSection">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <div class="br-select">
                                            <div class="br-input tipo_documento">
                                                <label for="tipo_documento">Tipo de Documento</label>
                                                <input id="tipo_documento" type="text" placeholder="Selecione o item" />
                                                <button class="br-button" type="button" aria-label="Exibir lista"
                                                    tabindex="-1" data-trigger="data-trigger">
                                                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                            <div class="br-list" tabindex="0">
                                                <div class="br-item" tabindex="-1">
                                                    <div class="br-radio">
                                                        <input id="cbs0" name="cbs0" type="radio" />
                                                        <label for="cbs0">CPF</label>
                                                    </div>
                                                </div>
                                                <div class="br-item" tabindex="-1">
                                                    <div class="br-radio">
                                                        <input id="cbs1" name="cbs1" type="radio" />
                                                        <label for="cbs1">Passaporte</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="br-input numero_documento">
                                            {{--  Ao preencher o campo abaixo preenche o nome do visitante o telefone automaticamente --}}
                                            <label for="numero_documento">Número do Documento</label>
                                            <input id="numero_documento" type="text" placeholder="Digite aqui" />
                                        </div>
                                        <span class="feedback warning" role="alert"><i class="fas fa-exclamation-triangle"
                                                aria-hidden="true">
                                            </i>Não inserir
                                            caracteres especiais</span>
                                    </div>
                                </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="br-input">
                                                <label for="nome_visitante">Nome do Visitante</label>
                                                <input id="nome_visitante" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="br-input">
                                                <label for="nome_social">Nome Social</label>
                                                <input id="nome_social" type="text" placeholder="(21) 99999-9999" />
                                            </div>
                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <div class="br-input">
                                            <label for="telefone">Telefone</label>
                                            <input id="telefone" type="text" placeholder="(21) 99999-9999" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Avatar -->
                            <div
                                class="col-md-2 col-12 d-flex align-items-center justify-content-end justify-content-center justify-content-md-end flex-wrap flex-row-reverse mb-3 mb-md-0">
                                <span class="br-avatar large mr-3" id="avatar-preview" title="Fulano da Silva">
                                    <span class="content"><i class="fas fa-user" aria-hidden="true"></i></span>
                                </span>
                                <div class="scrimutilexamplemodal">
                                    <button class="br-button primary" type="button" id="buttonactivatemodal">Capturar
                                        Foto</button>
                                </div>
                                <!-- Input de arquivo escondido -->
                                <input type="file" id="foto-input" accept="image/*" style="display: none;"
                                    onchange="mostrarFoto(event)">
                            </div>
                        </div>

                        <!-- Botões de Ação -->
                        <hr class="br-divider" />
                        <h1>Visita</h1>

                        <!-- Campos do formulário -->
                        <div class="col-md-10">

                            <fieldset>
                                <div class="row" id="registroVisitaSection">
                                    <div class="col-md-4 mb-3">
                                        <div class="br-select">
                                            <div class="br-input">
                                                <label for="destino">Destino</label>
                                                <input id="destino" type="text" placeholder="Busque pela sala" />
                                                <button class="br-button" type="button" aria-label="Exibir lista"
                                                    tabindex="-1" data-trigger="data-trigger">
                                                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                            <div class="br-list" tabindex="0">
                                                <div class="br-item" tabindex="-1">
                                                    <div class="br-radio">
                                                        <input id="destino-cbs0" name="destino-cbs0" type="radio" />
                                                        <label for="destino-cbs0">DF > SUREG > Sala 03 >
                                                            Gabinete</label>
                                                    </div>
                                                </div>
                                                <div class="br-item" tabindex="-1">
                                                    <div class="br-radio">
                                                        <input id="destino-cbs1" name="destino-cbs1" type="radio" />
                                                        <label for="destino-cbs1">DF > SUREG > Sala 06 > Divisão de
                                                            Gestão Interna (Dgint)</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="br-select">
                                            <div class="br-input">
                                                <label for="tipo_visita">Tipo de Visita</label>
                                                <input id="tipo_visita" type="text"
                                                    placeholder="Selecione o tipo de Visita" />
                                                <button class="br-button" type="button" aria-label="Exibir lista"
                                                    tabindex="-1" data-trigger="data-trigger">
                                                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                            <div class="br-list" tabindex="0">
                                                <div class="br-item" tabindex="-1">
                                                    <div class="br-radio">
                                                        <input id="tipo_visita-cbs0" name="tipo_visita-cbs0"
                                                            type="radio" />
                                                        <label for="tipo_visita-cbs0">Consulente</label>
                                                    </div>
                                                </div>
                                                <div class="br-item" tabindex="-1">
                                                    <div class="br-radio">
                                                        <input id="tipo_visita-cbs1" name="tipo_visita-cbs1"
                                                            type="radio" />
                                                        <label for="tipo_visita-cbs1">DF > SUREG > Sala 06 > Divisão de
                                                            Gestão Interna (Dgint)</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-5 mb-3">
                                        <div class="br-input">
                                            {{--  Ao preencher o campo abaixo preenche o nome do visitante o telefone automaticamente --}}
                                            <label for="nome_responsavel">Nome do Anfitrião</label>
                                            <input id="nome_responsavel" type="text" placeholder="Digite aqui" />
                                        </div>

                                    </div>


                                </div>
                            </fieldset>
                        </div>

                        <hr class="br-divider" />

                        <h1>Crachá</h1>
                        <div class="col-md-12" id="atribuirCrachaSection">
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <div class="br-select">
                                            <div class="br-input">
                                                <label for="atribuir_cracha">Atribuir Crachá</label>
                                                <input id="atribuir_cracha" type="text"
                                                    placeholder="Selecione o crachá" />
                                                <button class="br-button" type="button" aria-label="Exibir lista"
                                                    tabindex="-1" data-trigger="data-trigger">
                                                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                            <div class="br-list" tabindex="0">
                                                <div class="br-item" tabindex="-1">
                                                    <div class="br-radio">
                                                        <input id="atribuir_cracha-cbs0" name="atribuir_cracha-cbs0"
                                                            type="radio" />
                                                        <label for="atribuir_cracha-cbs0">ANV001</label>
                                                    </div>
                                                </div>
                                                <div class="br-item" tabindex="-1">
                                                    <div class="br-radio">
                                                        <input id="atribuir_cracha-cbs1" name="atribuir_cracha-cbs1"
                                                            type="radio" />
                                                        <label for="atribuir_cracha-cbs1">ANV002</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="p-3"
                                    style="  display: flex;
                                    justify-content: end; ">
                                    <button class="br-button primary active mr-3" type="button">Salvar
                                    </button>
                                    <button class="br-button primary mr-3" type="button" disabled="disabled">Editar
                                    </button>

                                </div>

                            </fieldset>
                        </div>

                    </div>
                </div>


            </div>

        </div>
        <div class="br-scrim-util foco" id="scrimutilexamplemodal" data-scrim="true" style="display: none;">
            <div class="br-modal" aria-labelledby="titulomodalexemplo">
                <div class="br-modal-header" id="titulomodalexemplo">Capturar Foto ou Fazer Upload</div>
                <div class="br-modal-body">
                    <div id="optionsSection">
                        <button class="br-button primary w-100 " type="button" onclick="showWebcamOption()">Tirar
                            foto</button>
                        <button class="br-button secondary w-100" type="button" onclick="showUploadOption()">Fazer
                            Upload de Foto</button>
                    </div>
                    <div id="webcamSection" class="d-none">
                        <video id="webcam" autoplay playsinline
                            style="width: 100%; max-width: 400px; margin: auto;"></video>
                        <button class="br-button primary mt-3 w-100" type="button" onclick="capturePhoto()">Capturar
                            Foto</button>
                        <button class="br-button secondary mt-3 w-100" type="button"
                            onclick="backToOptions()">Voltar</button>
                        <canvas id="canvas" style="display: none;"></canvas>
                    </div>
                    <div id="uploadSection" class="d-none">
                        <div class="br-upload">
                            <input class="upload-input" id="file-upload" accept="image/*" type="file"
                                aria-label="enviar arquivo" onchange="handleFileUpload()" />
                            <label class="upload-input" for="file-upload">Selecione uma foto</label>
                            <div class="upload-list"></div>
                        </div>
                        <button class="br-button secondary mt-3 w-100" type="button"
                            onclick="backToOptions()">Voltar</button>
                    </div>
                </div>
                <div class="br-modal-footer justify-content-center">
                    <button class="br-button secondary" type="button" onclick="closeModal()">Cancelar</button>
                </div>
            </div>
        </div>



        <div class="br-cookiebar default d-none" tabindex="-1"></div>
    </div>

    <style>
        #registroVisitaStepBtn {
            transition: opacity 0.3s ease;
        }

        #registroVisitaStepBtn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        #registroVisitaStepBtn.active {
            opacity: 1;
            /* Cor padrão do botão ativo */
        }

        #atribuirCrachaStepBtn {
            transition: opacity 0.3s ease;
        }

        #atribuirCrachaStepBtn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        #atribuirCrachaStepBtn.active {
            opacity: 1;
        }
    </style>
@endsection
@push('scripts')
    <script>
        // Variáveis globais
        let stream = null;
        let capturedPhoto = null;

        // Inicialização quando o DOM estiver pronto
        document.getElementById('buttonactivatemodal').addEventListener('click', openPhotoModal);
        // Função para abrir o modal
        function openPhotoModal() {
            document.getElementById('scrimutilexamplemodal').style.display = 'flex';
            document.getElementById('optionsSection').classList.remove('d-none');
            document.getElementById('uploadSection').classList.add('d-none');
            document.getElementById('webcamSection').classList.add('d-none');
        }

        // Função para fechar o modal
        function closeModal() {
            document.querySelector('.br-scrim-util').style.display = 'none';
            stopWebcam();
            resetModal();
        }

        // Função para voltar às opções
        function backToOptions() {
            // Oculta as seções de upload e webcam
            document.getElementById('uploadSection').classList.add('d-none');
            document.getElementById('webcamSection').classList.add('d-none');
            document.getElementById('optionsSection').classList.remove('d-none');

            stopWebcam();

            resetModal();
        }

        // Função para mostrar a opção de upload
        function showUploadOption() {
            document.getElementById('optionsSection').classList.add('d-none');
            document.getElementById('uploadSection').classList.remove('d-none');
        }

        // Função para mostrar a opção de webcam
        function showWebcamOption() {
            document.getElementById('optionsSection').classList.add('d-none');
            document.getElementById('uploadSection').classList.add('d-none');
            document.getElementById('webcamSection').classList.remove('d-none');
            startWebcam();
        }

        // Função para iniciar a webcam
        async function startWebcam() {
            try {
                const video = document.getElementById('webcam');
                stream = await navigator.mediaDevices.getUserMedia({
                    video: {
                        width: {
                            ideal: 640
                        },
                        height: {
                            ideal: 480
                        },
                        facingMode: 'user'
                    },
                    audio: false
                });
                video.srcObject = stream;
            } catch (err) {
                console.error("Erro ao acessar a webcam:", err);
                showBrMessage('danger', 'Erro',
                    'Não foi possível acessar a webcam. Por favor, verifique as permissões.');
                backToOptions();
            }
        }

        // Função para parar a webcam
        function stopWebcam() {
            if (stream) {
                stream.getTracks().forEach(track => track.stop());
                stream = null;
            }
        }

        // Função para capturar foto da webcam
        function capturePhoto() {
            const video = document.getElementById('webcam');
            const canvas = document.getElementById('canvas');
            const context = canvas.getContext('2d');
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            context.drawImage(video, 0, 0, canvas.width, canvas.height);
            capturedPhoto = canvas.toDataURL('image/png');
            updateAvatar(capturedPhoto);
            closeModal();
        }

        // Função para usar a foto capturada
        function useCapturedPhoto() {
            if (capturedPhoto) {
                updateAvatar(capturedPhoto);
                closeModal();
            }
        }

        // Função para lidar com upload de arquivo
        function handleFileUpload() {
            const fileInput = document.getElementById('file-upload');
            if (fileInput.files && fileInput.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    updateAvatar(e.target.result);
                    closeModal();
                };
                reader.readAsDataURL(fileInput.files[0]);
            } else {
                showBrMessage('danger', 'Erro',
                    'Por favor, selecione uma foto primeiro.');
            }
        }

        // Função para atualizar o avatar com a nova foto
        function updateAvatar(imageData) {
            const avatar = document.getElementById('avatar-preview');
            avatar.innerHTML = `
            <span class="content">
                <img src="${imageData}" alt="Foto do visitante" style="width: 100%; height: 100%; border-radius: 50%; object-fit: cover;">
            </span>
        `;
        }

        // Função para resetar o modal
        function resetModal() {
            capturedPhoto = null;
            const video = document.getElementById('webcam');
            video.srcObject = null;
            document.getElementById('file-upload').value = '';
        }
        $(document).ready(function() {

            $(".tipo_documento .input-group .input-icon").remove();
            var $input = $("#numero_documento");
            var $label = $("label[for='numero_documento']");

            // Cria o grupo com o ícone
            var $inputGroup = $(
                '<div class="input-group"><div class="input-icon"><i class="fas fa-search"></i></div></div>');

            // Coloca o input dentro do grupo
            $inputGroup.append($input);

            // Insere o grupo após a label
            $label.after($inputGroup);

            function checkFieldsAndSetReadonly() {
                // Obter valores dos campos
                const cadastroOk = isSectionFilled('cadastroVisitantesSection');
                const registroOk = isSectionFilled('registroVisitaSection');
                const crachaOk = isSectionFilled('atribuirCrachaSection');

                // Botões de step
                const registroVisitaStepBtn = document.getElementById("registroVisitaStepBtn");
                const atribuirCrachaStepBtn = document.getElementById("atribuirCrachaStepBtn");

                // Cadastro preenchido: habilita registroVisitaSection, desabilita atribuirCrachaSection
                if (cadastroOk) {
                    $("#registroVisitaSection").find('input, select, textarea').prop('disabled', false).prop(
                        'readonly', false).css('background-color', '');
                    if (registroVisitaStepBtn) registroVisitaStepBtn.disabled = false;
                } else {
                    $("#registroVisitaSection").find('input, select, textarea').prop('disabled', true).prop(
                        'readonly', true).css('background-color', '#f2f2f2');
                    if (registroVisitaStepBtn) registroVisitaStepBtn.disabled = true;
                }

                // Cadastro e registro preenchidos: habilita atribuirCrachaSection e botão
                if (cadastroOk && registroOk) {
                    $("#atribuirCrachaSection").find('input, select, textarea').prop('disabled', false).prop(
                        'readonly', false).css('background-color', '');
                    if (atribuirCrachaStepBtn) atribuirCrachaStepBtn.disabled = false;
                } else {
                    $("#atribuirCrachaSection").find('input, select, textarea').prop('disabled', true).prop(
                        'readonly', true).css('background-color', '#f2f2f2');
                    if (atribuirCrachaStepBtn) atribuirCrachaStepBtn.disabled = true;
                }

            }

            $("#cadastroVisitantesSection, #registroVisitaSection, #atribuirCrachaSection")
                .on("input change", "input, select, textarea", checkFieldsAndSetReadonly);
            $('.br-radio input[type="radio"]').on('change', checkFieldsAndSetReadonly);



            checkFieldsAndSetReadonly()

            $('.br-button.primary.active').on('click', function(e) {
                const tipo_documento = $("#tipo_documento").val().trim();
                const numero_documento = $("#numero_documento").val().trim();
                const nome_visitante = $("#nome_visitante").val().trim();
                const telefone = $("#telefone").val().trim();

                if (!tipo_documento || !numero_documento || !nome_visitante || !telefone) {
                    showBrMessage('danger', 'Campos obrigatórios',
                        'Preencha todos os campos antes de salvar.');
                    e.preventDefault();
                    return false;
                }


            });

            $("#cadastroVisitaStepBtn").on("click", function() {
                // Verifica se o botão está habilitado antes de prosseguir
                if (!this.disabled) {
                    document.getElementById("cadastroVisitantesSection").scrollIntoView({
                        behavior: "smooth"
                    });
                    document.getElementById("cadastroVisitaStepBtn").classList.add("active");
                    document.getElementById("registroVisitaStepBtn").classList.remove("active");
                    document.getElementById("atribuirCrachaStepBtn").classList.remove("active");

                }
            });

            $("#registroVisitaStepBtn").on("click", function() {
                // Verifica se o botão está habilitado antes de prosseguir
                if (!this.disabled) {
                    // Lógica para avançar para a próxima seção (registroVisitaSection)
                    document.getElementById("registroVisitaSection").scrollIntoView({
                        behavior: "smooth"
                    });
                    document.getElementById("registroVisitaStepBtn").classList.add("active");
                    document.getElementById("cadastroVisitaStepBtn").classList.remove("active");
                    document.getElementById("atribuirCrachaStepBtn").classList.remove("active");

                }
            });

            $("#atribuirCrachaStepBtn").on("click", function() {
                if (!this.disabled) {
                    document.getElementById("atribuirCrachaSection").scrollIntoView({
                        behavior: "smooth"
                    });
                    document.getElementById("atribuirCrachaStepBtn").classList.add("active");
                    document.getElementById("registroVisitaStepBtn").classList.remove("active");
                    document.getElementById("cadastroVisitaStepBtn").classList.remove("active");

                }
            });

            function isSectionFilled(sectionId) {
                let filled = true;
                // Seleciona todos os inputs, selects e textareas visíveis e habilitados dentro da section
                $(`#${sectionId}`).find('input, select, textarea').each(function() {
                    // Só valida campos visíveis e não desabilitados
                    if (!$(this).is(':disabled') && $(this).is(':visible')) {
                        if (!$(this).val() || $(this).val().trim() === '') {
                            filled = false;
                            return false; // para o each
                        }
                    }
                });
                return filled;
            }

        })
    </script>
@endpush
