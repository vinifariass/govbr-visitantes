<div class="my-5">
    <nav class="br-step" data-initial="1" data-label="bottom" role="none">
        <div class="step-progress" role="listbox" aria-orientation="horizontal" aria-label="Lista de Opções" >
            <button class="step-progress-btn {{ Route::is('cadastro-visitante') ? 'active' : '' }}" id="cadastroVisitaStepBtn" role="option" aria-posinset="1"
                aria-setsize="3" type="button">
                <span class="step-info">Visitante</span>
            </button>

            <button class="step-progress-btn {{ Route::is('registro-visita') ? 'active' : '' }}" role="option" id="registroVisitaStepBtn" aria-posinset="2"
                aria-setsize="3" type="button" >
                <span class="step-info">Visita</span>
            </button>

            <button id="atribuirCrachaStepBtn" class="step-progress-btn {{ Route::is('atribuir-cracha') ? 'active' : '' }}" role="option" aria-posinset="3"
                aria-setsize="3" type="button" >
                <span class="step-info">Crachá</span>
            </button>
        </div>
    </nav>
</div>
