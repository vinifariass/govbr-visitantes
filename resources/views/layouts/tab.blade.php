<div class="br-tab">
    <nav class="tab-nav">
        <ul>
            <li class="tab-item {{ Route::is('template') ? 'active' : '' }}">
                <button type="button" data-panel="panel-1-icon" onclick="window.location.href='{{ route('template') }}'">
                    <span class="name">
                        <span class="d-flex flex-column flex-sm-row">
                            <span class="icon mb-1 mb-sm-0 mr-sm-1"></span>
                            <span class="name">Dados do Visitante</span>
                        </span>
                    </span>
                </button>
            </li>
            <li class="tab-item {{ Route::is('registro') ? 'active' : '' }}">
                <button type="button" onclick="window.location.href='{{ route('registro') }}'">
                    <span class="name">
                        <span class="d-flex flex-column flex-sm-row">
                            <span class="icon mb-1 mb-sm-0 mr-sm-1"></span>
                            <span class="name">Registro de Visita</span>
                        </span>
                    </span>
                </button>
            </li>
            <li class="tab-item {{ Route::is('cracha') ? 'active' : '' }}">
                <button type="button" data-panel="panel-3-icon" onclick="window.location.href='{{ route('cracha') }}'">
                    <span class="name">
                        <span class="d-flex flex-column flex-sm-row">
                            <span class="icon mb-1 mb-sm-0 mr-sm-1"></span>
                            <span class="name">Gerenciamento de Crachá</span>
                        </span>
                    </span>
                </button>
            </li>
            <li class="tab-item {{ Route::is('relatorios') ? 'active' : '' }}">
                <button type="button" data-panel="panel-4-icon" onclick="window.location.href='{{ route('relatorios') }}'">
                    <span class="name">
                        <span class="d-flex flex-column flex-sm-row">
                            <span class="icon mb-1 mb-sm-0 mr-sm-1"></span>
                            <span class="name">Relatórios</span>
                        </span>
                    </span>
                </button>
            </li>
        </ul>
    </nav>
</div>