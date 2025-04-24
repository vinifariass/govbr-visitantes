<!-- resources/views/visitante/cracha.blade.php -->
<div style="width: 300px; border: 1px solid #000; padding: 20px; font-family: sans-serif">
    <h3 style="margin-bottom: 10px;">Crachá de Visitante</h3>
    <p><strong>Nome:</strong> Vinicius</p>
    <p><strong>Empresa:</strong> CONNECTICOM</p>
    
    <div>
        {!! QrCode::size(100)->generate(12) !!}
    </div>

    <p style="margin-top: 10px;">{{ now()->format('d/m/Y H:i') }}</p>
</div>
