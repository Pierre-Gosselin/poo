<?php

namespace Geometry;

class Circle
{
    CONST PI = 3.14159265359;
    protected $rayon;
    
    public function __construct($rayon)
    {
        $this->rayon = $rayon;
    }

    public function area()
    {
        return round(self::PI * $this->rayon ** 2 ,2);
    }

    public function perimeter()
    {
        return round(2*self::PI*$this->rayon,2);
    }
}