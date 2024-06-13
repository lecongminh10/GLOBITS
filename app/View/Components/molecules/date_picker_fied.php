<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DatePickerField extends Component
{
    public $for;
    public $name;
    public $label;
    public $classlabel;
    public $class;
    public $value;

    public function __construct($for, $name, $label, $classlabel = '', $class = '', $value = '')
    {
        $this->for = $for;
        $this->name = $name;
        $this->label = $label;
        $this->classlabel = $classlabel;
        $this->class = $class;
        $this->value = $value;
    }

    public function render()
    {
        return view('components.molecules.date_picker_fied');
    }
}

