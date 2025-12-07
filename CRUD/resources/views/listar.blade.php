<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visualizar Produtos</title>
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
    
            .container {
                background-color: white;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                width: 100%;
                max-width: 400px;
            }

            h1 {
                color: #e3342f; /* Cor principal do Laravel */
                text-align: center;
                margin-bottom: 20px;
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
    
        </style>

 <div class="container">

    <h1>Produtos</h1>
    
        <label for="lblNome">Nome:</label>
        <input type="text" name="nome" value="{{ $produto->nome }}">
        <br><br>
        <label for="lbValor">Valor:</label>
        <input type="text" name="valor" value="{{ $produto->valor }}">
        <br><br>
        <label for="lbQuantidade">Quantidade:</label>
        <input type="text" name="estoque" value="{{ $produto->estoque }}">
        <br><br>
 </div>
        
    </body>
</html>