<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HomeComponent extends Component
{
    /**
     * Create a new component instance.
     */

    public $section;
    public $title;
    public $subtitle;
    
    public function __construct($section, $title, $subtitle)
    {
        $this->section = $section;
        $this->title = $title;
        $this->subtitle = $subtitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home-component');
    }
}
