<?php
require_once dirname(__DIR__)."/entity/TypeTransaction.php";
require_once dirname(__DIR__)."/entity/TransactionEntity.php";
class WalletEntity{
    private string $nom;
    private string $prenom;
    private string $tel;
    private int $code;
    private array $transactions;

    public function __construct( string $nom,string $prenom,string $tel,int|null $code=null)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->tel = $tel;
        $this->transactions = [];
        if ($code===null) {
           $code=null ;
        }else{
            $this->code=$code;
        }
    }
     public function getcode(): int
    {
        return $this->code;
    }
    

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPrenom():string
    {
        return $this->prenom;
    }

    

    public function getTel(): string   {
        return $this->tel;
    }

    public function __toString()
    {
         return "Code: " . $this->code . ", Nom: ". $this->nom .", Prenom= '" . $this->prenom . ", Telephone: ".$this->tel."'}";
    }

    public function solde(): float
    {
        $total = 0.0;
        foreach ($this->transactions as $transaction) {
            if ($transaction->getType()==TypeTransaction::DEPOT) {
                 $total += $transaction->getMontant();
            } else {
                 $total -= $transaction->getMontant();
            }
            
           
        }
        return $total;
    }

    
    public function getTransactions(): array
    {
        return $this->transactions;
    }
    public function setTransactions(array $transactions):void
    {
        $this->transactions=$transactions;
    }
    
}
