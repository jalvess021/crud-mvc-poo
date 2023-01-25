<?php
    
    use App\Controller\Controller;

    class clientsController extends Controller {
        private $model;

        public function __construct(){
            $this -> model =  new ClientModel;
        }
        public function getAll(){
            $resultData = $this -> model -> getAll();
            parent::render('Client/listaClient');
        }
    }
?>