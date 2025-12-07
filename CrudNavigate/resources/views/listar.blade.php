<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visualização de Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    
    <style>
        /* Navbar */
        .nav-underline .nav-link {
            font-size: 16px;
            font-weight: bold;
            padding: 10px 20px;
            color: #333;
        }

        .nav-underline .nav-link.active {
            color: #e3342f; /* Cor Laravel */
        }

        .nav-item {
            margin-right: 10px;
        }

        .nav-link:hover {
            color: #e3342f;
        }

        .container {
            margin-top: 30px;
        }

        .listagem {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        /* Formulário */
        form {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-weight: bold;
            color: #333;
        }

        .form-control:disabled {
            background-color: #e9ecef;
            opacity: 1;
        }

        .container_nome,
        .container_email,
        .container_obs,
        .container_origens,
        .container_data {
            margin-bottom: 15px;
        }

        .container_nome input,
        .container_email input,
        .container_obs textarea,
        .container_origens input,
        .container_data input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .container_obs textarea {
            resize: none;
        }
    </style>
</head>
<body>

    <!-- Navbar Da Página -->
    <section>
        <ul class="nav nav-underline">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/listar-clientes/1">Conferir</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/editar-clientes/1">Editar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/excluir-clientes/1">Excluir</a>
            </li>
        </ul>
    </section>

    <!-- Listagem Das Informações -->
    <section>
        <div class="container">
            <label class="listagem">Listagem de Clientes</label>
        </div>

        <form>
            <div class="container_nome">
                <label for="lbNome" class="form-label">Nome:</label>
                <input type="text" name="nome" value="{{ $cliente->nome }}" disabled>
            </div>

            <div class="container_email">
                <label for="lbEmail" class="form-label">E-Mail:</label>
                <input type="text" name="email" value="{{ $cliente->email }}" disabled>
            </div>

            <div class="container_obs">
                <label for="lbObservacao" class="form-label">Observações:</label>
                <textarea class="form-control" rows="4" disabled>{{ $cliente->observacao }}</textarea>
            </div>

            <div class="container_origens">
                <label for="lbOrigem" class="form-label">Forma de Contato:</label>
                <input type="text" name="contatos" value="{{ $cliente->contatos }}" disabled>
            </div>

            <div class="container_data">
                <label for="lbData" class="form-label">Data de Contato:</label>
                <input type="date" name="data" value="{{ $cliente->data }}" disabled>
            </div>
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

</body>
</html>
