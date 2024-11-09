<?php
set_time_limit(300);

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "pedidos_db"; 

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$sql = "SELECT nome_produto, quantidade, valor FROM pedidos"; 
$result = $conn->query($sql);

?>