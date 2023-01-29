<?php

    namespace App\Configuration;
    use \PDO;
    //Constantes de rotas
    define('BASEDIR', $_SERVER['DOCUMENT_ROOT'].'/crud-mvc-poo');
    define('VIEWS', BASEDIR . '/App/Views/modules/');
    define('RAIZ', '/crud-mvc-poo');

    //Constante de conexão
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