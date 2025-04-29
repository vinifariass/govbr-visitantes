<header class="br-header mb-4" id="header" data-sticky="data-sticky">
    <div class="container-lg">
        <div class="header-top  d-flex align-items-center">
            <div class="header-logo  d-flex align-items-center">
                <img src="{{ asset('images/logo_big.png') }}" alt="logo" /><span class="br-divider vertical"></span>
                <div class="header-title">
                    <h3 class="mb-0">Arquivo Nacional</h3>
                    <p class="mb-0">Ministério da Gestão e da Inovação em Serviços Públicos</p>
                </div>
            </div>
            <div class="header-actions">

                <div class="header-login">
                    <div class="header-sign-in">
                        <button class="br-sign-in small" type="button" data-trigger="login"><i class="fas fa-user"
                                aria-hidden="true"></i><span class="d-sm-inline">
                                <a href="{{ route('login') }}" style="text-decoration: none;">Entrar</a>
                            </span>
                        </button>
                    </div>
                    <div class="header-avatar"></div>
                </div>
            </div>
        </div>

    </div>
</header>
