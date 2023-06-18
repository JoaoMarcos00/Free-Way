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

<div class="container form-signin mt-auto">
        <h1>Cadastro de Usuário</h1>
        <form method="post" action="processa_cadastro.php">
            <div class="form-group">
                <label style="font-size: 15px" for="tipo_usuario">Tipo de usuário:</label>
                <select class="form-control" id="tipo_usuario" name="tipo_usuario">
                    <option value="viajante">Viajante</option>
                    <option value="organizador">Organizador</option>
                </select>
            </div>
            <div class="form-group">
                <label style="font-size: 15px" for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label style="font-size: 15px" for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label style="font-size: 15px" for="senha">Senha:</label>
                <input type="password" class="form-control" id="senha" name="senha" required>
            </div><div class="form-group">
                <label style="font-size: 15px" for="csenha">Confirmar Senha:</label>
                <input type="password" class="form-control" id="csenha" name="csenha" required>
            </div>
            <div class="form-group" id="cpf">
                <label style="font-size: 15px" for="cpf">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" required>
            </div>
            <div class="form-group" id="cnpj">
                <label style="font-size: 15px" for="cnpj">CNPJ:</label>
                <input type="text" class="form-control" id="cnpj" name="cnpj">
            </div>
            <div class="form-group">
                <label style="font-size: 15px" for="rua">Rua:</label>
                <input type="text" class="form-control" id="rua" name="rua" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label style="font-size: 15px" for="numero">Número:</label>
                    <input type="text" class="form-control" id="numero" name="numero" required>
                </div>
                <div class="form-group col-md-8">
                    <label style="font-size: 15px" for="complemento">Complemento:</label>
                    <input type="text" class="form-control" id="complemento" name="complemento">
                </div>
            </div>
            <div class="form-group">
                <label style="font-size: 15px" for="bairro">Bairro:</label>
<input type="text" class="form-control" id="bairro" name="bairro" required>
</div>
<div class="form-row">
<div class="form-group col-md-6">
<label style="font-size: 15px" for="cidade">Cidade:</label>
<input type="text" class="form-control" id="cidade" name="cidade" required>
</div>
<div class="form-group col-md-3">
<label style="font-size: 15px" for="estado">Estado:</label>
<select class="form-control" id="estado" name="estado" required>
<option value="">Escolha...</option>
<option value="AC">Acre</option>
<option value="AL">Alagoas</option>
<option value="AP">Amapá</option>
<option value="AM">Amazonas</option>
<option value="BA">Bahia</option>
<option value="CE">Ceará</option>
<option value="DF">Distrito Federal</option>
<option value="ES">Espírito Santo</option>
<option value="GO">Goiás</option>
<option value="MA">Maranhão</option>
<option value="MT">Mato Grosso</option>
<option value="MS">Mato Grosso do Sul</option>
<option value="MG">Minas Gerais</option>
<option value="PA">Pará</option>
<option value="PB">Paraíba</option>
<option value="PR">Paraná</option>
<option value="PE">Pernambuco</option>
<option value="PI">Piauí</option>
<option value="RJ">Rio de Janeiro</option>
<option value="RN">Rio Grande do Norte</option>
<option value="RS">Rio Grande do Sul</option>
<option value="RO">Rondônia</option>
<option value="RR">Roraima</option>
<option value="SC">Santa Catarina</option>
<option value="SP">São Paulo</option>
<option value="SE">Sergipe</option>
<option value="TO">Tocantins</option>
</select>
</div>
<div class="form-group col-md-3">
<label style="font-size: 15px" for="cep">CEP:</label>
<input type="text" class="form-control" id="cep" name="cep" required>
</div>
</div>
<button  style="font-size: 15px" type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</div>
<!-- Script para exibir ou ocultar o campo CNPJ dependendo do tipo de usuário selecionado -->
<script>
$(document).ready(function() {
$('#cnpj').hide();
$('#tipo_usuario').on('change', function() {
if ( this.value === 'organizador') {
$('#cpf').hide();
$('#cnpj').show();
}
else {
$('#cpf').show();
$('#cnpj').hide();
}
});
});
</script>





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
      