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
<section class="home">
   <div class="swiper home-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide slide" style="background:url(images/home1.jpg) no-repeat">
            <div class="content">
               <h3>CAMINHO LIVRE</h3>
               <a href="package.php" class="btn">Saiba mais</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/home2.jpg) no-repeat">
            <div class="content">

               <h3>AGENDE SUA EXCURSÃO</h3>
               <a href="package.php" class="btn">Saiba mais</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/home3.jpg) no-repeat">
            <div class="content">
               <h3>ANUNCIE SUA EXCURSÃO</h3>
               <a href="package.php" class="btn">Saiba mais</a>
            </div>
         </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
   </div>
</section>
<!-- home section ends -->
<!-- services section starts  -->
<section class="services">
   <h1 class="heading-title"> TIPOS DE EXCURSÕES </h1>
   <div class="box-container">
      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>Trilhas</h3>
   </div>
   <div class="box">
     <img src="images/cachoeria.png" alt="">
     <h3>Cachoeiras</h3>
  </div>
  <div class="box">
     <img src="images/praia.png" alt="">
     <h3>Praias</h3>
  </div>
  <div class="box">
     <img src="images/cultura.png" alt="">
     <h3>Cultura</h3>
  </div>
  <div class="box">
     <img src="images/icon-5.png" alt="">
     <h3>Turismo</h3>
  </div>
  <div class="box">
     <img src="images/igreja.png" alt="">
     <h3>Religioso</h3>
  </div>
  </div>
</section>
<!-- services section ends -->
<!-- home about section starts  -->
<section class="home-about">
   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>
   <div class="content">
      <h3>sobre nós</h3>
      <p>A Caminho Livre é a melhor opção para quem deseja curtir o final de semana em familía, com amigos ou até mesmo sozinho, é possivel encontrar diversos tipos de excursões com diferentes destinos na plataforma.</p>
      <a href="about.php" class="btn">Leia mais</a>
   </div>
</section>
<!-- home about section ends -->
<!-- home packages section starts  -->
<section class="home-packages">
   <h1 class="heading-title"> Nossas excursões </h1>
   <div class="box-container">
      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Recreio - RJ</h3>
            <p>Praia do Recreio localizada na zona leste do Rio.</p>
            <a href="book.php" class="btn">Agendar</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Santuario Nacional de Nossa Senho Aparecida</h3>
            <p>O Santuário de Nossa Senhora da Conceição Aparecida, é considerado maior Santuário no mundo dedicado a Maria.</p>
            <a href="book.php" class="btn">Agendar</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Brás</h3>
            <p>Ótima opção para quem deseja realizar algumas comprinhas.</p>
            <a href="book.php" class="btn">Agendar</a>
</div>
</div>

   </div>
   <div class="load-more"> <a href="package.php" class="btn">Ver todos</a> </div>
</section>
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
      