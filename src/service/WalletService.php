
<?php 
require_once dirname(__DIR__)."/entity/WalletEntity.php";
require_once dirname(__DIR__)."/repositories/WalletRepository.php";
final class WalletService{
    private function __construct()
    {
        throw new \Exception('Not implemented');
    }
    public static function CreerWallet(WalletEntity $wallet):bool
    {
         $nbreLigneAffectes=WalletRepository::insert($wallet);
         return $nbreLigneAffectes !== 0;
    }
   
    public static function SearchWalletbytel(string $tel):WalletEntity|bool
    {
        $wallet=WalletRepository::RechercherWalletbytel($tel);
        if ($wallet===null) {
           return FALSE;
        } else {
            return $wallet;
        }
        
    }
    public static function ListerWallet():array
    {
        return WalletRepository::SelectAllWallet();
    }
    
    
}