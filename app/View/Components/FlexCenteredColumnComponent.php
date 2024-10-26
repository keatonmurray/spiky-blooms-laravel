<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FlexCenteredColumnComponent extends Component
{
    /**
     * Create a new component instance.
     */

    public $id;
    public $flexCentered;
    public $additionalClass;
     
    public function __construct(
        $id = '', 
        $flexCentered = '', 
        $additionalClass = '')
    {
        $this->id = $id;
        $this->flexCentered = $flexCentered;
        $this->additionalClass = $additionalClass;
    } 
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.flex-centered-column-component');
    }
}
