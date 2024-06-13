<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DateInput extends Component
{
    public $id;
    public $name;
    public $class;
    public $value;

    public function __construct($id, $name, $class = '', $value = '')
    {
        $this->id = $id;
        $this->name = $name;
        $this->class = $class;
        $this->value = $value;
    }

    public function render()
    {
        return view('components.atoms.date-input');
    }
}

