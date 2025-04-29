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

                @include('layouts.step')

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

                            <div class="br-table" title="Tabela irregular 1">
                                <div class="table-header">
                                    <div class="top-bar">
                                        <div class="table-title">Tabela irregular 1</div>
                                        <div class="actions-trigger text-nowrap">
                                            <button class="br-button circle" type="button" id="button-dropdown-density"
                                                title="Ver mais opções" data-toggle="dropdown"
                                                data-target="target01-4200" aria-label="Definir densidade da tabela"
                                                aria-haspopup="true" aria-live="polite"><i class="fas fa-ellipsis-v"
                                                    aria-hidden="true"></i>
                                            </button>
                                            <div class="br-list" id="target01-4200" role="menu"
                                                aria-labelledby="button-dropdown-density" hidden="hidden">
                                                <button class="br-item" type="button" data-density="small"
                                                    role="menuitem">Densidade alta
                                                </button><span class="br-divider"></span>
                                                <button class="br-item" type="button" data-density="medium"
                                                    role="menuitem">Densidade média
                                                </button><span class="br-divider"></span>
                                                <button class="br-item" type="button" data-density="large"
                                                    role="menuitem">Densidade baixa
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table>
                                    <colgroup span="3"></colgroup>
                                    <thead>
                                        <tr>
                                            <th class="border-bottom border-left" colspan="6" scope="col">Numero do
                                                Crachá</th>
                                            <th class="border-bottom border-left" colspan="1" scope="colgroup">Status
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="6">ANVI001</td>
                                            <td>Em cadastro</td>
                                        </tr>

                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td colspan="6">ANVI002</td>
                                            <td>Disponível</td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">ANVI003</td>
                                            <td>Em uso</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="p-3">
                            <div class="scrimutilexamplemodal">

                                <button class="br-button primary active mr-3" type="button" id="buttonactivatemodal">
                                    + Novo crachá
                                </button>
                            </div>
                        </div>

                        <div class="br-scrim-util foco" id="scrimutilexamplemodal" data-scrim="true"
                            style="display: none;">
                            <div class="br-modal" aria-labelledby="titulomodalexemplo">
                                <div class="br-modal-header" id="titulomodalexemplo">Inclusão de crachá</div>
                                <div class="br-modal-body">
                                    <p>Insira o número de crachás que deseja inserir e o tipo.</p>
                                    <div class="form-group">
                                        <label for="quantity">Quantidade</label>
                                        <input type="number" id="quantity" class="form-control"
                                            placeholder="Digite somente números" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="badge-type">Tipo de crachá</label>
                                        <select id="badge-type" class="form-control">
                                            <option value="consultant">Consultante</option>
                                            <option value="employee">Funcionário</option>
                                            <option value="visitor">Visitante</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="br-modal-footer justify-content-between">
                                    <button class="br-button secondary" type="button"
                                        onclick="closeModal()">Cancelar</button>
                                    <button class="br-button primary" type="button"
                                        onclick="closeModal()">Incluir</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>

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

            const openModalButton = document.getElementById('open-new-badge-modal');
            const modal = document.getElementById('new-badge-modal');
            const backdrop = document.getElementById('modal-backdrop');

            document.getElementById('buttonactivatemodal').addEventListener('click', openModal);
            // Função para abrir o modal
            function openModal() {
                document.getElementById('scrimutilexamplemodal').style.display = 'flex';

            }
            
        });
        function closeModal() {
            document.querySelector('.br-scrim-util').style.display = 'none';
        }
    </script>
    @endsection

    <style>
        /* Estilo geral do modal */
        .br-modal {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            z-index: 9999;
            /* Garante que o modal fique na frente */
            display: none;
            /* Inicialmente oculto */
        }

        .br-modal.d-none {
            display: none;
        }

        .br-modal.large {
            max-width: 400px;
        }

        .br-modal-header {
            font-weight: bold;
            margin-bottom: 20px;
        }

        .br-modal-body {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .br-modal-footer button {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .br-button.secondary {
            background-color: #f0f0f0;
            color: #333;
        }

        .br-button.primary {
            background-color: #007bff;
            color: #fff;
        }

        .modal-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9998;
            display: none;
        }

        .modal-backdrop.d-block {
            display: block;
        }
    </style>
</body>


</html>
