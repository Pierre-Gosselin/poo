<?php

class SavingAccount extends BankAccount
{
    protected $interest;

    public function applyInterest($interest)
    {
        $this->montant += ($this->montant * $interest)/100;
        return $this->montant;
    }
}