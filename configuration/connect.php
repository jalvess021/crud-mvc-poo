<!-- Conexão com o banco de dados -->

<?php
    define('HOST', 'localhost');
    define('DATABASENAME', 'crud_mvc_poo');
    define('USER', 'root');
    define('PASSWORD', '');

    class Connect{
        protected $connection;

        function __construct(){
            $this->connectDatabase();
        }

        function connectDatabase(){
            try{
                $this-> connect = new PDO('mysql:host='.HOST.'; dbname='.DATABASENAME, USER, PASSWORD);
            }
            catch (PDOException $e){
                echo "Error!". $e -> getMessage();
                die();
            }
        }
    }

    $testConnection = new Connect();
?>