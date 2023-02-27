<?php

    namespace App\Models;
    use App\Configuration\Connect;
 
    Class ClientModel extends Connect{
        
        private $table;

        function __construct(){
            parent::__construct(); //Chama o construtor pai (Class connect)
            $this -> table = 'clients';
        }

        function getAll(){
            $sqlSelect = $this -> connect -> query("select * from $this->table;");
            $resultQuery = $sqlSelect -> fetchAll();
            return $resultQuery;
        }

        public $id, $name, $email, $phone;

        function insertClient(){
            $sqlInsert = $this -> connect -> prepare("insert into clients values ?, ?, ?, ?;");
            $sqlInsert -> bindValue(1, 0);
            $sqlInsert -> bindParam(2, $nameClient, PDO::PARAM_STR);
            $sqlInsert -> bindParam(2, $emailClient, PDO::PARAM_STR);
            $sqlInsert -> bindParam(2, $phoneClient, PDO::PARAM_STR);

            $nameClient = $name;
            $emailClient = $email;
            $phoneClient = $phone;

            $sqlInsert -> execute();
        }
    }
?>