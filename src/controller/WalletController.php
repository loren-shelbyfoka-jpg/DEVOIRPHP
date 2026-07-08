<?php
require_once dirname(__DIR__). '/service/WalletService.php';
require_once dirname(__DIR__). '/entity/WalletEntity.php';


final class WalletController{
    private function __construct(){
        throw new \Exception('Not implemented');
    }
    public static function form():void{
        require_once(dirname(dirname(__DIR__))."/views/Formwallet.php");
    }
     public static function creer():void{
        $errors=[];
        $wallet=WalletService::SearchWalletbytel($_POST['tel']);
        if ($_POST['nom']==="") {
            $errors["nom"]="Le nom est obligatoire";
        }
        if ($_POST['prenom']==="") {
             $errors["prenom"]="Le prenom est obligatoire";
        }
        if ($_POST['tel']==="") {
             $errors["tel"]="Le telephone est obligatoire";
        }
        if ($wallet!==FALSE) {
           $errors['wallet']="Ce wallet existe deja ";
        }

        if (count($errors)===0) {
           $wallet= new WalletEntity($_POST['nom'],$_POST['prenom'],$_POST['tel']);
           $result= WalletService::CreerWallet($wallet);
        }
        require_once(dirname(dirname(__DIR__))."/views/Formwallet.php");
    }
   
    

   


    
        
    }


