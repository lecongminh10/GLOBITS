<?php

namespace App\View\Components\atoms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class text_input extends Component
{

    public $name;
    public $value;
    public $classinput;

    public function __construct($name , $value , $classinput)
    {
        //
        $this ->name = $name;
        $this ->value = $value;
        $this ->classinput= $classinput;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.atoms.text_input',
        [
            'name' =>$this ->name,
            'value' =>$this ->value,
            'classinput' =>$this ->classinput,
        ]
    );
    }
}
