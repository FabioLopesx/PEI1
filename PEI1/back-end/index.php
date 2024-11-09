<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pedidos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            display: inline-block; 
            padding: 10px 15px; 
            background-color: #4CAF50; 
            color: white; 
            text-decoration: none; 
            border: 2px solid #4CAF50; 
            border-radius: 5px; 
            font-weight: bold; 
            transition: background-color 0.3s, border-color 0.3s; 
            font-size: 14px;
        }
        input[type="submit"]:hover {
            background-color: #808080; 
            color: #4CAF50; 
            border-color: #4CAF50; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cadastro de Pedidos</h1>
        <form action="process_order.php" method="POST">
            <label for="nome_produto">Nome do Produto:</label>
            <input type="text" id="nome_produto" name="nome_produto" required>
            
            <label for="quantidade">Quantidade:</label>
            <input type="number" id="quantidade" name="quantidade" required>
            
            <label for="valor">Valor(R$):</label>
            <input type="number" step="0.01" id="valor" name="valor" required>
            
            <input type="submit" value="Registrar Pedido">
        </form>
    </div>
</body>
</html>
