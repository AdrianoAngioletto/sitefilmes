<?php


class Database{


    private $host;
    private $username;
    private $password;
    private $dbname;
    private $pdo;



    public function __construct($host, $username, $password, $dbname, $pdo){


        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
        $this->pdo = $pdo;




    }

    public function Conecta_Ai_Bb(){


        $conexao = "mysql:host=$this->host;dbname=$this->dbname;charset=utf8mb4";
        $this->pdo = new PDO($conexao, $this->username, $this->password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        

    }
    

    public function Pega_Conexao(){

    return $this->pdo;


    }
    

}