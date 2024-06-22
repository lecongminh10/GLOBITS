<?php

namespace App\View\Components\atoms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class tbody extends Component
{


    public $rows;

    public $columns;



    public function __construct($rows  , $columns)
    {
       $this->rows= $rows;
       $this->columns= $columns;
 
    }

    public function render(): View|Closure|string
    {
        return view('components.atoms.tbody' ,['rows' =>$this ->rows , 'columns' =>$this->columns]);
    }
}
