<?php

    namespace App\Controllers;

    abstract class Controller {

        protected static function render($view, $resultData = null){
            $arquivo_view = VIEWS. $view . '.php';
            file_exists($arquivo_view) ? include $arquivo_view : 
            exit('Arquivo da View não encontrado. Arquivo: ' . $arquivo_view); 
        }
    }