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
        $html = '<ul>';

        foreach ($this->contacts as $contact)
        {
            $html .= "<li>$contact->nom $contact->prenom, Tel: $contact->tel, Mail: $contact->email</li>";
        }
        $html .= '</ul>';
        
        return $html;
    }

    public function rechercher($nom)
    {
        $html = '';        
        foreach ($this->contacts as $contact)
        {
            if ($contact->nom == $nom){
                $html .=  $contact->nom . " ".$contact->prenom.", Tel: ".$contact->tel.", Mail: ".$contact->email."<br>";
            }
        }
        return $html;
    }
}