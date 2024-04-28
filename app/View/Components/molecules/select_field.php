<?php

namespace App\View\Components\molecules;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class select_field extends Component
{
    /**
     * Create a new component instance.
     */
    public $options;
    public $multiple;

    /**
     * Create a new component instance.
     *
     * @param  array  $options
     * @param  bool  $multiple
     * @return void
     */
    public function __construct($options, $multiple = false)
    {
        $this->options = $options;
        $this->multiple = $multiple;
    }

    public function render(): View|Closure|string
    {
        return view('components.molecules.select_field');
    }
}
