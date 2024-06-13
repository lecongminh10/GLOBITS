<?php

namespace App\View\Components\atoms;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Closure;

class Label extends Component
{
    public $classlabel;
    public $text;

    public function __construct($classlabel, $text)
    {
        $this->classlabel = $classlabel;
        $this->text = $text;
    }

    public function render(): View|Closure|string
    {
        return view('components.atoms.label');
    }
}

