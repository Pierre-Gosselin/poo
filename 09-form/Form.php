<?php

/**
 * Cette classe permet de créer un formulaire pour un site web.
 */


class Form
{
    /**
     * Représente les champs de notre formulaire
     */
    protected $fields = [];

    public function __construct()
    {
        $this->form = "<form method=\"POST\">";
    }

    public function input($name)
    {
        $this->form .= "<div class=\"form-group\"><label for=\"$name\">$name</label><input class=\"form-control\" type=\"text\" name=\"$name\" id=\"$name\"></div>";
        return $this;
    }

    public function textarea($name)
    {
        $this->form .="<div class=\"form-group\"><label for=\"$name\">$name</label><textarea class=\"form-control\" name=\"$name\" id=\"$name\"></textarea></div>";
        return $this;
    }
    public function select($name,$choix)
    {
        $this->form .="<div class=\"form-group\"><label for=\"$name\">$name</label><select class=\"form-control\" name=\"$name\" id=\"$name\"></div>";
        return $this;
    }

    public function button($name)
    {
        $this->form .="<button type=\"submit\" class=\"btn btn-primary\">$name</button>";
        return $this;
    }
}