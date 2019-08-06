<?php

final class Warrior extends Character
{
    protected $strenght = 20;

    public function __construct($name)
    {
        // On conserve le comportement du constructeur de la classe mère

        parent::__contruct($name);
        $this->mana *= 2;
    }
}