<?php

namespace Geometry;

class Form
{
    private $forms = [];

    public function add($form)
    {
        $this->forms[] = $form;
        return $this;
    }

    public function area()
    {
        $aire = 0;
        foreach ($this->forms as $form)
        {
            $aire += $form->area();
        }
        return $aire;
    }

    public function perimeter()
    {
        $perimeter = 0;
        foreach ($this->forms as $form)
        {
            $perimeter += $form->perimeter();
        }
        return $perimeter;
    }
}