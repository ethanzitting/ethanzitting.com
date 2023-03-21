<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class CardSetHorizontal extends Component
{
    /**
     * Create the component instance.
     */
    public function __construct(
        public string $title,
        public array $cardData,
    ) {}

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('modules.card-set-horizontal');
    }
}
