<!doctype html>
<html lang="pt-br">
<link rel="stylesheet" href="https://cdngovbr-ds.estaleiro.serpro.gov.br/design-system/fonts/rawline/css/rawline.css" />

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Font Rawline-->
    <link rel="stylesheet"
        href="https://cdngovbr-ds.estaleiro.serpro.gov.br/design-system/fonts/rawline/css/rawline.css" />
    <!-- Font Raleway-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900&amp;display=swap" />
    <!-- Design System GOV.BR CSS-->
    <link rel="stylesheet" href="govbr/core.min.css" />
    <!-- Fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
    <title>Padrão Digital de Governo</title>
</head>

<body>
    <!-- Conteúdo-->
    {{-- Header       --}}

    <header class="br-header">
        <div class="container-lg">
            <div class="header-top">
                <div class="header-logo"><img
                        src="{{asset('images/logo_big.png')}}"
                        alt="logo" /><span class="br-divider vertical"></span>
                    <div class="header-sign">Arquivo Nacional</div>
                </div>
                <div class="header-actions">
                    <div class="header-links dropdown">
                        <button class="br-button circle small" type="button" data-toggle="dropdown"
                            aria-label="Abrir Acesso Rápido"><i class="fas fa-ellipsis-v" aria-hidden="true"></i>
                        </button>
                        <div class="br-list">
                            <div class="header">
                                <div class="title">Acesso Rápido</div>
                            </div><a class="br-item" href="javascript:void(0)">Link de acesso 1</a><a class="br-item"
                                href="javascript:void(0)">Link de acesso 2</a><a class="br-item"
                                href="javascript:void(0)">Link de acesso 3</a><a class="br-item"
                                href="javascript:void(0)">Link de acesso 4</a>
                        </div>
                    </div><span class="br-divider vertical mx-half mx-sm-1"></span>
                    <div class="header-functions dropdown">
                        <button class="br-button circle small" type="button" data-toggle="dropdown"
                            aria-label="Abrir Funcionalidades do Sistema"><i class="fas fa-th" aria-hidden="true"></i>
                        </button>
                        <div class="br-list">
                            <div class="header">
                                <div class="title">Funcionalidades do Sistema</div>
                            </div>
                            <div class="br-item">
                                <button class="br-button circle small" type="button" aria-label="Funcionalidade 1"><i
                                        class="fas fa-chart-bar" aria-hidden="true"></i><span
                                        class="text">Funcionalidade 1</span>
                                </button>
                            </div>
                            <div class="br-item">
                                <button class="br-button circle small" type="button" aria-label="Funcionalidade 2"><i
                                        class="fas fa-headset" aria-hidden="true"></i><span
                                        class="text">Funcionalidade 2</span>
                                </button>
                            </div>
                            <div class="br-item">
                                <button class="br-button circle small" type="button" aria-label="Funcionalidade 3"><i
                                        class="fas fa-comment" aria-hidden="true"></i><span
                                        class="text">Funcionalidade 3</span>
                                </button>
                            </div>
                            <div class="br-item">
                                <button class="br-button circle small" type="button" aria-label="Funcionalidade 4"><i
                                        class="fas fa-adjust" aria-hidden="true"></i><span class="text">Funcionalidade
                                        4</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="header-search-trigger">
                        <button class="br-button circle" type="button" aria-label="Abrir Busca" data-toggle="search"
                            data-target=".header-search"><i class="fas fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="header-login">
                        <div class="header-sign-in">
                            <button class="br-sign-in small" type="button" data-trigger="login"><i class="fas fa-user"
                                    aria-hidden="true"></i><span class="d-sm-inline">
                                        <a href="{{ route('login') }}" style=" text-decoration: none;">Entrar</a>
                                    </span>
                            </button>
                        </div>
                        <div class="header-avatar"></div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="header-menu">
                    <div class="header-menu-trigger">
                        <button class="br-button small circle" type="button" aria-label="Menu" data-toggle="menu"
                            data-target="#main-navigation" id="navigation"><i class="fas fa-bars"
                                aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="header-info">
                        <div class="header-title">Título do Header</div>
                        <div class="header-subtitle">Subtítulo do Header</div>
                    </div>
                </div>
                <div class="header-search">
                    <div class="br-input has-icon">
                        <label for="searchbox-7690">Texto da pesquisa</label>
                        <input id="searchbox-7690" type="text" placeholder="O que você procura?" />
                        <button class="br-button circle small" type="button" aria-label="Pesquisar"><i
                                class="fas fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                    <button class="br-button circle search-close ml-1" type="button" aria-label="Fechar Busca"
                        data-dismiss="search"><i class="fas fa-times" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>

    {{-- Fim Header     --}}

    <div class="col-sm-8 col-lg-5">
        <div class="br-input">
            <label for="input-default">Label / Rótulo</label>
            <input id="input-default" type="text" placeholder="Placeholder" />
            <p>Texto auxiliar. Função de previnir erros.</p>
        </div>
    </div>

    <div class="col-sm-8 col-lg-5">
        <div class="br-input">
            <label for="input-default">Label / Rótulo</label>
            <input id="input-default" type="text" placeholder="Placeholder" />
            <p>Texto auxiliar. Função de previnir erros.</p>
        </div>
    </div>

    <div class="col-sm-8 col-lg-5">
        <div class="br-input">
            <label for="input-default">Label / Rótulo</label>
            <input id="input-default" type="text" placeholder="Placeholder" />
            <p>Texto auxiliar. Função de previnir erros.</p>
        </div>
    </div>

    <div class="col-sm-8 col-lg-5">
        <div class="br-input">
            <label for="input-default">Label / Rótulo</label>
            <input id="input-default" type="text" placeholder="Placeholder" />
            <p>Texto auxiliar. Função de previnir erros.</p>
        </div>
    </div>

    {{-- Footer --}}

    <footer class="br-footer">
        <div class="container-lg">
            <div class="logo"><img
                    src="https://cdngovbr-ds.estaleiro.serpro.gov.br/design-system/images/logo-negative.png"
                    alt="Imagem" /></div>
            <div class="br-list horizontal" data-toggle="data-toggle" data-sub="data-sub">
                <div class="col-2"><a class="br-item header" href="javascript:void(0)">
                        <div class="content text-down-01 text-bold text-uppercase">Categoria 1</div>
                        <div class="support"><i class="fas fa-angle-down" aria-hidden="true"></i>
                        </div>
                    </a>
                    <div class="br-list"><span class="br-divider d-md-none"></span><a class="br-item"
                            href="javascript:void(0)">
                            <div class="content">Qui esse</div>
                        </a><a class="br-item" href="javascript:void(0)">
                            <div class="content">Adipisicing culpa et ad consequat</div>
                        </a><a class="br-item" href="javascript:void(0)">
                            <div class="content">Adipisicing culpa et ad consequat</div>
                        </a><a class="br-item" href="javascript:void(0)">
                            <div class="content">Deserunt</div>
                        </a><span class="br-divider d-md-none"></span>
                    </div>
                </div>
                <div class="col-2"><a class="br-item header" href="javascript:void(0)">
                        <div class="content text-down-01 text-bold text-uppercase">Categoria 2</div>
                        <div class="support"><i class="fas fa-angle-down" aria-hidden="true"></i>
                        </div>
                    </a>
                    <div class="br-list"><span class="br-divider d-md-none"></span><a class="br-item"
                            href="javascript:void(0)">
                            <div class="content">Adipisicing culpa et ad consequat</div>
                        </a><a class="br-item" href="javascript:void(0)">
                            <div class="content">Est ex deserunt</div>
                        </a><a class="br-item" href="javascript:void(0)">
                            <div class="content">Duis incididunt consectetur</div>
                        </a><span class="br-divider d-md-none"></span>
                    </div>
                </div>
                <div class="col-2"><a class="br-item header" href="javascript:void(0)">
                        <div class="content text-down-01 text-bold text-uppercase">Categoria 3</div>
                        <div class="support"><i class="fas fa-angle-down" aria-hidden="true"></i>
                        </div>
                    </a>
                    <div class="br-list"><span class="br-divider d-md-none"></span><a class="br-item"
                            href="javascript:void(0)">
                            <div class="content">Adipisicing culpa et ad consequat</div>
                        </a><a class="br-item" href="javascript:void(0)">
                            <div class="content">Qui esse</div>
                        </a><span class="br-divider d-md-none"></span>
                    </div>
                </div>
                <div class="col-2"><a class="br-item header" href="javascript:void(0)">
                        <div class="content text-down-01 text-bold text-uppercase">Categoria 4</div>
                        <div class="support"><i class="fas fa-angle-down" aria-hidden="true"></i>
                        </div>
                    </a>
                    <div class="br-list"><span class="br-divider d-md-none"></span><a class="br-item"
                            href="javascript:void(0)">
                            <div class="content">Deserunt</div>
                        </a><a class="br-item" href="javascript:void(0)">
                            <div class="content">Ad deserunt nostrud</div>
                        </a><a class="br-item" href="javascript:void(0)">
                            <div class="content">Est ex deserunt</div>
                        </a><span class="br-divider d-md-none"></span>
                    </div>
                </div>
                <div class="col-2"><a class="br-item header" href="javascript:void(0)">
                        <div class="content text-down-01 text-bold text-uppercase">Categoria 5</div>
                        <div class="support"><i class="fas fa-angle-down" aria-hidden="true"></i>
                        </div>
                    </a>
                    <div class="br-list"><span class="br-divider d-md-none"></span><a class="br-item"
                            href="javascript:void(0)">
                            <div class="content">Duis incididunt consectetur</div>
                        </a><a class="br-item" href="javascript:void(0)">
                            <div class="content">Qui esse</div>
                        </a><a class="br-item" href="javascript:void(0)">
                            <div class="content">Ex qui laborum consectetur aute commodo</div>
                        </a><a class="br-item" href="javascript:void(0)">
                            <div class="content">Est ex deserunt</div>
                        </a><span class="br-divider d-md-none"></span>
                    </div>
                </div>
                <div class="col-2"><a class="br-item header" href="javascript:void(0)">
                        <div class="content text-down-01 text-bold text-uppercase">Categoria 6</div>
                        <div class="support"><i class="fas fa-angle-down" aria-hidden="true"></i>
                        </div>
                    </a>
                    <div class="br-list"><span class="br-divider d-md-none"></span><a class="br-item"
                            href="javascript:void(0)">
                            <div class="content">Ex qui laborum consectetur aute commodo</div>
                        </a><a class="br-item" href="javascript:void(0)">
                            <div class="content">Duis incididunt consectetur</div>
                        </a><a class="br-item" href="javascript:void(0)">
                            <div class="content">Deserunt</div>
                        </a><span class="br-divider d-md-none"></span>
                    </div>
                </div>
            </div>
            <div class="d-none d-sm-block">
                <div class="row align-items-end justify-content-between py-5">
                    <div class="col">
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
                    </div>
                    <div class="col assigns text-right"><img class="ml-4"
                            src="https://cdngovbr-ds.estaleiro.serpro.gov.br/design-system/images/logo-assign-negative.png"
                            alt="Imagem" /><img class="ml-4"
                            src="https://cdngovbr-ds.estaleiro.serpro.gov.br/design-system/images/logo-assign-negative.png"
                            alt="Imagem" />
                    </div>
                </div>
            </div>
        </div><span class="br-divider my-3"></span>
        <div class="container-lg">
            <div class="info">
                <div class="text-down-01 text-medium pb-3">Texto destinado a exibição de informações relacionadas
                    à&nbsp;<strong>licença de uso.</strong></div>
            </div>
        </div>
    </footer>

    {{-- Fim Footer     --}}

    <!-- Scripts de componentes -->
    <script type="module" src="govbr/core.min.js"></script>
</body>

</html>
