<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style> 

@media (min-width: 700px) {
    
    .menu img{

    max-width: 30%;

    }

}

body {
  margin: 0;
  padding: 0;
}

.menu {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  background-image: url(https://media.tenor.com/FUWCY83fGHUAAAAd/takeipica-xurupika.gif);
  background-repeat: no-repeat;
  background-size: cover;
  min-height: 70vh;
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
  flex-direction: column;
  align-items: center;
  background-color: lightblue; 
  padding: 10px;
  margin-top: 20px;
  border-radius: 5px;
}

.filho {
  background-color: white;
  padding: 10px;
  margin: 10px;
  max-width: 600px;
}

a{

text-decoration: none;

}

</style>

</head>
<body>

<div class="menu">

<figcaption>
    <img src="./imgs/logotipo.png">
</figcaption>

<form action="" method="post" class="movie-form">
  <label for="email">Email</label>
  <input type="email" name="email" id="email">

  <label for="senha">Senha</label>
  <input type="password" name="senha" id="senha">

  <input type="submit" name="submit" value="Enviar">

  <label for="registro"><a href="">Não tem Conta? Registre-se </a></label>
  /
</form>



</div>

<div class="tody">

<div class="filho">

<p> Bem vindo ao CIDADE DOS FILMES, assista filmes online de graça! com minimo de protetor de links possiveis! </p>
</div>

<div class="filho">

<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa consequuntur molestias voluptate ipsam nostrum accusantium velit aut, consectetur, vel explicabo nulla? Animi perferendis commodi ullam facere placeat sapiente quia aliquam. </p>



</div>





</div>



<?php 

if(@$_POST['email'] != null){

require_once('./DB.class.php');
require_once('./conecta.php');
require_once('./Insert.class.php');

$insert = new Insert($database);
$insert->verifica_email();

$insert->Insere();

}



?>


</body>
</html>