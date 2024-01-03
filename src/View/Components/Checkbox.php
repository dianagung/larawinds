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
    public function __construct(
        $name  = "",
        $title = "Submit this form?",
        $text  = "You can update this form letter."
    )
    {
        $this->name  = $name;
        $this->title = $title;
        $this->text  = $text;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('larawinds::components.checkbox');
    }
}
