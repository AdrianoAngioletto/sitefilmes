<?php


require_once('./conecta.php');
require_once('./DB.class.php');

$database = new DB\Database($host, $username, $password, $dbname);

class Autentica{

private $database;



function __construct(\DB\Database $database){

$this->database = $database;

}



public function checa_login(){

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $db = $this->database;
    $conn = $db->Conecta_PDO();

    $sql = "SELECT * FROM recebe WHERE email = :email AND senha = :senha";
    $blinda = $conn->prepare($sql);
    $blinda->bindValue(':email', $email);
    $blinda->bindValue(':senha', $senha);
    $blinda->execute();

    $resultado = $blinda->fetch(PDO::FETCH_ASSOC);

    if ($resultado) {
        
        echo '<script> alert("Bem Vindo a Cidade dos Filmes") </script>';
        echo '<script> window.location.href="./filmes.php" </script>';
    } else {
        
        echo '<script> alert("Email e/ou senha inválidos.") </script>' ;
    }
}





}