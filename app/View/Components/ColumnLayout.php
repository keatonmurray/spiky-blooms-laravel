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

    public $gridClass;
    public $additionalClass;

    public function __construct($gridClass = 'col-12 col-md-6 d-flex', $additionalClass = '')
    {
        $this->gridClass = $gridClass;
        $this->additionalClass = $additionalClass;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.column-layout');
    }
}
