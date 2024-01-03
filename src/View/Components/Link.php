<?php

namespace Dianagung\Larawinds\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Link extends Component
{
    public $to;
    public $text;
    public $type;
    public function __construct(
        $to = "",
        $text = "Anchor text",
        $type = ""
    )
    {
        $this->to = $to;
        $this->text = $text;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('larawinds::components.link');
    }
}
