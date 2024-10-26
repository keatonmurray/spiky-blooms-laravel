<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FeaturedProductsComponent extends Component
{
    /**
     * Create a new component instance.
     */

    public $section;
    public $id;
    public $class;
    public $products;

    public function __construct($section, $id, $class, $products)
    {
        $this->section = $section;
        $this->id = $id;
        $this->class = $class;
        $this->products = $products;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.featured-products-component');
    }
}
