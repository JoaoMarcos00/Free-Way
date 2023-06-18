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
<!-- booking section starts  -->


<section class="packages">

   <h1 class="heading-title">Viagens disponíveis</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/APA.jpg" alt="">
         </div>
         <div class="content">
            <h3>Pacote Aparecida do Norte</h3>
            <p>Aprecie a segunda maior basílica e o maior santuário mariano do mundo!</p>
            <h2>R$ 260,00</h2>
            <a href="book.php" class="btn">Adquirir</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/copa.jpg" alt="">
         </div>
         <div class="content">
            <h3>Pacote Copacabana</h3>
            <p>Queridinha dos turistas, a Praia de Copacabana é uma das mais famosas do mundo. Chegue bem cedo para garantir um lugar na areia e aproveite para relaxar admirando a paisagem ou conferir o movimento ao longo da Avenida Atlântica.</p>
            <h2>R$ 3000,00</h2>
            <a href="book.php" class="btn">Adquirir</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/recreio.jpg" alt="">
         </div>
         <div class="content">
            <h3>Pacote Recreio dos Bandeirantes</h3>
            <p>A praia do Recreio oferece uma das melhores opções de lazes no verão. Estacionamento fácil, boas opções de comida e petiscos.</p>
            <h2>R$ 1500,00</h2>
            <a href="book.php" class="btn">Adquirir</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/bras.jpg" alt="">
         </div>
         <div class="content">
            <h3>Pacote Lojão do Brás</h3>
            <p>No Lojão do Brás você encontra tudo para moda feminina, masculina, infantil, moda casa e muito mais. Aqui você veste toda a familia com estilo e economia.</p>
            <h2>R$ 230,00</h2>
            <a href="book.php" class="btn">Adquirir</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/aqua.jpg" alt="">
         </div>
         <div class="content">
            <h3>Pacote aquário Rj</h3>
            <p>Como uma das atrações familiares mais populares do Rio, o AquaRio Aquarium atrai milhares de visitantes todos os anos. Passe menos tempo esperando e mais tempo admirando mais de 8.000 criaturas marinhas reservando seu ingresso com antecedência</p>
            <h2>R$ 210,00</h2>
            <a href="book.php" class="btn">Adquirir</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/HOPI.jpg" alt="">
         </div>
         <div class="content">
            <h3>Pacote Hopi Hari</h3>
            <p>Hopi Hari é o maior parque temático de São Paulo. Com seus 760 mil metros quadrados, oferece mais de 40 atrações para toda a família, além de gastronomia, eventos especiais e muita aventura.</p>
            <h2>R$ 550,00</h2>
            <a href="book.php" class="btn">Adquirir</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/cristo.jpg" alt="">
         </div>
         <div class="content">
            <h3>Pacote Cristo Redentor</h3>
            <p>No topo da cidade está instalado Cristo Redentor, os lados turísticos mais procurados do Brasil e do Rio de Janeiro.</p>
            <h2>R$ 470,00</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-8.jpg" alt="">
         </div>
         <div class="content">
            <h3>canada Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our canada top selling packages!</p>
            <h2>BDT 21,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-9.jpg" alt="">
         </div>
         <div class="content">
            <h3>barli Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our barli top selling packages!</p>
            <h2>BDT 14,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-10.jpg" alt="">
         </div>
         <div class="content">
            <h3>nepal Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our nepal top selling packages!</p>
            <h2>BDT 7,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-11.jpg" alt="">
         </div>
         <div class="content">
            <h3>bangladesh Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our bangladesh top selling packages!</p>
            <h2>BDT 5,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-12.jpg" alt="">
         </div>
         <div class="content">
            <h3>Japan Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Japan top selling packages!</p>
            <h2>BDT 11,900</h2>
            <a href="book.php" class="btn">book now</a>
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
      