<?php

namespace App\View\Components\molecules;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class text_input_field extends Component
{
    public $name;
    public $label; // Sửa chính tả
    public $value;
    public $classlabel;
    public $classinput;
    

    public function __construct($name , $label , $value, $classlabel , $classinput)
    {
        $this->name = $name;
        $this->label = $label; // Sửa chính tả
        $this->value = $value;
        $this->classlabel = $classlabel;
        $this->classinput = $classinput;
    }

    public function render(): View|Closure|string
    {
        return view('components.molecules.text_input_field', [
            'name' => $this->name,
            'label' => $this->label, // Sửa chính tả
            'value' => $this->value,
            'classlabel' => $this->classlabel,
            'classinput' =>$this ->classinput,
        ]);
    }
}
