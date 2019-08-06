<?php

class Annuaire
{

    protected $contacts = [];

    public function compter()
    {
        return count($this->contacts);
    }

    public function addContact(Contact $contact)
    {
        $this->contacts[] = $contact;
        return $this;
    }

    public function afficher()
    {      
        foreach ($this->contacts as $contact)
        {
            echo $contact->nom . " ".$contact->prenom.", Tel: ".$contact->tel.", Mail: ".$contact->email."<br>";
        }
    }

    public function rechercher($nom)
    {
        
        foreach ($this->contacts as $contact)
        {
            if ($contact->nom == $nom){
                echo $contact->nom . " ".$contact->prenom.", Tel: ".$contact->tel.", Mail: ".$contact->email."<br>";
            }
        }

    }
}