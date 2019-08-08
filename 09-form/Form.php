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

    /**
     * Définit un label du bouton sur le formulaire
     */
    private $button;


    public function input($name)
    {
        $this->fields[] = [
            'name' => $name,
            'tag' => 'input',
        ];
        return $this;
    }

    public function textarea($name)
    {
        $this->fields[] = [
            'name' => $name,
            'tag' => 'textarea',
        ];
        return $this;
    }
    public function select($name, $options)
    {
        $this->fields[] = [
            'name' => $name,
            'tag' => 'select',
            'options' => $options,
        ];
        return $this;
    }
  
    public function button($name)
    {
        $this->button = $name;
        return $this;
    }

    /**
     * __toString() permet de définir ce qu'on affiche quand on echo l'objet
     * 
     * Ici on affiche le formulaire en HTML
     */
    public function __toString()
    {
        // On génère le rendu du forrmulaire
        $html = "<form method=\"POST\">";
        // Parcourir tous les champs et les ajouter dans la variable html
        foreach ($this->fields as $field)
        {
            $html .= "<div class=\"form-group\">";
            $html .= '<label for="'.$field['name'].'">'.$field['name'].'</label>';

            $data = $this->getData($field['name']);

            if ($field['tag'] === 'input'){
                $html .= '<input value="'.$data.'"  class="form-control" type="text" name="'.$field['name'].'" id="'.$field['name'].'">';
            }else if ($field['tag'] === 'textarea'){
                $html .= '<textarea class="form-control" name="'.$field['name'].'" id="'.$field['name'].'">'.$data.'</textarea>';
            }else if ($field['tag'] === 'select'){
                $html .= '<select class="form-control" name="'.$field['name'].'" id="'.$field['name'].'">';
                foreach ($field['options'] as $option)
                {
                    $html .= '<option value="'.$option.'">'.$option.'</option>';
                }
                $html .= '</select>';
            }
            $html .= "</div>";
        }
        $html .= "<button type=\"submit\" class=\"btn btn-primary btn-block\">$this->button</button>";
        $html .= "</form>";
        return $html;   
    }

    public function isSubmit()
    {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }

    public function getData($key = null)
    {
        
        if (null !== $key)
        {
            return $_POST[$key] ?? null;
        }
        return $_POST;
    }
}