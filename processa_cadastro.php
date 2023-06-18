<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores dos campos do formulário
    $tipo_usuario = $_POST["tipo_usuario"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $cep = $_POST["cep"];
    
    // Verifica se o tipo de usuário é "organizador" e obtém o valor do campo correspondente
    if ($tipo_usuario == "organizador") {
        $cnpj = $_POST["cnpj"];
    } else {
        $cpf = $_POST["cpf"];
    }
    
    // Conecta ao banco de dados
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "caminho_livre";
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Verifica se houve erro na conexão
    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }
    
    // Insere os dados do usuário na tabela correspondente (organizador ou usuário)
    if ($tipo_usuario == "organizador") {
        $sql = "INSERT INTO organizadores (nome, email, senha, cnpj, rua, numero, complemento, bairro, cidade, estado, cep)
        VALUES ('$nome', '$email', '$senha', '$cnpj', '$rua', '$numero', '$complemento', '$bairro', '$cidade', '$estado', '$cep')";
    } else {
        $sql = "INSERT INTO usuarios (nome, email, senha, cpf, rua, numero, complemento, bairro, cidade, estado, cep)
        VALUES ('$nome', '$email', '$senha', '$cpf', '$rua', '$numero', '$complemento', '$bairro', '$cidade', '$estado', '$cep')";
    }
    
    // Executa a consulta SQL e verifica se houve erro
    if ($conn->query($sql) === TRUE) {
        header("Location: home.php");
    } else {
        echo "Erro ao cadastrar usuário: " . $conn->error;
    }
    
    // Fecha a conexão com o banco de dados
    $conn->close();
}
?>
