<?php

namespace App\View\Components\molecules;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class table extends Component
{
    /**
     * Create a new component instance.
     */

     public $classTable;

     public $idTable;

     public $headers;
    public function __construct($classTable , $idTable , $headers)
    {
        //

        $this ->classTable=$classTable;
        $this ->idTable = $idTable;
        $this ->headers = $headers;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.molecules.table', [
            'classTable' => $this->classTable,
            'idTable' => $this->idTable,
            'headers' => $this->headers
        ]);
    }
    
}
