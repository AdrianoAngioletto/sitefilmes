<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">


<input type="email" name="email">

<input type="senha" name="senha">

<input type="usuario" name="usuario">

<input type="submit" name="submit">


</form>

<?php 

if(isset($_POST['email'])){
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