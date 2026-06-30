<?php
require_once dirname(__DIR__)."/entity/WalletEntity.php";

final class WalletRepository{
    const TABLENAME="wallet";
    private function __construct()
    {

    }
     public static function insert(WalletEntity $wallet):int
    {
       $nom=$wallet->getNom();
       $prenom=$wallet->getPrenom();
       $tel=$wallet->getTel();
       $sql="INSERT INTO "." ".self::TABLENAME."(nom,prenom,tel) VALUES ('$nom', '$prenom','$tel')";
         $sgbd="pgsql";
        $host="localhost";
        $dbname="Geswallet";
        $username="postgres";
        $password="lorenefoka";
        $port="5432";
        try {
            $pdo=new PDO(
                "$sgbd:host=$host;port=$port;dbname=$dbname",
                $username,
                $password
            );
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $nbrelignes=$pdo->exec($sql);
            return $nbrelignes;
        } catch (PDOException $e) {
           echo "Erreur de connexion: ".$e->getMessage();
           return 0;
        }
    }
    
    public static function SelectAllWallet():array|null
    {
         $sql="SELECT * FROM " . self::TABLENAME;
        $sgbd="pgsql";
        $host="localhost";
        $dbname="Geswallet";
        $username="postgres";
        $password="lorenefoka";
        $port="5432";
         try {
            $pdo = new PDO("$sgbd:host=$host;dbname=$dbname;port=$port", $username, $password);
            $stmt = $pdo->query($sql);
            $wallets = [];
               while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $wallet= new WalletEntity(
                    $row['nom'],
                    $row['prenom'],
                    $row['tel'],
                    $row['code']
                );
                $wallets[] = $wallet;
            }
            return $wallets;
         } catch (PDOException $e) {
            echo "Erreur de connexion à la base de données: " . $e->getMessage();
            return null;
         }
   
    }
     public static function RechercherWalletbytel(string $tel):WalletEntity|null
    {
        $wallets=WalletRepository::SelectAllWallet();
        $pos=-1;
        foreach ($wallets as$wallet) {
                if ($wallet->getTel()==$tel) {
                    return $wallet;
                    $pos=0;
                }
        }   
        if($pos===-1){
            return null;
        }
         
    }
     public static function RechercherWalletbycode(int $code):WalletEntity|null
    {
        $wallets=WalletRepository::SelectAllWallet();
        $pos=-1;
        foreach ($wallets as$wallet) {
                if ($wallet->getCode()==$code) {
                    return $wallet;
                    $pos=0;
                }
        }   
        if($pos===-1){
            return null;
        }
         
    }


}