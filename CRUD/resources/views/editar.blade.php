<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alterar Produtos</title>
</head>
<body>
       
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
    
            body {
                font-family: Arial, sans-serif;
                background-color: #f7f7f7;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
    
            h1 {
                color: #e3342f; /* Cor principal do Laravel */
                text-align: center;
                margin-bottom: 20px;
            }
    
            form {
                background-color: white;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                width: 100%;
                max-width: 400px;
            }
    
            label {
                font-size: 16px;
                color: #333;
                display: block;
                margin-bottom: 8px;
            }
    
            input {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 2px solid #ddd;
                border-radius: 4px;
                font-size: 14px;
                transition: border-color 0.3s ease;
            }
    
            input:focus {
                border-color: #e3342f; /* Cor de foco (red) */
                outline: none;
            }
    
            button {
                background-color: #e3342f; /* Cor do Laravel */
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                font-size: 16px;
                cursor: pointer;
                width: 100%;
                transition: background-color 0.3s ease;
            }
    
            button:hover {
                background-color: #cc2d29; /* Tom um pouco mais escuro */
            }
    
            button:focus {
                outline: none;
            }
        </style>


     <form action="/editar-produto/{{ $produto-> id }}" method="POST">
        <h1>Produtos</h1>
         @csrf
        <label for="lblNome">Nome:</label>
        <input type="text" name="nome" value="{{ $produto->nome }}">
        <br><br>
        <label for="lbValor">Valor:</label>
        <input type="text" name="valor" value="{{ $produto->valor }}">
        <br><br>
        <label for="lbQuantidade">Quantidade:</label>
        <input type="text" name="estoque" value="{{ $produto->estoque }}">
        <br><br>
        <button>Atualizar</button>
     </form>
    </body>
</html>