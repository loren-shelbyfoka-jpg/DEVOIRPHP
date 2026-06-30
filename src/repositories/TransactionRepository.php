<?php
require_once dirname(__DIR__)."/entity/TransactionEntity.php";
require_once dirname(__DIR__)."/entity/WalletEntity.php";
require_once dirname(__DIR__)."/repositories/WalletRepository.php";
require_once dirname(__DIR__)."/entity/TypeTransaction.php";




final class TransactionRepository{
    const TABLENAME="transactions";
    private function __construct()
    {

    }
    public static function insert(TransactionEntity $transaction):int
    {
        $montant=$transaction->getMontant();
        $date=$transaction->getDate();
        $type=$transaction->getType();
        $dateString = $date->format('Y-m-d');
        $wallet_code=$transaction->getWallet()->getCode();

        $sql="INSERT INTO "." ".self::TABLENAME."(montant,date,typ,wallet_code)VALUES ($montant, '$dateString' ,'$type->value',$wallet_code)";
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
    public static function SelectAllTransaction():array
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
            $transactions = [];
               while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $transaction= new TransactionEntity(
                    TypeTransaction::from($row['typ']),
                    $row['montant'],
                    WalletRepository::RechercherWalletbycode($row['wallet_code']),
                    new DateTime($row['date']),
                    $row['code']
                  
                );
                $transactions[] = $transaction;
            }
            return $transactions;
         } catch (PDOException $e) {
            echo "Erreur de connexion à la base de données: " . $e->getMessage();
            return [];

         }
        
   
}
 public static function TransactionWalletbycode(int $code):array|null
         {
            $transactionsW=[];
            $transactions=TransactionRepository::SelectAllTransaction();
            foreach ($transactions as $transaction) {
                if ($transaction->getWallet()->getCode()===$code) {
                    $transactionsW[]=$transaction;
                
                }
            }
            if (count($transactionsW)!==0) {
               return $transactionsW;
            } else {
                return null;
            }
            
         }
}