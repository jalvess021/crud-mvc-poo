<?php

    namespace App\Controller;

    abstract class Controller {

        protected static function render($view){
            $arquivo_view = VIEWS. $view . '.php';
            file_exists($arquivo_view) ? include $arquivo_view : 
            exit('Arquivo da View não encontrado. Arquivo: ' . $view); 
        }
    }