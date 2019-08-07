<?php

namespace Geometry;

class Rectangle
{

    protected $largeur;
    protected $longueur;

    public function __construct($largeur = 0, $longueur = 0)
    {
        $this->largeur = $largeur;
        $this->longueur = $longueur;
    }

    public function area()
    {  
        return $this->largeur * $this->longueur;
    }

    public function perimeter()
    {
        return ($this->largeur + $this->longueur)*2;
    }

}