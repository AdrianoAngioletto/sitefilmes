<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Registro</title>
</head>
<body>
    


<form action="" method="post">

<input type="text" name="texto" />

<input type="submit" name="submit" />

</form>


<?php



$valor = $_POST['texto'];

require_once("./DB.class.php");

require_once("./conecta.php");

$database = new Database($host, $username, $password, $dbname, null);

$database->Conecta_Ai_Bb();

$conexao = $database->Pega_Conexao();

$sql = "INSERT INTO test (va) VALUES (:valor)";

$prepara = $conexao->prepare($sql);

$prepara->bindValue(':valor', $valor);

$prepara->execute();

$sql_2 = "SELECT cu FROM test";

$prepara_2 = $conexao->prepare($sql_2);

$prepara_2->execute();

$resultado_2 = $prepara_2->fetchAll();

foreach ($resultado_2 as $row) {
    echo $row['va'] . "<br>";
}




if($conexao == true){

    echo " dados inseridos com sucesso";

    

}else{

    echo " falhou bb";

}






?>

</body>
</html>