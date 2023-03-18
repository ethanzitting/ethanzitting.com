<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class LinkExternal extends Component
{
    /**
     * Create the component instance.
     */
    public function __construct(
        public string $to,
    ) {}

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('components.links.link-external');
    }
}
