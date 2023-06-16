<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Registro</title>
<style>



</style>
</head>
<body>
    



<div class="menu">

<form action="" method="post">

<input class="item"  type="text" id="name" name="texto" />

<input class="item" type="submit" name="submit" />


</form>
</div>


<?php

// esperando pra insert.



if(isset($_POST['texto']) && isset($_POST['submit'])){


$texto = $_POST['texto'];

require_once('./DB.class.php');

require_once('./conecta.php');

$database = new \DB\Database($host, $username, $password, $dbname);

$conecta = $database->Conecta_PDO();

$sql = "INSERT INTO recebe (recebe) VALUES(:nome)";

$blindar = $conecta->prepare($sql);

$blindar->bindValue(':nome', $texto);


$database->Mostra_Texto($texto);

$database->mostra = 55;

$database->Mostra_Tudo();

if($blindar->execute() === true){


    echo '<script>alert("dados inseridos com sucesso");</script>';

    $blindar = null;

}else{


    echo 'não inseriu';
}


}

?>

</body>
</html>