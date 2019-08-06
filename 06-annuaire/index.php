<?php

require_once "Annuaire.php";
require_once "Contact.php";

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
     * on veut réliaser un annuaire de contacts
     * On aura une class Annuaire qui pourra contenir des contacts.
     * On pourra compter le nombre de contacts.
     * On aura une classe Contact qui représentera quelqu'un dans notre annaire.
     * Un contact possède un nom, un prénom, un téléphone et un email.
     */

    $annuaire = new Annuaire();

    echo 'Notre annuaire contient '. $annuaire->compter(). ' contacts<br>';
    $contact1 = new Contact('Mota','Matthieu','0600000000','matthieu@boxydev.com');
    $contact2 = new Contact('Doe','John','0600000000','john@boxydev.com');
    $contact3 = new Contact('Doe','John1','0600000000','john@boxydev.com');
    $contact4 = new Contact('Doe','John2','0600000000','john@boxydev.com');

    $annuaire
        ->addContact($contact1)
        ->addContact($contact2)
        ->addContact($contact3)
        ->addContact($contact4)
    ;

    echo 'Notre annuaire contient '. $annuaire->compter(). ' contacts<br><hr>';
    echo $annuaire->afficher();

    echo "<br>Rechercher le nom Doe<br>";

    $annuaire->rechercher("Doe");
    
    ?>
</body>
</html>