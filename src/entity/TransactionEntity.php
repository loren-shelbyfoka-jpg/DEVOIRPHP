<?php
require_once dirname(__DIR__)."/entity/TypeTransaction.php";
class TransactionEntity{
    private static int $counter=0;
    private int $code;
    private int $montant;
    private DateTime $date;
    private TypeTransaction $type;

    

    public function __construct(int $code,int $montant, $date=new DateTime(),TypeTransaction $type)
    {
            if ($id === null) {
               TransactionEntity::$counter++;
                $this->code = TransactionEntity::$counter;
            } else {
                $this->code = $code;
            }
        $this->nom = $nom;
        $this->montant = $montant;
        $this->date = $date;
        $this->type = $type;
    }

   
    

    public function getcode(): int
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
         return "Code:" . $this->code . ", Nom: " . $this->nom . "', Montant: '" . $this->montant . "', Date: '" . $this->date .",Type: ".$this->type->value. "'}";
    }
}