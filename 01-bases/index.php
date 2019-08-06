<?php

require_once "cat.php";

// Bianca et Mina sont deux instances différentes de la classe Cat

$cat = new Cat();

$cat->setName('Bianca')
    ->setType('Chat de gouttière')
;

echo $cat->getName(); // Affiche "Bianca"
echo $cat->getType(); // Affiche "Chat de gouttière"