<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductFilterComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public $heading;
    public $id;
    public $formCheckWrapper;
    public $checkboxValues;

    public function __construct(
        $heading, 
        $id, 
        $formCheckWrapper = 'form-check', 
        array $checkboxValues = []
    ) {
        $this->heading = $heading;
        $this->id = $id;
        $this->formCheckWrapper = $formCheckWrapper;
        $this->checkboxValues = $checkboxValues;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-filter-component');
    }
}
