<?php
require_once 'Character.php';
require_once 'Game.php';
require_once 'Warrior.php';
require_once 'Hunter.php';
require_once 'Magus.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>POO : Héritage</title>
</head>
<body>
    
    <?php
    // On peut créer une partie
    $game = new Game();

    // on créé les personnages
    $aragorn = new Warrior('Aragorn');
    $legolas = new Hunter('Legolas');
    $gandalf = new Magus('Gandalf');

    // On ajoute des personnages dans le jeu
    $game
        ->addPlayer($aragorn)
        ->addPlayer($legolas)
        ->addPlayer($gandalf)
    ;


    $aragorn->attack($legolas); // Enleve X points de vie en fonction de la force
    $legolas->rangedAttack($gandalf); // Enlève X points de vie en fonction de la force
    $gandalf->castSpell($aragorn); // Enlève X points de vie en fonction du mana
    $legolas->attack($gandalf);

    

    var_dump ($game);

    ?>
</body>
</html>