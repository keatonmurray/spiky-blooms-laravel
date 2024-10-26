<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AboutComponent extends Component
{
    /**
     * Create a new component instance.
     */

    public $section;
    public $class;

    public function __construct($section, $class)
    {
        $this->section = $section;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.about-component');
    }
}
