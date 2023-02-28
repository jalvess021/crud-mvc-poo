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

        case RAIZ.'/info-client':
            $clientId = (int)$_POST['clientId'];
            $render = new ClientsController;
            $render -> infoClient($clientId);
        break;

        case RAIZ.'/form-client':
            $render = new ClientsController;
            $render -> formClient();
        break;

        case RAIZ.'/edit-client':
            $clientId = (int)$_POST['clientId'];
            $render = new ClientsController;
            $render -> editClient($clientId);
        break;

        case RAIZ.'/save-client':
            $render = new ClientsController;
            $render -> saveClient();
        break;

        case RAIZ.'/delete-client':
            $clientId = (int)$_POST['clientId'];
            $render = new clientsController;
            $render -> deleteClient($clientId);
        break;

        default:
           echo "erro 404! Página não encontrada!";
            break;
    }