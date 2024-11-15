<?php
// Inclui o arquivo de conexão com o banco de dados
include 'db_connect.php';

// Seleciona todos os pedidos da tabela
$sql = "SELECT id, client_name, order_description, order_value FROM pedidos";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pedidos</title>
    <style>
        #retorne {
        color: purple;
        text-decoration: none;
        display: inline-block; 
        padding: 10px 20px; 
        background-color: #4CAF50; 
        color: white; 
        text-decoration: none; 
        border: 2px solid #4CAF50; 
        border-radius: 5px; 
        font-weight: bold; 
        transition: background-color 0.3s, border-color 0.3s; 
        font-size: 16px;
        }
        #retorne:hover {
            background-color: #808080; 
            color: #4CAF50; 
            border-color: #4CAF50; 
        }
        table {
            background-color:white;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Pedidos Registrados</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome do Cliente</th>
            <th>Descrição</th>
            <th>Valor (R$)</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // Exibe cada pedido como uma outra linha na tabela
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["client_name"] . "</td>
                        <td>" . $row["order_description"] . "</td>
                        <td>" . $row["order_value"] . "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Nenhum pedido encontrado</td></tr>";
        }
        ?>
    </table>
    <br>
    <a id="retorne" href="index.php">Cadastrar novo pedido</a>
    <br><br>
    <a id="retorne" href="pedidos.csv" download="pedidos.csv">Baixar Arquivo CSV</a>
</body>
</html>
