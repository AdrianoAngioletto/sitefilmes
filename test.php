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

body{

  background-image: url(https://media.tenor.com/FUWCY83fGHUAAAAd/takeipica-xurupika.gif); 
  background-repeat: no-repeat;
  background-size: cover;
  background-position-x: 50%;
  height: 100vh;
  margin: 0;
}



.menu{
display: flex;
flex-direction: column;
cursor:crosshair;
justify-content: center;



}

.menu img{

width: 70%;


}


.menu form{


display: flex;
flex-direction: column;
align-items: flex-start;



}

.menu label{

 width: 150px;
  text-align: center;
  color: white;

}


.menu input{

width: 100%;
max-width: 150px;
margin-bottom: 10px;



}


.tody{


display: flex;
flex-direction: column;

}


.filho{
align-self: center;
background-color: lightblue; 
padding: 5px;
margin: 10px;


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

  <label for="usuario">Usuário</label>
  <input type="text" name="usuario" id="usuario">

  <label for="text">Test</label>
  <input type="text" placeholder="Aqui o texto" required name="text" id="text">

  <input type="submit" name="submit" value="Enviar">
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


echo ' co' .PHP_EOL;




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