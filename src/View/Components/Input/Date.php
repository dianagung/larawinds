<?php

namespace Dianagung\Larawinds\View\Components\Input;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Date extends Component
{
    public $name;
    public $placeholder;
    public $label;
    public $value;
    public function __construct(
        $name = "",
        $placeholder = "mm/dd/yyyy",
        $label = "",
        $value = ""
    )
    {
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->label = $label;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('larawinds::components.input.date');
    }
}
