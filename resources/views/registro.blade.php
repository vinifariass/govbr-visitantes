<!DOCTYPE html>
<html lang="pt-BR">
@section('content')

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Template básico</title>
    </head>

    <body>
        <div class="template-base">
            <nav class="br-skiplink" role="menubar"><a class="br-item" href="#main-content" role="menuitem" accesskey="1">Ir
                    para o conteúdo <span aria-hidden="true">(1/4)</span> <span aria-hidden="true"
                        class="br-tag text ml-1">1</span></a><a class="br-item" href="#header-navigation" role="menuitem"
                    accesskey="2">Ir para o menu <span aria-hidden="true">(2/4)</span> <span aria-hidden="true"
                        class="br-tag text ml-1">2</span></a><a class="br-item" href="#main-searchbox" role="menuitem"
                    accesskey="3">Ir para a busca <span aria-hidden="true">(3/4)</span> <span aria-hidden="true"
                        class="br-tag text ml-1">3</span></a><a class="br-item" href="#footer" role="menuitem"
                    accesskey="4">Ir para o rodapé <span aria-hidden="true">(4/4)</span> <span aria-hidden="true"
                        class="br-tag text ml-1">4</span></a>
            </nav>
            @extends('base')
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
                                                <li><a class="menu-item" href="javascript: void(0)"><span
                                                            class="icon"><i class="fas fa-moon"
                                                                aria-hidden="true"></i></span><span class="content">Camada
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
                                                <li><a class="menu-item" href="javascript: void(0)"><span
                                                            class="icon"><i class="fas fa-moon"
                                                                aria-hidden="true"></i></span><span class="content">Camada
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
                                                <li><a class="menu-item" href="javascript: void(0)"><span
                                                            class="icon"><i class="fas fa-moon"
                                                                aria-hidden="true"></i></span><span class="content">Camada
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
                                                class="fab fa-twitter" aria-hidden="true"></i></a><a
                                            class="br-button circle" href="javascript: void(0)"
                                            aria-label="Compartilhar por Linkedin"><i class="fab fa-linkedin-in"
                                                aria-hidden="true"></i></a><a class="br-button circle"
                                            href="javascript: void(0)" aria-label="Compartilhar por Whatsapp"><i
                                                class="fab fa-whatsapp" aria-hidden="true"></i></a></div>
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
                                        {{--    <div class="col-md-4 mb-3">
                                            <div class="br-select" multiple="multiple">
                                                <div class="br-input">
                                                    <label for="select-multiple">Tipo de Documento</label>
                                                    <input id="select-multiple" type="text"
                                                        placeholder="Selecione o item" />
                                                    <button class="br-button" type="button" aria-label="Exibir lista"
                                                        tabindex="-1" data-trigger="data-trigger">
                                                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                                <div class="br-list" tabindex="0">
                                                    <div class="br-item" tabindex="-1">
                                                        <div class="br-checkbox">
                                                            <input id="cbs0" name="cbs0" type="checkbox" />
                                                            <label for="cbs0">CPF</label>
                                                        </div>
                                                    </div>
                                                    <div class="br-item" tabindex="-1">
                                                        <div class="br-checkbox">
                                                            <input id="cbs1" name="cbs1" type="checkbox" />
                                                            <label for="cbs1">Passaporte</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="col-md-4 mb-3">
                                            <div class="br-input">
                                                <label for="numero_documento">Documento</label>
                                                <input id="numero_documento" type="text"
                                                    placeholder="Informe o CPF ou Passaporte" />
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="br-input">
                                                <label for="numero_documento">Nome do visitante</label>
                                                <input id="numero_documento" type="text" />
                                            </div>

                                        </div>
                                    </div>
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="br-select">
                                                    <div class="br-input">
                                                        <label for="select">Destino</label>
                                                        <input id="select" type="text"
                                                            placeholder="Busque pela sala" />
                                                        <button class="br-button" type="button"
                                                            aria-label="Exibir lista" tabindex="-1"
                                                            data-trigger="data-trigger">
                                                            <i class="fas fa-angle-down" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                    <div class="br-list" tabindex="0">
                                                        <div class="br-item" tabindex="-1">
                                                            <div class="br-checkbox">
                                                                <input id="cbs0" name="cbs0" type="checkbox" />
                                                                <label for="cbs0">DF > SUREG > Sala 03 >
                                                                    Gabinete</label>
                                                            </div>
                                                        </div>
                                                        <div class="br-item" tabindex="-1">
                                                            <div class="br-checkbox">
                                                                <input id="cbs1" name="cbs1" type="checkbox" />
                                                                <label for="cbs1">DF > SUREG > Sala 06 > Divisão de
                                                                    Gestão Interna (Dgint)</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <div class="br-select">
                                                    <div class="br-input">
                                                        <label for="select">Tipo de Visita</label>
                                                        <input id="select" type="text"
                                                            placeholder="Selecione o tipo de Visita" />
                                                        <button class="br-button" type="button"
                                                            aria-label="Exibir lista" tabindex="-1"
                                                            data-trigger="data-trigger">
                                                            <i class="fas fa-angle-down" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                    <div class="br-list" tabindex="0">
                                                        <div class="br-item" tabindex="-1">
                                                            <div class="br-checkbox">
                                                                <input id="cbs0" name="cbs0" type="checkbox" />
                                                                <label for="cbs0">Consulente</label>
                                                            </div>
                                                        </div>
                                                        <div class="br-item" tabindex="-1">
                                                            <div class="br-checkbox">
                                                                <input id="cbs1" name="cbs1" type="checkbox" />
                                                                <label for="cbs1">DF > SUREG > Sala 06 > Divisão de
                                                                    Gestão Interna (Dgint)</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3 mb-3">
                                                <div class="br-select">
                                                    <div class="br-input">
                                                        <label for="select">Atribuir Crachá</label>
                                                        <input id="select" type="text"
                                                            placeholder="Selecione o crachá" />
                                                        <button class="br-button" type="button"
                                                            aria-label="Exibir lista" tabindex="-1"
                                                            data-trigger="data-trigger">
                                                            <i class="fas fa-angle-down" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                    <div class="br-list" tabindex="0">
                                                        <div class="br-item" tabindex="-1">
                                                            <div class="br-checkbox">
                                                                <input id="cbs0" name="cbs0" type="checkbox" />
                                                                <label for="cbs0">ANV001</label>
                                                            </div>
                                                        </div>
                                                        <div class="br-item" tabindex="-1">
                                                            <div class="br-checkbox">
                                                                <input id="cbs1" name="cbs1" type="checkbox" />
                                                                <label for="cbs1">ANV002</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>

                                <!-- Avatar -->
                                <div
                                    class="col-md-2 d-flex align-items-center justify-content-end flex-wrap flex-row-reverse">
                                    <span class="br-avatar large mr-3" title="Fulano da Silva">
                                        <span class="content"><i class="fas fa-user" aria-hidden="true"></i></span>
                                    </span>
                                </div>
                            </div>

                            <!-- Botões de Ação -->

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
        </div>
        </div>
    @endsection

    <div class="br-cookiebar default d-none" tabindex="-1"></div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Seleciona todos os elementos com a classe 'br-select'
            const selectElements = document.querySelectorAll('.br-select');

            // Itera sobre cada elemento e inicializa o BRSelect
            selectElements.forEach((selectElement, index) => {
                new BRSelect(`example-select-${index}`, selectElement);
            });
        });
    </script>
</body>


</html>
