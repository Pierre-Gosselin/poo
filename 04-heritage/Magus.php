<?php
class Magus extends Character
{
    protected $mana = 10;
    
    public function __construct($name)
    {
        // On conserve le comportement du constructeur de la classe mère

        parent::__construct($name);
        $this->mana *= 2;
    }
    
    public function castSpell(Character $character)
    {
        $character->health -= $this->mana;
    }

    public function attack(Character $character)
    {
        // on supprime la fonction attack pour les mages
        return;
    }
}