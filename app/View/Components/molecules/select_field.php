<?php

namespace App\View\Components\molecules;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class select_field extends Component
{
    /**
     * Create a new component instance.
     */
    public $options;
    public $multiple;

    public $field;

 
    public function __construct($options, $multiple , $field )
    {
        $this->options = $options;
        $this->multiple = $multiple;
        $this->field = $field;
  
    }

    public function render(): View|Closure|string
    {
        return view('components.molecules.select_field');
    }
}
