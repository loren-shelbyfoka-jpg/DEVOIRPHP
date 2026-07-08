<?php
require_once dirname( __DIR__ ). '/service/TransactionService.php';
require_once dirname(__DIR__) . '/entity/TransactionEntity.php';
require_once dirname( __DIR__ ). '/service/WalletService.php';

final class TransactionController{
     private function __construct(){
        throw new \Exception('Not implemented');
    }
    public static function recherche():void{
       
        require_once(dirname(dirname(__DIR__))."/views/liste.Transaction.php");
     }
     public static function list():void{
        $code=$_POST['code'];
        $transactions=TransactionService::ListerTransaction($code);
        require_once(dirname(dirname(__DIR__))."/views/liste.Transaction.php");
     }
     public static function form():void{
        require_once(dirname(dirname(__DIR__))."/views/faire.Transaction.php");
       
     }
    public static function ajouter():void{
        $errors=[];
        $wallet=WalletService::SearchWalletbytel($_POST['tel']);
       
       
        if ($wallet!==FALSE) {
             $transaction= new TransactionEntity(TypeTransaction::from($_POST['type']),$_POST['montant'],$wallet,new DateTime($_POST['date']));
            if ($_POST['montant']>0) {
               $type=$_POST['type'];
             switch ($type) {
                case 'DEPOT':
                $result=TransactionService::FaireDepot($transaction);
                break;
                case 'RETRAIT':
                $result=TransactionService::FaireRetrait($transaction);
                break;
            default:
                # code...
                break;
        }  
            }else{
                $errors['montant']="Montant negatif resaisir";
            }
            
        }else {
            $errors['wallet']="Aucun wallet trouve";
        }
       
        require_once(dirname(dirname(__DIR__))."/views/faire.Transaction.php");
       
     }

}
