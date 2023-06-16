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


// function Calcula( $peso,  $altura) {


//     return $peso / ($altura*$altura);

// }

// echo Calcula(75, 1.85);

// $valor = 10;



//  ($valor * $valor)  + 1 + ($valor * 5);


// function numero($numero){
  
 
// echo  $numero * $numero;

// }

// echo numero(55 + 35);


// function ConverteKm($km){

//     global $total;
//     $total += $km;

//     return $km * 0.6;


// }

// echo ConverteKm(100);
// echo ConverteKm(100);
// echo ConverteKm(100);



// function AdicionaValor($valor){

//     static $total;

//     return $total += $valor;


// }

// echo AdicionaValor(100);
// echo AdicionaValor(100);
// echo AdicionaValor(100);
 



if(isset($_POST['texto']) && isset($_POST['submit'])){
   
    $dadoEnviado = "dado enviado";
    
    echo '<script>';

    echo 'let NomeInput = document.getElementById("name");';

    echo 'NomeInput.placeholder = ' . json_encode($dadoEnviado) .';';

    echo '</script>';

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


    echo '<script>alert("bagulho loco bagulho serio");</script>';

    $blindar = null;

}else{


    echo 'bagulho mais serious ainda';
}


}

?>

</body>
</html>