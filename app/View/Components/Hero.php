<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Hero extends Component
{
    /**
     * Create the component instance.
     */
    public function __construct(
        public string $imgSrc,
        public string $imgAlt,
        public string $imageCaption,
        public string $title,
    ) {}

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('blocks.hero');
    }
}
