<?php

namespace App\View\Components\atoms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class button extends Component
{
    /**
     * Create a new component instance.
     */
    public $class;
    public $text;
    public function __construct($class,$text)
    {
        $this ->class=$class;
        $this ->text=$text;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.atoms.button' ,
        [
            'class' =>$this->class,
            'text' =>$this->text,
        ]);
    }
}
