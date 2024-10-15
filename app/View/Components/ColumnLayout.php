<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ColumnLayout extends Component
{
    /**
     * Create a new component instance.
     */

     public $class;

    public function __construct($class = 'col-12 col-md-6 d-flex align-items-center justify-content-center')
    {
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.column-layout');
    }
}
