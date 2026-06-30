<?php
require_once dirname(__DIR__)."/entity/TypeTransaction.php";
require_once dirname(__DIR__)."/entity/WalletEntity.php";
class TransactionEntity{
    private static int $counter=0;
    private int $code;
    private int $montant;
    private DateTime $date;
    private TypeTransaction $type;
    private WalletEntity $wallet;

    

    public function __construct(TypeTransaction $type,int $montant,WalletEntity $wallet, $date=new DateTime(),int|null $code=null)
    {
            if ($code === null) {
               TransactionEntity::$counter++;
                $this->code = TransactionEntity::$counter;
            } else {
                $this->code = $code;
            }
        $this->montant = $montant;
        $this->date = $date ?? new DateTime();
        $this->type = $type;
        $this->wallet=$wallet;
            
        
    }

    public function getWallet(): WalletEntity
    {
        return $this->wallet;
    }
    

    public function getCode(): int
    {
        return $this->code;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

 
    public function getMontant(): int
    {
        return $this->montant;
    }

    public function getDate(): DateTime
    {
        return $this->date;
    }
    public function getType():TypeTransaction
    {
        return $this->type;
    }

    public function __toString()
    {
         return "Code:" . $this->code . ", Montant: " . $this->montant . ", Date: " .$this->date->format('Y-m-d').",Type: ".$this->type->value. "'}";
    }
}