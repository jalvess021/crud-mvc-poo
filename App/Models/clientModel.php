<?php

    namespace App\Models;
    use App\Configuration\Connect;
    use \PDO;
 
    Class ClientModel extends Connect{
        
        private $table;

        public $id, $name, $email, $phone;

        function __construct(){
            parent::__construct(); //Chama o construtor pai (Class connect)
            $this -> table = 'clients';
        }

        function getAll(){
            $sqlSelect = $this -> connect -> query("select * from ".$this->table.";");
            $resultQuery = $sqlSelect -> fetchAll();
            return $resultQuery;
        }

        function selectClient($clientId){
            $sql = $this -> connect -> prepare("select * from ".$this -> table." where id_client = ?");
            $sql -> bindValue(1, $clientId);
            $sql -> execute();
            $resultQuery = $sql -> fetch();
            return $resultQuery;
        }

        function insertClient(){
            $idClient = $this -> id;
            $nameClient = $this -> name;
            $emailClient = $this -> email;
            $phoneClient = $this -> phone;
      
            $sqlInsert = $this -> connect -> prepare("insert into ".$this-> table." (id_client, name_client, email_client, phone_client) values (?, ?, ?, ?)");
            $sqlInsert -> bindValue(1, $idClient, PDO::PARAM_INT);
            $sqlInsert -> bindValue(2, $nameClient, PDO::PARAM_STR);
            $sqlInsert -> bindValue(3, $emailClient, PDO::PARAM_STR);
            $sqlInsert -> bindValue(4, $phoneClient, PDO::PARAM_STR);
            $sqlInsert -> execute();

            header('Location: '.RAIZ.'/');
        }

        function updateClient(){
            $idClient = $this -> id;
            $nameClient = $this -> name;
            $emailClient = $this -> email;
            $phoneClient = $this -> phone;

            $sqlUpdate = $this -> connect -> prepare("update ".$this->table." set name_client = ?, email_client = ?, phone_client = ? where id_client = ?;");
            $sqlUpdate -> bindValue(1, $nameClient, PDO::PARAM_STR);
            $sqlUpdate -> bindValue(2, $emailClient, PDO::PARAM_STR);
            $sqlUpdate -> bindValue(3, $phoneClient, PDO::PARAM_STR);
            $sqlUpdate -> bindValue(4, $idClient, PDO::PARAM_INT);
            $sqlUpdate -> execute();

            header('Location: '.RAIZ.'/');
        }

        function dropClient($dataDelete){
            $sqlDelete = $this -> connect -> prepare("DELETE from ".$this->table." where id_client = ?");
            $sqlDelete -> bindValue(1, $dataDelete, PDO::PARAM_INT);
            $sqlDelete -> execute();

            header('Location: '.RAIZ.'/');
        }
    }
?>