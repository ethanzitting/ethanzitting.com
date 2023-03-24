<?php

namespace App\View\Blocks;

use Illuminate\View\Component;
use Illuminate\View\View;

class CallToAction extends Component
{
    /**
     * Create the component instance.
     */
    public function __construct(
        public string $message,
    ) {}

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('blocks.call-to-action');
    }
}
