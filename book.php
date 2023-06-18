<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['nome_usuario'])) {
    header("Location: login.php");
    exit;
}

$nome = $_SESSION['nome_usuario'];
$local = "Praia de Copacabana";
$datas = array();
for ($i = 0; $i < 4; $i++) {
    $data = strtotime("next Saturday +$i week");
    $datas[] = date("Y-m-d", $data);
}
$valor = 50;
$acentos = array(1, 2, 3, 4, 5);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caminho Livre :: Pagamento de Excursão</title>
    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".scroll-top").click(function() {
                $("html, body").animate({
                    scrollTop: 0
                }, "slow");
                return false;
            });
        });
    </script>
</head>
<body>
   <!-- header section starts  -->
<section class="header">
    <a href="home.php" class="logo"><img src="images/logologo.png"></a>
    <nav class="navbar">
        <a href="home.php" class="active">início</a>
        <a href="about.php">Sobre nós</a>
        <a href="package.php">Excursões</a>
       

        <?php
        // Exibe o nome e um link para a página de perfil
        echo '<a href="perfil.php">' . $nome . '</a>';
        ?>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- header section ends -->
<!-- booking section starts  -->

<section class="booking">

    <h1 class="heading-title">Pagamento da Excursão</h1>

    <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
        <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success_message']; ?></div>
        <?php
        unset($_SESSION['success_message']);
    }
    ?>

    <form action="processamento_pagamento.php" method="post" class="book-form">

        <div class="flex">
            <div class="inputBox">
                <span>Nome :</span>
                <input type="text" value="<?php echo $nome ?>" name="nome" readonly>
            </div>
            <div class="inputBox">
                <span>Local da excursão :</span>
                <input type="text" value="<?php echo $local ?>" name="local" readonly>
           
                </div>
            <div class="inputBox">
                <span>Data :</span>
                <select name="data">
    <?php
    foreach ($datas as $data) {
        $data_formatada = date('d/m/Y', strtotime($data)); // formata a data
        echo "<option value='$data'>$data_formatada</option>";
    }
    ?>
</select>
            </div>
            <div class="inputBox">
                <span>Valor :</span>
                <input style = "font-size: 15px" type="text" value="<?php echo "R$ " . number_format($valor, 2, ',', '.') ?>" name="valor" readonly>
            </div>
            <div class="inputBox">
                <span>Quantidade de Assentos :</span>
                <select name="assentos">
                    <?php
                    foreach ($acentos as $assento) {
                        echo "<option value='$assento'>$assento</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="inputBox">
                <span>Opção de Pagamento :</span>
                <select name="pagamento">
                    <option value="cartao_credito">Cartão de Crédito</option>
                    <option value="boleto">Boleto</option>
                    <option value="paypal">PayPal</option>
                </select>
            </div>
        </div>

        <input type="submit" value="Pagar" class="btn" name="pagar">

    </form>
</section>

<!-- footer section starts  -->
<section class="footer">

    <div class="credit"> desenvolvido por Grupo 7 - Sistemas de Informação - Dom Bosco</div>
</section>
<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>