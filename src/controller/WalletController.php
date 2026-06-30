<?php
require_once __DIR__ . '/service/WalletService.php';
require_once __DIR__ . '/entity/WalletEntity.php';


class WalletController{
    public function creer():void{
        require_once __DIR__ . '/../views/Formwallet.php';
        $nom=trim($_POST['nom'])??'';
        $prenom=trim($_POST['prenom'])??'';
        $tel=trim($_POST['telephone'])??'';
        $erreurs=[];

     
        if (empty($nom)) {
            $errors['nom']="Le nom est obligatoire";
        }
        if (empty($tel)) {
            $errors['tel']="Le telephone est obligatoire";
        }

        if(count($errors)!=0) {
            $oldData=$_POST;
            $errorsForm=$errors;
        require_once(dirname(dirname(__DIR__))."/templates/client/form.client.php");
        return;
        }

        $client=ClientService::rechercherClientParTel($telephone);
            if(  $client==null){
                        //3- Enregister les donnees en BD
                        $client=new ClientEntity($nom,$adresse,$telephone);
                        $result= ClientService::enregistrerClient($client);
                        if ($result) {
                            //Client Enregister avec succees
                            //Redirection vers la liste
                            /*
                                Redirection en Php 
                                header("location:url");
                                
                            */
                                header("location:http://localhost:8080/client-liste");
                                exit;
                    }
        }
    }

        


     
        
    }

}