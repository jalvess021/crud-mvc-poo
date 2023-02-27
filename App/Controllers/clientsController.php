<?php

    namespace App\Controllers;

    use App\Controllers\Controller;
    use App\Models\ClientModel;

    class ClientsController extends Controller {
        private $model;

        public function __construct(){
            $this -> model = new ClientModel;
        }

        public function index(){
            $resultData = $this -> model -> getAll();
            parent::render('Client/listaClient', $resultData);
        }

        //Rota de inserção de dados
            public function formClient(){
                parent::render('Client/formClient');
            }

            public function saveClient(){
                $save = $this -> model = new ClientModel;
                if (isset($_POST['id'])){$save -> id = $_POST['id'];}
                else{$save -> id = 0;} 
                $save -> name = $_POST['name']; 
                $save -> email = $_POST['email']; 
                $save -> phone = $_POST['phone']; 
                $save -> insertClient();
                parent::reder('Client/listaClient');

            }
    }
?>