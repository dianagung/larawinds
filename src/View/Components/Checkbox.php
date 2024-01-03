<?php

namespace Dianagung\Larawinds\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Checkbox extends Component
{
    public $name;
    public $title;
    public $text;
    public $checked;
    public function __construct(
        $name  = "",
        $title = "Submit this form?",
        $text  = "You can update this form letter.",
        $checked = ""
    )
    {
        $this->name    = $name;
        $this->title   = $title;
        $this->text    = $text;
        $this->checked = $checked;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('larawinds::components.checkbox');
    }
}
