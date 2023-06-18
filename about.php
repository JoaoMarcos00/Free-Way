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




<section class="about">

   <div class="image">
      <img src="images/onibus.jpg" alt="">
   </div>

   <div class="content">
      <h3>Por que viajar com a gente?</h3>
      <p>As melhores viajens com os melhore guias. Encontre o pacote ideal para você e toda sua familia</p>
      <p>comunicação rápida. Amigável e de facil manejo.</p>
      <div class="icons-container">
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>Melhores Destinos</span>
         </div>
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span>Suporte 24/7</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>Preços acessiveis</span>
         </div>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading-title"> Avaliações dos usuários </h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>O caminho Livre foi muito útil ao me recomendar um hotel um bom preço e em um lugar legal.Com certeza uarei novamente.</p>
            <h3>Lucas</h3>
            <span>Viajante</span>
            <img src="images/lucas.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Sempre um bom serviço,sem problemas com a comunicação com eles.a melhor parte de viajar pelo caminho Livre é que depois de agendar online é so ir para o lacal da partida </p>
            <h3>Matheus</h3>
            <span>Viajante</span>
            <img src="images/matheus.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Pacote com um preço fantastico, tudo muito rápido, do jeito que tinha que ser</p>
            <h3>Carlos</h3>
            <span>Viajante</span>
            <img src="images/carlos.jpg" alt="">
         </div>
      </div>
   </div>

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
      