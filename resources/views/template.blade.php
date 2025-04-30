@extends('base')

<div class="template-base">
  
    @section('content')
        <div class="container-lg">

            @include('layouts.tab')

            <div class="br-menu" id="main-navigation">
                <div class="menu-container">
                    <div class="menu-panel">
                        <div class="menu-header">
                            <div class="menu-title"><img
                                    src="data:image/png;base64,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"
                                    alt="Imagem ilustrativa" /><span>Identificação do site ou Sistema</span>
                            </div>
                            <div class="menu-close">
                                <button class="br-button circle" type="button" aria-label="Fechar o menu"
                                    data-dismiss="menu"><i class="fas fa-times" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        <nav class="menu-body" role="tree">
                            <div class="menu-folder"><a class="menu-item" href="javascript: void(0)" role="treeitem"><span
                                        class="icon"><i class="fas fa-bell" aria-hidden="true"></i></span><span
                                        class="content">Camada
                                        1</span></a>
                                <ul>
                                    <li><a class="menu-item" href="javascript: void(0)" role="treeitem"><span
                                                class="icon"><i class="fas fa-heart" aria-hidden="true"></i></span><span
                                                class="content">Camada
                                                2</span></a></li>
                                    <li><a class="menu-item" href="javascript: void(0)" role="treeitem"><span
                                                class="icon"><i class="fas fa-address-book"
                                                    aria-hidden="true"></i></span><span class="content">Camada
                                                2</span></a>
                                        <ul>
                                            <li><a class="menu-item" href="javascript: void(0)" role="treeitem"><span
                                                        class="icon"><i class="fas fa-book"
                                                            aria-hidden="true"></i></span><span class="content">Camada
                                                        3</span></a></li>
                                            <li><a class="menu-item" href="javascript: void(0)" role="treeitem"><span
                                                        class="icon"><i class="fas fa-tree"
                                                            aria-hidden="true"></i></span><span class="content">Camada
                                                        3</span></a>
                                                <ul>
                                                    <li><a class="menu-item" href="javascript: void(0)"
                                                            role="treeitem"><span class="content">Camada
                                                                4</span></a></li>
                                                    <li><a class="menu-item" href="javascript: void(0)"
                                                            role="treeitem"><span class="content">Camada
                                                                4</span></a></li>
                                                    <li><a class="menu-item" href="javascript: void(0)"
                                                            role="treeitem"><span class="content">Camada
                                                                4</span></a></li>
                                                </ul>
                                            </li>
                                            <li><a class="menu-item" href="javascript: void(0)"><span class="icon"><i
                                                            class="fas fa-moon" aria-hidden="true"></i></span><span
                                                        class="content">Camada
                                                        3</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="javascript: void(0)"><span class="icon"><i
                                                    class="fas fa-archive" aria-hidden="true"></i></span><span
                                                class="content">Camada
                                                2</span></a></li>
                                </ul>
                            </div>
                            <div class="menu-folder"><a class="menu-item" href="javascript: void(0)"
                                    role="treeitem"><span class="icon"><i class="fas fa-bell"
                                            aria-hidden="true"></i></span><span class="content">Camada
                                        1</span></a>
                                <ul>
                                    <li><a class="menu-item" href="javascript: void(0)" role="treeitem"><span
                                                class="icon"><i class="fas fa-heart"
                                                    aria-hidden="true"></i></span><span class="content">Camada
                                                2</span></a></li>
                                    <li><a class="menu-item" href="javascript: void(0)" role="treeitem"><span
                                                class="icon"><i class="fas fa-address-book"
                                                    aria-hidden="true"></i></span><span class="content">Camada
                                                2</span></a>
                                        <ul>
                                            <li><a class="menu-item" href="javascript: void(0)" role="treeitem"><span
                                                        class="icon"><i class="fas fa-book"
                                                            aria-hidden="true"></i></span><span class="content">Camada
                                                        3</span></a></li>
                                            <li><a class="menu-item" href="javascript: void(0)" role="treeitem"><span
                                                        class="icon"><i class="fas fa-tree"
                                                            aria-hidden="true"></i></span><span class="content">Camada
                                                        3</span></a>
                                                <ul>
                                                    <li><a class="menu-item" href="javascript: void(0)"
                                                            role="treeitem"><span class="content">Camada
                                                                4</span></a></li>
                                                    <li><a class="menu-item" href="javascript: void(0)"
                                                            role="treeitem"><span class="content">Camada
                                                                4</span></a></li>
                                                    <li><a class="menu-item" href="javascript: void(0)"
                                                            role="treeitem"><span class="content">Camada
                                                                4</span></a></li>
                                                </ul>
                                            </li>
                                            <li><a class="menu-item" href="javascript: void(0)"><span class="icon"><i
                                                            class="fas fa-moon" aria-hidden="true"></i></span><span
                                                        class="content">Camada
                                                        3</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="javascript: void(0)"><span class="icon"><i
                                                    class="fas fa-archive" aria-hidden="true"></i></span><span
                                                class="content">Camada
                                                2</span></a></li>
                                </ul>
                            </div>
                            <div class="menu-folder"><a class="menu-item" href="javascript: void(0)"
                                    role="treeitem"><span class="icon"><i class="fas fa-bell"
                                            aria-hidden="true"></i></span><span class="content">Camada
                                        1</span></a>
                                <ul>
                                    <li><a class="menu-item" href="javascript: void(0)" role="treeitem"><span
                                                class="icon"><i class="fas fa-heart"
                                                    aria-hidden="true"></i></span><span class="content">Camada
                                                2</span></a></li>
                                    <li><a class="menu-item" href="javascript: void(0)" role="treeitem"><span
                                                class="icon"><i class="fas fa-address-book"
                                                    aria-hidden="true"></i></span><span class="content">Camada
                                                2</span></a>
                                        <ul>
                                            <li><a class="menu-item" href="javascript: void(0)" role="treeitem"><span
                                                        class="icon"><i class="fas fa-book"
                                                            aria-hidden="true"></i></span><span class="content">Camada
                                                        3</span></a></li>
                                            <li><a class="menu-item" href="javascript: void(0)" role="treeitem"><span
                                                        class="icon"><i class="fas fa-tree"
                                                            aria-hidden="true"></i></span><span class="content">Camada
                                                        3</span></a>
                                                <ul>
                                                    <li><a class="menu-item" href="javascript: void(0)"
                                                            role="treeitem"><span class="content">Camada
                                                                4</span></a></li>
                                                    <li><a class="menu-item" href="javascript: void(0)"
                                                            role="treeitem"><span class="content">Camada
                                                                4</span></a></li>
                                                    <li><a class="menu-item" href="javascript: void(0)"
                                                            role="treeitem"><span class="content">Camada
                                                                4</span></a></li>
                                                </ul>
                                            </li>
                                            <li><a class="menu-item" href="javascript: void(0)"><span class="icon"><i
                                                            class="fas fa-moon" aria-hidden="true"></i></span><span
                                                        class="content">Camada
                                                        3</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="javascript: void(0)"><span class="icon"><i
                                                    class="fas fa-archive" aria-hidden="true"></i></span><span
                                                class="content">Camada
                                                2</span></a></li>
                                </ul>
                            </div><a class="menu-item divider" href="javascript: void(0)" role="treeitem"><span
                                    class="icon"><i class="fas fa-bell" aria-hidden="true"></i></span><span
                                    class="content">Item de Camada
                                    1</span></a><a class="menu-item divider" href="javascript: void(0)"
                                role="treeitem"><span class="icon"><i class="fas fa-bell"
                                        aria-hidden="true"></i></span><span class="content">Item de Camada
                                    1</span></a>
                        </nav>
                        <div class="menu-footer">
                            <div class="menu-links"><a href="javascript: void(0)"><span class="mr-1">Link
                                        externo 1</span><i class="fas fa-external-link-square-alt"
                                        aria-hidden="true"></i></a><a href="javascript: void(0)"><span
                                        class="mr-1">Link externo 2</span><i class="fas fa-external-link-square-alt"
                                        aria-hidden="true"></i></a>
                            </div>
                            <div class="social-network">
                                <div class="social-network-title">Redes Sociais</div>
                                <div class="d-flex"><a class="br-button circle" href="javascript: void(0)"
                                        aria-label="Compartilhar por Facebook"><i class="fab fa-facebook-f"
                                            aria-hidden="true"></i></a><a class="br-button circle"
                                        href="javascript: void(0)" aria-label="Compartilhar por Twitter"><i
                                            class="fab fa-twitter" aria-hidden="true"></i></a><a class="br-button circle"
                                        href="javascript: void(0)" aria-label="Compartilhar por Linkedin"><i
                                            class="fab fa-linkedin-in" aria-hidden="true"></i></a><a
                                        class="br-button circle" href="javascript: void(0)"
                                        aria-label="Compartilhar por Whatsapp"><i class="fab fa-whatsapp"
                                            aria-hidden="true"></i></a></div>
                            </div>
                            <div class="menu-info">
                                <div class="text-center text-down-01">Todo o conteúdo deste site está publicado
                                    sob a licença <strong>Creative Commons Atribuição-SemDerivações 3.0</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-scrim" data-dismiss="menu" tabindex="0"></div>
                </div>
                <div class="col mb-5">

                    <div class="main-content pl-sm-3 mt-4" id="main-content">
                        <h1>Cadastro de Visitantes</h1>
                        <div class="row">
                            <!-- Campos do formulário -->
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <div class="br-select">
                                            <div class="br-input">
                                                <label for="tipoDocumento">Tipo de Documento</label>
                                                <input id="tipoDocumento" type="text"
                                                    placeholder="Selecione o item" />
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
                                        <div class="br-input">
                                            {{--  Ao preencher o campo abaixo preenche o nome do visitante o telefone automaticamente --}}
                                            <label for="numero_documento">Número do Documento</label>
                                            <input id="numero_documento" type="text" placeholder="Digite aqui" />
                                        </div>
                                        <span class="feedback warning" role="alert"><i
                                                class="fas fa-exclamation-triangle" aria-hidden="true"></i>Não inserir
                                            caracteres especiais</span>
                                    </div>
                                </div>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="br-input">
                                                <label for="nomeVisitante">Nome do Visitante</label>
                                                <input id="nomeVisitante" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="br-input">
                                                <label for="telefone">Telefone</label>
                                                <input id="telefone" type="text" placeholder="(21) 99999-9999" />
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>

                            <!-- Avatar -->
                            <div class="col-md-2 d-flex align-items-center justify-content-end flex-wrap flex-row-reverse">
                                <span class="br-avatar large mr-3" id="avatar-preview" title="Fulano da Silva">
                                    <span class="content"><i class="fas fa-user" aria-hidden="true"></i></span>
                                </span>

                                <div class="scrimutilexamplemodal">
                                    <button class="br-button primary" type="button" id="buttonactivatemodal">Capturar
                                        Foto
                                    </button>
                                </div>
                                <!-- Input de arquivo escondido -->
                                <input type="file" id="foto-input" accept="image/*" style="display: none;"
                                    onchange="mostrarFoto(event)">

                            </div>
                        </div>

                        <!-- Botões de Ação -->

                    </div>


                </div>
                <hr class="br-divider" />
                <h1>Registro de Visita</h1>

                <div class="row">
                    <!-- Campos do formulário -->
                    <div class="col-md-10">
                        <div class="row">

                        </div>
                        <fieldset>
                            <div class="row">
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
                                            <label for="tipoVisita">Tipo de Visita</label>
                                            <input id="tipoVisita" type="text"
                                                placeholder="Selecione o tipo de Visita" />
                                            <button class="br-button" type="button" aria-label="Exibir lista"
                                                tabindex="-1" data-trigger="data-trigger">
                                                <i class="fas fa-angle-down" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <div class="br-list" tabindex="0">
                                            <div class="br-item" tabindex="-1">
                                                <div class="br-radio">
                                                    <input id="tipoVisita-cbs0" name="tipoVisita-cbs0" type="radio" />
                                                    <label for="tipoVisita-cbs0">Consulente</label>
                                                </div>
                                            </div>
                                            <div class="br-item" tabindex="-1">
                                                <div class="br-radio">
                                                    <input id="tipoVisita-cbs1" name="tipoVisita-cbs1" type="radio" />
                                                    <label for="tipoVisita-cbs1">DF > SUREG > Sala 06 > Divisão de
                                                        Gestão Interna (Dgint)</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <div class="br-select">
                                        <div class="br-input">
                                            <label for="atribuirCracha">Atribuir Crachá</label>
                                            <input id="atribuirCracha" type="text" placeholder="Selecione o crachá" />
                                            <button class="br-button" type="button" aria-label="Exibir lista"
                                                tabindex="-1" data-trigger="data-trigger">
                                                <i class="fas fa-angle-down" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <div class="br-list" tabindex="0">
                                            <div class="br-item" tabindex="-1">
                                                <div class="br-radio">
                                                    <input id="atribuirCracha-cbs0" name="atribuirCracha-cbs0" type="radio" />
                                                    <label for="atribuirCracha-cbs0">ANV001</label>
                                                </div>
                                            </div>
                                            <div class="br-item" tabindex="-1">
                                                <div class="br-radio">
                                                    <input id="atribuirCracha-cbs1" name="atribuirCracha-cbs1" type="radio" />
                                                    <label for="atribuirCracha-cbs1">ANV002</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <div class="p-3">
                        <button class="br-button primary active mr-3" type="button">Salvar
                        </button>
                        <button class="br-button primary mr-3" type="button" disabled="disabled">Editar
                        </button>

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
                alert("Não foi possível acessar a webcam. Por favor, verifique as permissões.");
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
                alert("Por favor, selecione uma foto primeiro.");
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

            function checkFieldsAndSetReadonly() {
                const tipoDocumento = $("#tipoDocumento").val().trim();
                const numeroDocumento = $("#numero_documento").val().trim();
                const nomeVisitante = $("#nomeVisitante").val().trim();
                const telefone = $("#telefone").val().trim();

                const isAllEmpty = !(tipoDocumento && numeroDocumento && nomeVisitante && telefone);

                // Seleciona todos os .br-select já inicializados
                const selects = document.querySelectorAll(".br-select");

                selects.forEach(select => {
                    const input = select.querySelector('input[type="text"]');
                    const button = select.querySelector('button');
                    if (input && input.id === "tipoDocumento") {
                        return;
                    }
                    if (isAllEmpty) {
                        if (input) {
                            input.readOnly = true;
                            input.disabled = true;
                            input.style.backgroundColor = '#f2f2f2';
                        }
                        if (button) {
                            button.disabled = true;
                            button.style.pointerEvents = "none";
                            button.style.opacity = "0.5";
                        }
                    } else {
                        if (input) {
                            input.readOnly = false;
                            input.disabled = false;
                            input.style.backgroundColor = '';
                        }
                        if (button) {
                            button.disabled = false;
                            button.style.pointerEvents = "auto";
                            button.style.opacity = "1";
                        }
                    }
                });
            }

            $("#tipoDocumento, #numero_documento, #nomeVisitante, #telefone")
                .on("input change", checkFieldsAndSetReadonly);

            checkFieldsAndSetReadonly();

            $('.br-radio input[type="radio"]').on('change', function() {
                // Seu código aqui
                checkFieldsAndSetReadonly();

            });
        })
    </script>
@endpush
