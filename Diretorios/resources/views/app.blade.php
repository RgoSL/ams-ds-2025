<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>InterfaceWeb</title>
</head>
<body>
    <style>
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            font-family: 'meawether';
            color: #F45340;
        }

        .navbar-brand:hover {
            color: #e65040;
        }

        .form-group {
            padding: 15px;
            text-align: start;
            font-size: 1rem;
            font-weight: 450;
            margin-bottom: 5px;
        }

        .form-group label {
            padding: 7px;
            font-weight: 500;
            color: #F45340;
        }

        .form-group input {
            padding: 10px;
            font-size: 1rem;
            font-weight: 400;
            border-radius: 20px;
            color: #000000e0;
        }

        .form-group input:focus {
            outline: none;
            box-shadow: none;
            border: none;
            border-bottom: 1px solid #F45340;
        }

        .submit {
            padding: 10px 20px;
            font-size: 1rem;
            letter-spacing: 3px;
            font-weight: 600;
            border-radius: 20px;
            color: #ffffff;
            background-color: #F45340;
            border: none;
            transition: background-color 0.3s ease;
            margin: 10px 0;
            justify-content: center;
            text-align: center;
            align-items: center;
            font-family: 'meawether';
            transition: 0.2s ease-in-out;
        }

        .submit:hover {
            background-color: #e65040;
            color: #ffff;
            font-size: 1.rem;
            font-weight: 600;
            transform: scale(1.1);
        }

    </style>

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144 144" width="30" height="24">
                    <path fill="#F45340" d="M64 0H0v144h64V64h64V0H64z"/>
                </svg>
                Laravel
            </a>
        </div>
    </nav>

    <div class="container text-center">
        <div class="row">
            <div class="col">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">E-Mail</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="exemplo@gmail.com">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Endereço</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="R. Mal. Barbacena, 818 - Vila Reg. Feijó, São Paulo">
                    </div>
                </form>
            </div>

            <div class="col">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Telefone</label>
                        <input type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="(xx) XXXX-XXXX">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Nome</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Digite seu nome">
                    </div>
                </form>
            </div>

            <div class="col">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Celular</label>
                        <input type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="(xx) XXXX-XXXX">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha">
                    </div>

                    <!-- Centralizar o botão -->
                    <div class="d-flex justify-content-center mt-4">
                        <button class="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
