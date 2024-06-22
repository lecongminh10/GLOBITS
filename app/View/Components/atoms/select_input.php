<?php

namespace App\View\Components\atoms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class select_input extends Component
{
    /**
     * Create a new component instance.
     */
    public $multiple;
    public $selected;

    public $field;
   
    public function __construct($multiple , $field ,$selected=null )
    {
        //
        $this ->multiple= $multiple;
        $this ->selected= $selected;
        $this ->field= $field;
     
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.atoms.select_input',['multiple'=>$this->multiple , 'selected'=>$this->selected]);
    }
}
