<?php

    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    use App\Controllers\ClientsController;
    switch ($url) {
        //Padrão
        case RAIZ.'/':
            $render = new ClientsController;
            $render -> index();
            //ClientsController::index();
            break;
        /*
        case '/crud-mvc-poo':
            header('Location: \\crud-mvc-poo\App')
            //ClientsController::index();
            break;*/
        
        default:
           echo "erro 404! Página não encontrada!";
            break;
    }

    /*
    require_once('Controllers/clientsController.php');

    $action = !empty($_GET['a']) ? $_GET['a'] : 'getAll';   

    $controller = new clientsController();

    $controller -> {$action}(); //Chamando a funcao armazenada na variavel*/