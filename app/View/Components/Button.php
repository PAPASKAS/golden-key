<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Button extends Component
{
    public string $type;
    public bool $outline;

    public function __construct(string $type, bool $outline)
    {
        $this->type = $type;
        $this->outline = $outline;
    }

    public function render(): View
    {
        return view('components.button');
    }
}
