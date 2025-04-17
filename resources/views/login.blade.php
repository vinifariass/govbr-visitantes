<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="seu-arquivo-de-estilos.css">
</head>

<body>
    @extends('base')
    @section('content')
        <div class="login-container">
            <div class="login-left">
                <h1>Controle de Visitantes</h1>
            </div>
            <div class="login-right">
                <h2>Acesse sua conta</h2>
                <form class="form-login">
                    <div class="form-group">
                        <label for="usuario">Usuário</label>
                        <input type="text" id="usuario" class="form-control" placeholder="Digite somente números">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" class="form-control" placeholder="Digite sua senha">
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
            </div>
        </div>
        <footer class="govbr-footer">
            <div class="container">
                <div class="govbr-footer-logo">
                    <img src="https://www.gov.br/++theme++plonegovbr.brasil.gov.br/static/assets/img/brasao.svg"
                        alt="gov.br">
                    <span>gov<span class="font-weight-bold">.br</span></span>
                </div>
            </div>
        </footer>
    @endsection
</body>

</html>
