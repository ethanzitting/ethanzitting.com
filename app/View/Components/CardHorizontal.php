<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class CardHorizontal extends Component
{
    /**
     * Create the component instance.
     */
    public function __construct(
        public string $title,
        public string $subtitle,
        public array $image,
        public array $list,
    ) {}

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('components.card-horizontal');
    }
}
