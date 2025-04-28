<div class="my-5">
    <nav class="br-step" data-initial="1" data-label="bottom" role="none">
        <div class="step-progress" role="listbox" aria-orientation="horizontal" aria-label="Lista de Opções">
            <button class="step-progress-btn {{ Route::is('template2') ? 'active' : '' }}" role="option" aria-posinset="1"
                aria-setsize="3" type="button" onclick="window.location.href='{{ route('template2') }}'">
                <span class="step-info">Template</span>
            </button>

            <button class="step-progress-btn {{ Route::is('cracha-step') ? 'active' : '' }}" role="option" aria-posinset="2"
                aria-setsize="3" type="button" onclick="window.location.href='{{ route('cracha-step') }}'">
                <span class="step-info">Crachá</span>
            </button>

            <button class="step-progress-btn {{ Route::is('relatorios-step') ? 'active' : '' }}" role="option" aria-posinset="3"
                aria-setsize="3" type="button" onclick="window.location.href='{{ route('relatorios-step') }}'">
                <span class="step-info">Relatório</span>
            </button>
        </div>
    </nav>
</div>
