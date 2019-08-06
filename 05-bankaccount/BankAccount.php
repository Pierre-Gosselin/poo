<?php

class BankAccount
{
    protected $identitiant;
    protected $name;
    protected $montant = 0;


    public function __construct($identitiant,$name, $montant = null)
    {
        $this->identifiant = $identitiant;
        $this->name = $name;

        if ($montant != null)
        {
            $this->montant = $montant;
        }
    }

    public function getBalance()
    {
        return $this->montant;
    }

    public function depositMoney($montant)
    {
        if ($montant < 0)
        {
            return "Le montant est négatif";
        }  
        $this->montant += $montant;
        return $this->montant;
    }

    public function withDrawMoney($montant)
    {
        if ($this->montant < $montant)
        {
            return "Le compte est à zéro";
        }
        $this->montant = $this->montant - $montant;
        return $this->montant;
    }
}