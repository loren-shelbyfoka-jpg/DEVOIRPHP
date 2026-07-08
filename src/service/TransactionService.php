<?php
require_once dirname(__DIR__)."/entity/WalletEntity.php";
require_once dirname(__DIR__)."/entity/TransactionEntity.php";
require_once dirname(__DIR__)."/repositories/TransactionRepository.php";



final class TransactionService{
    private function __construct()
    {
        throw new \Exception('Not implemented');
    }
    public  static function FaireDepot($transaction):bool
    {
        $nbrelignes=TransactionRepository::insert($transaction);
        return $nbrelignes!==0;
    }
      public static function ListerTransaction(int $code):array|null
    {
        return TransactionRepository::TransactionWalletbycode($code);
    }
      public static function Lister():array|null
    {
        return TransactionRepository::SelectAllTransaction();
    }
   public  static function FaireRetrait(TransactionEntity $transaction):bool
   {
        $transactionsW=TransactionRepository::TransactionWalletbycode($transaction->getWallet()->getCode());
        if ($transactionsW===null) {
            return FALSE;
        } else {
            $transaction->getWallet()->setTransactions($transactionsW);
        }
        
        
        $solde=$transaction->getWallet()->Solde();
        $ttc=$transaction->getMontant()+$transaction->getMontant()*0.01;
        if ($solde>=$ttc) {
             $nbrelignes=TransactionRepository::insert($transaction);
             return $nbrelignes!==0;
        } else {
            return FALSE;
           
        }
        


   }

}