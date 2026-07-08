<?php 
require_once __DIR__."/controller/TransactionController.php";
require_once __DIR__."/controller/WalletController.php";



final class Router{
    const WEBROOT="http://localhost:8000";
    public static function run(): void
    {   require_once(dirname(__DIR__)."/views/partials/header.partial.php");
     
        $uri=$_SERVER['REQUEST_URI'];
        
        switch ($uri) {
            case '/creer-wallet':
                WalletController::form();
                break;
            case '/list-transaction':
                TransactionController::recherche();
                break;  
            case '/faire-transaction':
                TransactionController::form();
                break;
            case '/AjouterTransaction':
                TransactionController::ajouter();
                break;
            case '/recherchetransactions':
                TransactionController::list();
                break;
            case '/enregister':
                WalletController::creer();
                break;
            default:
                # code...
                break;
        }
    }

}

