<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductCardComponent extends Component
{
    /**
     * Create a new component instance.
     */

    public $card;
    public $cardBody;
    public $cardTitle;

    public function __construct($card = 'card', $cardBody = 'card-body', $cardTitle = 'Filter')
    {
        $this->card = $card;
        $this->cardBody = $cardBody;
        $this->cardTitle = $cardTitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-card-component');
    }
}
