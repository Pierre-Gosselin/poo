<?php

class Contact
{
    public $nom;
    public $prenom;
    public $tel;
    public $email;


    public function __construct($nom, $prenom, $tel, $email)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->tel = $tel;
        $this->email = $email;
    }
}