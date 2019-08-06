<?php
require_once "BankAccount.php";
require_once "SavingAccount.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

    /**
     * Nous allons créer un système de gestion de compte en banque en POO
     * 
     * Nous aurons d'abord le compte en banque classique représentée par la classe BankAccount
     */

    $bankAccount01 = new BankAccount(123456, 'Matthieu');
    echo 'solde du compte : '. $bankAccount01->getBalance()."<br>";
    $bankAccount01->depositMoney(1000);
    echo 'solde du compte : '. $bankAccount01->getBalance()."<br>";
    echo 'On enlève 1000 au compte : ' .$bankAccount01->withDrawMoney(1000)."<br>";

    echo 'On enlève 1000 au compte : ' .$bankAccount01->withDrawMoney(1000)."<br>";
    echo 'On enlève 2000 au compte : ' .$bankAccount01->depositMoney(-2000)."<br>";

    ?><hr><?php
    
    // On va ajouter un sytème de livret qui va hériter d'un compte standart.

    $savingAccount01 = new SavingAccount(123457, 'Pierre');
    
    echo 'solde du compte : '. $savingAccount01->depositMoney(1000).'<br>'; // Pierre a 1000 sur son livret
    
    echo 'solde du compte avec interet : '. $savingAccount01->applyInterest(0.75).'<br>'; // Augmente le montant du livre de 0.75%
    $savingAccount01->withDrawMoney(1000); // Diminue le montant du livret de 1000

    echo 'solde du compte : '. $savingAccount01->getBalance()."<br>";

    ?>
</body>
</html>