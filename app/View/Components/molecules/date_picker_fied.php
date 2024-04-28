<?php

namespace App\View\Components\molecules;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class date_picker_fied extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $label;
    public $class;
    public function __construct($name,$class ,$label)

    {
        $this ->name = $name;
        $this ->label= $label;
        $this ->class= $class;
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.molecules.date_picker_fied',['name'=>$this->name , 'label'=>$this->label,'class'=>$this->class]);
    }
}
