<?php

namespace DB;

class Database{


private $host;
private $username;
private $password;
private $dbname; 

private $texto;

public $mostra;

 
 


public function __construct($host, $username, $password, $dbname){


$this->host = $host;
$this->username = $username;
$this->password = $password;
$this->dbname = $dbname;




}


public function Conecta_PDO(){

$conn = new \PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);

$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);



return $conn;


}



}