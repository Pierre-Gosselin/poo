<?php

class Hunter extends Character
{
    public function rangedAttack(Character $character)
    {
        $character->health -= $this->strenght *3;
    }
}