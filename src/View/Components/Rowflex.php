<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Rowflex extends Component
{
    public $gap;
    public $valign;
    public $justify;
    public function __construct(
        $gap = "0",
        $valign = "center",
        $justify = "start"
    )
    {
        $this->gap = $gap;
        $this->valign = $valign;
        $this->justify = $justify;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.rowflex');
    }
}
