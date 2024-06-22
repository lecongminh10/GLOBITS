<?php

namespace App\View\Components\atoms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class tableheader extends Component
{
    public $th;
    public function __construct($th)
    {
        $this ->th = $th;
    }



    public function render(): View|Closure|string
    {
        return view('components.atoms.tableheader' , ['th' =>$this->th]);
    }
}
