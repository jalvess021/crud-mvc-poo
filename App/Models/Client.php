<!-- Consultas/regras de negócios-->

<?php

    require_once('./configuration/connect.php');
 
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
    }
?>