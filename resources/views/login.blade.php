<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Estilos globais */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Open Sans', sans-serif;
        }

        .header {
            background-color: #fff;
            border-bottom: 1px solid #ddd;
            padding: 10px 20px;
            display: flex;
            align-items: center;
        }

        .header-logo {
            width: 100px;
            height: auto;
        }

        .header-title {
            margin-left: 10px;
        }

        .main-container {
            display: flex;
            min-height: calc(72vh - 120px);
        }

        .login-left {
            flex: 1;
            background-color: rgb(245, 245, 245);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .login-left h1 {
            font-size: 2.5rem;
            font-weight: 650;
            margin-bottom: 10px;
            
        }

        .login-left hr {
            border: 1px solid #000;
            width: 3.7rem;
            color: rgb(86, 86, 86);
        }

        .login-right {
            flex: 1;
            background-color: #fff;
            padding: 40px;
            /* Adiciona margem à esquerda */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-login .form-group {
            margin-bottom: 20px;
        }

        .form-login label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-login input[type="text"],
        .form-login input[type="password"] {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-login button {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-login button:hover {
            background-color: #0056b3;
        }

        .footer {
            background-color: #002d5c;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .footer-logo {
            width: 150px;
            height: auto;
        }
        
        .login-right h2{
            color: #0539af;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <!-- Cabeçalho -->
    <div class="header">
        <img src="https://www.arquivonacional.gov.br/sites/arquivonacional.gov.br/themes/custom/an/logo.svg"
            alt="Arquivo Nacional" class="header-logo">
        <div class="header-title">
            <h3>Arquivo Nacional</h3>
            <p>Ministério da Gestão e da Inovação em Serviços Públicos</p>
        </div>
    </div>

    @extends('base')
    @section('content')
        <!-- Conteúdo principal -->
        <div class="main-container">
            <div class="login-left">
                <h1>Controle de</h1>
                <h1 style="padding-left:2.5rem;">Visitantes</h1>
                <hr>
            </div>
            <div class="login-right">
                <h2 >Acesse sua conta</h2>
                <form class="form-login">
                    <div class="form-group">
                        <label for="numero_documento">Usuário</label>
                        <input id="numero_documento" type="text" placeholder="Informe o CPF ou Passaporte">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" placeholder="Digite sua senha">
                    </div>
                    <button class="br-button primary active mr-3 mt-3" type="button">Entrar</button>
                </form>
            </div>
        </div>
    @endsection

    <!-- Rodapé -->
    <footer class="footer">
        <img src="https://www.gov.br/++theme++plonegovbr.brasil.gov.br/static/assets/img/gov-br-logo.svg" alt="gov.br"
            class="footer-logo">
    </footer>
</body>

</html>
