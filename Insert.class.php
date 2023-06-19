<?php 
require_once('./conecta.php');
require_once('./DB.class.php');

$database = new DB\Database($host, $username, $password, $dbname);

class Insert{

function verifica_email(){

global $database;

$email = $_POST['email'];

$conn = $database->Conecta_PDO();

$sql = "SELECT COUNT(*) AS resultado FROM recebe WHERE email = :nome";

$blinda = $conn->prepare($sql);

$blinda->bindValue(':nome', $email);

$blinda->execute();

$result = $blinda->fetch(PDO::FETCH_ASSOC);

$total = $result['resultado'];

if($total > 0){

    echo '<script> alert("Email ja cadastrado, recupere sua senha")</script>
    <script> window.location.href="./insert.class.php" <script/>';

}


}

function Insere(){

global $database;

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$conexao = $database->Conecta_PDO();

$sql = "INSERT INTO recebe (usuario, email, senha) VALUES(:nome, :nome2, :nome3)";

$blinda = $conexao->prepare($sql);


if ($blinda->execute([
    ':nome' => $usuario,
    ':nome2' => $email,
    ':nome3' => $senha
])) {

    echo '<script> alert("dados inseridos com sucesso") </script>';
    $blinda ==null;

} else {
    echo '<script> alert("erro ao inserir") </script>';
}



}










}