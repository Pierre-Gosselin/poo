<?php

/**
 * On veut créer une classe Voiture
 * Une voiture possède 4 roues, une couleur, une marque et un modèle.
 * Une voiture peut rouler et klaxonner
 */


class Voiture
{
    private $nbRoue;
    private $couleur;
    private $marque;
    private $modele;

    public function __construct($nbRoue, $couleur, $marque, $modele)
    {
        $this->nbRoue = $nbRoue;
        $this->couleur = $couleur;
        $this->marque = $marque;
        $this->modele = $modele;
        
    }

    public function read()
    {
        return $this->modele. ' de marque '. $this->marque . ' de couleur ' . $this->couleur . ' composée de '. $this->nbRoue . ' roues';
    }
    public function roll()
    {
        return $this->modele." roule";
    }
    public function honk()
    {
        return $this->modele." klaxonne";
    }
}