<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Css/index_estilo.css">
    <script defer src="./Js/formulario_registro.js"></script>
</head>

<body>

<div class="menu">
  <figcaption class="logotipo">
    <img src="./imgs/logotipo.png">
  </figcaption>

  <!-- menu login do formulario -->
  <form action="" method="post"  id="login-form">
    <label for="email">Email</label>
    <input type="email" name="email" id="email">

    <label for="senha">Senha</label>
    <input type="password" name="senha" id="senha">

    <input type="submit" name="submit" value="Enviar">

    <label for="registro"><a href="#" id="register-link">Não tem Conta? Registre-se</a></label>
  </form>


        <!-- Menu registro do formulario -->
  <form action="" method="post" id="register-form" style="display: none;">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome">

    <label for="email-registro">Email</label>
    <input type="email" name="email-registro" id="email-registro">

    <label for="senha-registro">Senha</label>
    <input type="password" name="senha-registro" id="senha-registro">

    <input type="submit" name="submit-registro" value="Registrar">

    <label for="login"><a href="#" id="login-link">Já tem uma conta? Faça login</a></label>
  </form>
</div>




<div class="tody">
  <div class="filho">
    <figcaption class="banner02">
      <img src="https://i.ytimg.com/vi/97gXNPUhTKM/mqdefault.jpg">
    </figcaption>
  </div>

  <div class="filho2">
    <figcaption class="banner02">
      <br>
      <img src="https://pronatec.pro.br/wp-content/uploads/2021/08/Netcine-Plus-App-Filmes-e-Series-Online-Gratis-Como-assistir-no-Celular-TV-ou-PC.jpg">
    </figcaption>
  </div>

</div>

<?php 




if(@$_POST['email'] != null){

  require_once('./DB.class.php');
  require_once('./conecta.php');
  require_once('./Insert.class.php');
  require_once('./autenticalogin.class.php');

  $Autentica = new Autentica($database);

 
  $Autentica->checa_login();



}
?>

</body>
</html>
