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
    }
?>