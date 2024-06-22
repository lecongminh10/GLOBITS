<?php

namespace App\View\Components\molecules;


use Illuminate\View\Component;

class Table extends Component
{
    public $classTable;
    public $idTable;
    public $idClassThead;
    public $headers;


    public function __construct($classTable, $idTable)
    {
        $this->classTable = $classTable;
        $this->idTable = $idTable;

    }

    public function render()
    {
        return view('components.molecules.table');
    }
}

