<?php
session_start();
 
// Configuração do banco de dados
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "caminho_livre";
 
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
  // Obtém as credenciais do usuário
  $email = $_POST['email'];
  $senha = $_POST['senha'];
 
  // Conecta ao banco de dados
  $conn = new mysqli($servername, $username, $password, $dbname);
 
  // Verifica se a conexão foi bem-sucedida
  if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
  }
 
  // Verifica se o usuário existe no banco de dados
  $sql = "SELECT nome FROM usuarios WHERE email = '$email' AND senha = '$senha'";
  $result = $conn->query($sql);
 
  if ($result->num_rows == 1) {
    // Se a validação for bem-sucedida, armazena o nome do usuário na sessão
    $row = $result->fetch_assoc();
    $_SESSION['nome_usuario'] = $row['nome'];
 
    // Redireciona para a página home.php
    header("Location: home.php");
    exit();
  } else {
    // Se a validação falhar, exibe uma mensagem de erro
    echo "E-mail ou senha inválidos";
  }
 
  $conn->close();
}
?>
