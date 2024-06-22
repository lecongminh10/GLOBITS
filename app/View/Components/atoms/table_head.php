<?php

namespace App\View\Components\atoms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TableHead extends Component
{
   
    protected $idClassThead;
    protected $headers;

    public function __construct($idClassThead , $headers )
    {
        $this ->idClassThead= $idClassThead;
        $this ->headers = $headers;
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.atoms.table_head' , ['idClassThead' =>$this ->idClassThead , 'headers' =>$this ->headers]);
    }
}
