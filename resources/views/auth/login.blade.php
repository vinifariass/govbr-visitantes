<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Open Sans', sans-serif;
        }

        .header-title {
            margin-left: 10px;
        }

        .main-container {
            display: flex;
            min-height: calc(97vh - 120px);
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
            border: 1.9px solid rgb(220, 220, 220);
            width: 3.7rem;
            margin-left: 10rem;
            color: rgb(245, 245, 245);
            border-radius: 50px 20px;
        }

        .login-right {
            flex: 1;
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: center;
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
            background-color: #007bff;
        }

        .form-login button:hover {
            background-color: #0056b3;
        }

        .footer-logo {
            width: 150px;
            height: auto;
        }

        .login-right h2 {
            color: #0539af;
            font-weight: 500;
        }

        /* Responsividade */
        @media (max-width: 900px) {
            .main-container {
                flex-direction: column;
                min-height: unset;
            }
            .login-left, .login-right {
                flex: unset;
                width: 100%;
                border-radius: 0;
                box-shadow: none;
                min-height: 35vh;
            }
            .login-right {
                padding: 30px 10vw;
            }
            .login-left hr {
                margin-left: 0;
            }
            .template-base {
                min-height: 100vh;
            }
        }

        @media (max-width: 600px) {
            .main-container {
                padding: 0;
            }
            .login-right {
                padding: 20px 5vw;
            }
            .login-left h1 {
                font-size: 2rem;
            }
            .footer-logo {
                width: 100px;
            }
        }
    </style>
</head>

<body>
    <!-- Cabeçalho -->
    <div class="template-base" style="min-height: auto;">

        @extends('layouts.login-base')
        @section('content')
            <!-- Conteúdo principal -->
            <div class="main-container">
                <div class="login-left">
                    <h1>Controle de</h1>
                    <h1 style="padding-left:2.5rem;">Visitantes</h1>
                    <hr>
                </div>
                <div class="login-right">
                    <h2>Acesse sua conta</h2>
                    <form class="form-login">
                        <div class="form-group">
                            <div class="col col-6">
                                <label for="numero_documento">Usuário</label>
                                <input id="numero_documento" type="text" placeholder="Informe o CPF ou Passaporte">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col col-6">
                                <label for="senha">Senha</label>
                                <input id="senha" type="password" placeholder="Digite sua senha">
                            </div>
                        </div>
                        <div class="col mb-5">

                            <button class="br-button primary active mr-3 mt-3" type="button">
                                <a href="{{ route('cadastro-visitante') }}" style="color: white; text-decoration: none;">Entrar</a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection

</body>
</html>