<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "caminho_livre";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
