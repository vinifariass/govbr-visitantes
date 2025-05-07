<header class="br-header mb-4" id="header" data-sticky="data-sticky">
    <div class="container-lg">
        <div class="header-top  d-flex align-items-center">
            <div class="header-logo  d-flex align-items-center">
                <img src="{{ asset('images/logo_big.png') }}" style="max-height: 60px" alt="logo" /> <span
                    class="br-divider vertical"></span>
                <div class="header-title">
                    <h3 class="mb-0">Arquivo Nacional</h3>
                    <p class="mb-0">Ministério da Gestão e da Inovação em Serviços Públicos</p>
                </div>
            </div>

            <div class="header-actions">
                <div class="header-login">
                    <div class="dropdown">
                        <button class="br-sign-in" type="button" id="avatar-dropdown-trigger" data-toggle="dropdown"
                            data-target="avatar-menu" aria-label="Olá, Fulano"><span class="br-avatar"
                                title="Fulano da Silva"><span
                                    class="content bg-orange-vivid-30 text-pure-0">J</span></span><span
                                class="ml-2 text-gray-80 text-weight-regular">Olá, <span
                                    class="text-weight-semi-bold">Juliana</span></span><i class="fas fa-caret-down"
                                aria-hidden="true"></i>
                        </button>
                        <div class="br-list" id="avatar-menu" hidden="hidden" role="menu"
                            aria-labelledby="avatar-dropdown-trigger"
                            style="width: 100%;">
                            <a class="br-item" href="{{route('login')}}" role="menuitem" style="color: #071d41;">
                                <i class="fas fa-sign-out-alt mr-2" aria-hidden="true"></i>Sair
                            </a>


                        </div>
                    </div>
                </div>
            </div>

        </div>

</header>
