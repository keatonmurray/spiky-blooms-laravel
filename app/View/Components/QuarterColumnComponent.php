<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class QuarterColumnComponent extends Component
{
    /**
     * Create a new component instance.
     */

    public $class;

    public function __construct($class = 'col-12 col-md-3')
    {
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.quarter-column-component');
    }
}
