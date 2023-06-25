<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style> 

 /* versão de celular */
@media (max-width: 700px) {
  .logotipo {
    width: 650px;
  }
  .menu form{
    margin: auto;
  }
  .banner02 img{
    width: 100%; /* Tamanho para celular */
    max-width: 300px; /* Limite máximo de largura para celular */
    transform: scale(1.2);
   
  }
}

body {
  background-image: url(https://media.tenor.com/FUWCY83fGHUAAAAd/takeipica-xurupika.gif);
  background-repeat: no-repeat;
  background-size: cover;
  background-position-x: 50%;
  height: 100vh;
  margin: 0;
  background-color: darkslategrey;
}

.menu {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
}

.menu img {
  max-width: 60%;
  margin-bottom: 20px;
}

.menu form {
  display: flex;
  flex-direction: column;
  align-items: center;
  background-color: #333333;
  padding: 20px;
  border-radius: 5px;
  backdrop-filter: blur(10px);
  background-color: rgba(51, 51, 51, 0.5);
}

.menu form a {
  color: white;
}

.menu label {
  width: 100%;
  text-align: center;
  color: white;
  font-weight: bold;
  margin-bottom: 10px;
}

.menu input {
  width: 100%;
  max-width: 250px;
  padding: 8px;
  margin-bottom: 10px;
  border: none;
  border-radius: 4px;
}

.menu input[type="submit"] {
  background-color: #222;
  color: white;
  cursor: pointer;
}

.tody {
  display: flex;
  flex-wrap: wrap; /* Permite que os elementos sejam dispostos em várias linhas */
  justify-content: flex-start; /* Distribui os elementos igualmente ao longo do container */
  align-items: center; /* Alinha os elementos no topo do container */
  padding: 10px;
  margin-top: 250px;
  border-radius: 5px;
}

/* imagem banner 1 para computadores */
.banner02 img{
  width: 60vh;
  transform: scale(1.0);

}

.filho {
  padding: 10px;
  margin: 10px;
  max-width: 600px;
}

a {
  text-decoration: none;
}

</style>
</head>
<body>

<div class="menu">
  <figcaption class="logotipo">
    <img src="./imgs/logotipo.png">
  </figcaption>

  <form action="" method="post" class="movie-form">
    <label for="email">Email</label>
    <input type="email" name="email" id="email">

    <label for="senha">Senha</label>
    <input type="password" name="senha" id="senha">

    <input type="submit" name="submit" value="Enviar">

    <label for="registro"><a href="">Não tem Conta? Registre-se</a></label>
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
