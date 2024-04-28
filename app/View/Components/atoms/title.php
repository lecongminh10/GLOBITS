<?php

namespace App\View\Components\atoms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Title extends Component
{
    public $title;
    public $class; // Thêm thuộc tính class

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $class)
    {
        $this->title = $title;
        $this->class = $class; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.atoms.title', [
            'title' => $this->title,
            'class' => $this->class, 
        ]);
    }
}
