<?php

namespace App\View\Components\atoms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select_input_tus extends Component
{
    /**
     * Create a new component instance.
     */
    public $multiple;
    public $tam;

    public $field;
   
    public function __construct($multiple,$tam ='' , $field )
    {
        //
        $this ->multiple= $multiple;
        $this ->tam= $tam;
        $this ->field= $field;
     
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.atoms.select_input_tus',['multiple'=>$this->multiple , 'tam'=>$this->tam]);
    }
}
