<?php
require_once dirname(__DIR__)."/entity/TypeTransaction.php";
require_once dirname(__DIR__)."/entity/TransactionEntity.php";
class WalletEntity{
    private string $nom;
    private string $prenom;
    private string $tel;
    private int $code;
    private array $transactions;

    public function __construct(int $code, string $nom,string $prenom,string $tel)
    {
        $this->code = $code;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->tel = $tel;
        $this->transactions = [];
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
        return $this->client;
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
            $total += $transaction->montant;
        }
        return $total;
    }

    
    public function getTransactions(): array
    {
        return $this->transactions;
    }
    
}
