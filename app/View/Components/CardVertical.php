<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class CardVertical extends Component
{
    /**
     * Create the component instance.
     */
    public function __construct(
        public string $title,
        public string $iconSrc,
        public string $details,
    ) {}

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('components.card-vertical');
    }
}
