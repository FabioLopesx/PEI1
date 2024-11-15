<?php
include 'db_connect.php';


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome_produto = $_POST['nome_produto'];
    $quantidade = $_POST['quantidade'];
    $valor = $_POST['valor'];

    $stmt = $conn->prepare("INSERT INTO pedidos (nome_produto, quantidade, valor) VALUES (?, ?, ?)");
    $stmt->bind_param("sid", $nome_produto, $quantidade, $valor);

    if ($stmt->execute()) {
        echo "Pedido registrado com sucesso! <a href='index.php'>Voltar</a>";
    } else {
        echo "Erro ao registrar pedido: " . $stmt->error;
    }
    exit;
}

if (isset($_GET['download_csv'])) {
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=pedidos.csv');

    
    $output = fopen('php://output', 'w');

    
    fputcsv($output, array('ID', 'Nome do Produto', 'Quantidade', 'Valor (R$)'));

    
    $sql = "SELECT id, nome_produto, quantidade, valor FROM pedidos";
    $result = $conn->query($sql);

    if ($result === false) {
        die("Erro na consulta SQL: " . $conn->error);
    }

    
    if ($result->num_rows > 0) {
        
        while ($row = $result->fetch_assoc()) {
            fputcsv($output, $row);
        }
    } else {
        echo "Nenhum pedido encontrado no banco de dados.";
    }

    
    fclose($output);
    exit;
}

$conn->close();
