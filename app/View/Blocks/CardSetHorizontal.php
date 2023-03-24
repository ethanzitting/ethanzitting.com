<?php

namespace App\View\Blocks;

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
        public string $sectionAnchor,
    ) {}

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('blocks.card-set-horizontal');
    }
}
