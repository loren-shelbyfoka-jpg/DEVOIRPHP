<?php 
require_once __DIR__."/service/WalletService.php";
require_once __DIR__."/service/TransactionService.php";


final class Router{
    public static function run(): void
    {  
        $uri=$_SERVER['REQUEST_URI'];
         $uriAction=explode("?", $uri)[0];
        switch ($uri) {
            case 'creer-wallet':
                $ctrl=new WalletController();
                $ctrl->creer;
                break;
            
            default:
                # code...
                break;
        }
    }

}

