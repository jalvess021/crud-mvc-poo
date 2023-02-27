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
            $sqlSelect = $this -> connect -> query("select * from $this->table;");
            $resultQuery = $sqlSelect -> fetchAll();
            return $resultQuery;
        }

        function insertClient(){

            $idClient = $this -> id;
            $nameClient = $this -> name;
            $emailClient = $this -> email;
            $phoneClient = $this -> phone;
            
    
            $sqlInsert = $this -> connect -> prepare("insert into clients values ?, ?, ?, ?;");
            $sqlInsert -> bindValue(1, $idClient, PDO::PARAM_INT);
            $sqlInsert -> bindValue(2, $nameClient, PDO::PARAM_STR);
            $sqlInsert -> bindValue(3, $emailClient, PDO::PARAM_STR);
            $sqlInsert -> bindValue(4, $phoneClient, PDO::PARAM_STR);

            $sqlInsert -> execute();
        }
    }
?>