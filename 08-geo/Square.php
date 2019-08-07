<?php

namespace Geometry;

class Square extends Rectangle
{
    public function __construct($largeur)
    {
        // On appelle le constructeur du rectangle
        parent::__construct($largeur,$largeur);
    }
}