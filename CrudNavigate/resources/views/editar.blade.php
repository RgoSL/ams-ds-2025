<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atualizar Informações</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
</head>
<body>


    <style>

        body {
            font-family: 'Times New Roman', Times, serif, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        
        h1 {
            color: #e3342f; /* Cor principal do Laravel */
            text-align: center;
            margin-bottom: 20px;
        }

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

        .btn-primary {
            background-color: #e3342f;
            border: none;
            padding: 8px 15px;
            font-size: 14px;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-primary:hover {
            background-color: #cc2d29;
        }

        /* Formulário */
        form {
            background-color: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin: 30px auto;
            width: 100%;
            max-width: 600px;
        }

        form label {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 8px;
            color: #333;
        }

        form input, form select, form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        form input:focus, form select:focus, form textarea:focus {
            border-color: #e3342f;
            outline: none;
        }

        form button {
            background-color: #e3342f;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        form button:hover {
            background-color: #cc2d29;
        }

        @media (max-width: 768px) {
            .card {
                width: 90%;
            }
        }
    </style>

     <!-- NAVBAR Da Página -->

    <section>
        <ul class="nav nav-underline">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/editar-clientes/1">Editar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/listar-clientes/1">Conferir</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/excluir-clientes/1">Excluir</a>
              </li>
          </ul>
    </section>

     <!-- Campos Para Edição De Dados -->

    <section>

        <form action="/editar_clientes/{{ $cliente-> id }}" method="POST">
            @csrf
            <div class="container_nome">
                <label class="lbNome">Nome</label>
                <input type="text" name="nome" value="{{ $cliente->nome }}" required>
            </div>
            <div class="container_email">
                <label class="lbEmail">E-Mail</label>
                <input type="text" name="email" value="{{ $cliente->email }}" required>
            </div>
    
            <div class="container_origens">
                <label class="lbOrigem">Meios de Contato</label>
                <br>
                <select class="contatos" name="contatos" value="{{ $cliente->nome }}" >
                    <option value="Celular" {{ $cliente->contatos == 'Celular' ? 'selected' : '' }}>Celular</option>
                    <option value="Telefone-Fixo" {{ $cliente->contatos == 'Telefone-Fixo' ? 'selected' : '' }}>Telefone-Fixo</option>
                    <option value="WhatsApp" {{ $cliente->contatos == 'WhatsApp' ? 'selected' : '' }}>WhatsApp</option>
                </select>
            </div>
    
            <div class="container_data">
                <label class="lbData">Data de Contato</label>
                <input type="date" class="data_input" name="data" value="{{ $cliente->data }}" required>
            </div>
    
            <div class="container_obs">
                <label for="lbObservacao">Observações:</label>
                <input type="text" name="observacao" value="{{ $cliente->observacao }}">
    
            </div>
    
            <button type="submit">Atualizar</button>
        </form>
        
    </section>
    

    </body>
    </html>