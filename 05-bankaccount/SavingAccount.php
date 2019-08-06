<?php

class SavingAccount extends BankAccount
{
    public function applyInterest($interest)
    {
        $this->montant += ($this->montant * $interest)/100;
        return $this->montant;
    }
}