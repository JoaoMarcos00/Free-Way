<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['nome_usuario'])) {
    // Se o usuário não estiver logado, redireciona para a página de login
    header("Location: login.php");
    exit();
}

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "caminho_livre";

// Cria a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Obtém as informações do usuário a partir do banco de dados
$sql = "SELECT nome, email, cpf, rua, numero, complemento, bairro, cidade, estado, cep FROM usuarios WHERE nome = '" . $_SESSION['nome_usuario'] . "'";
$resultado = $conn->query($sql);

// Verifica se houve erro na consulta
if (!$resultado) {
    die("Erro na consulta ao banco de dados: " . $conn->error);
}

// Obtém o registro do usuário
$usuario = $resultado->fetch_assoc();

// Fecha a conexão com o banco de dados
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caminho Livre :: Perfil do usuário</title>
    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="css/style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    <!-- Header section starts  -->
    <header class="header">
        <a href="home.php" class="logo"><img src="images/logologo.png"></a>
        <nav class="navbar">
            <a href="home.php" class="active">Início</a>
            <a href="about.php">Sobre nós</a>
            <a href="package.php">Excursões</a>
            <?php
            // Verifica se o usuário está logado
            if (isset($_SESSION['nome_usuario'])) {
                // Se o usuário estiver logado, exibe o nome e um link para a página de perfil
                echo '<a href="perfil.php">' . $_SESSION['nome_usuario'] . '</a>';
            } else {
                // Se o usuário não estiver logado, exibe os botões de Cadastro e Login
                echo '<a href="cadastro.php">Cadastro</a>';
                echo '<a href="login.php">Login</a>';
            }
            ?>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Sair</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
        
    </header>
    <!-- Header section ends -->

    <!-- Profile section starts -->

    <section class="profile">
        <div class="container">
            <h1 class="heading-title">Perfil do usuário</h1>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Nome:</th>
                        <td><?php echo $usuario["nome"]; ?></td>
                    </tr>
                    <tr>
                        <th>E-mail:</th>
                        <td><?php echo $usuario["email"]; ?></td>
                    </tr>
                    <tr>
                        <th>CPF:</th>
                        <td><?php echo $usuario["cpf"]; ?></td>
                    </tr>
                    <tr>
                        <th>Idade:</th>
                        <td><?php echo $usuario["cep"]; ?></td>
                    </tr>
                    <tr>
                        <th>Rua:</th>
                        <td><?php echo $usuario["rua"]; ?></td>
                    </tr>
                    <tr>
                        <th>Número:</th>
                        <td><?php echo $usuario["numero"]; ?></td>
                    </tr>
                    <tr>
                        <th>Complemento:</th>
                        <td><?php echo $usuario["complemento"]; ?></td>
                    </tr>
                    <tr>
                        <th>Bairro:</th>
                        <td><?php echo $usuario["bairro"]; ?></td>
                    </tr>
                    <tr>
                        <th>Cidade:</th>
                        <td><?php echo $usuario["cidade"]; ?></td>
                    </tr>
                    <tr>
                        <th>Estado:</th>
                        <td><?php echo $usuario["estado"]; ?></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </section>
    <!-- Profile section ends -->

    <!-- Footer section starts  -->
    <footer class="footer">
        <div class="container">
            <p class="credit">Desenvolvido por Grupo 7 - Sistemas de Informação - Dom Bosco</p>
        </div>
    </footer>
    <!-- Footer section ends -->

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>
