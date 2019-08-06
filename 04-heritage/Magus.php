<?php
class Magus extends Character
{
    protected $mana = 30;
    
    public function castSpell($character)
    {
        $character->health -= $this->mana;
    }

    public function attack($character)
    {
        // on supprime la fonction attack pour les mages
        return;
    }
}