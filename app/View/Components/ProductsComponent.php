<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductsComponent extends Component
{
    /**
     * Create a new component instance.
     */

    public $section;
    public $id;
    public $class;
    
    public function __construct($section, $id, $class)
    {
        $this->section = $section;
        $this->id = $id;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.products-component');
    }
}