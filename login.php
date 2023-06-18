<?php
session_start();
 
// Verifica se o usuário está logado

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Caminho Livre :: Agência de Viagens</title>
   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function(){
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
   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- header section ends -->
<!-- home section starts  -->
<div class="form-container">
			<h2>Formulário de Login</h2>
			<form action="processa_login.php" method="post">
				<div class="input-container">
					<label style="font-size: 15px" for="email">E-mail:</label>
					<input type="text" id="email" name="email">
				</div>
				<div class="input-container">
					<label style="font-size: 15px" for="senha">Senha:</label>
					<input type="password" id="senha" name="senha">
				</div>
				<input  style="font-size: 15px" type="submit" value="Entrar">
			</form>
		</div>
	</div>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   
	<script src="js/login.js"></script>
<!-- home packages section ends -->


<!-- home offer section ends -->
<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

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
      