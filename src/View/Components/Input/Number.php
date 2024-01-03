<?php

namespace Dianagung\Larawinds\View\Components\Input;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Number extends Component
{
    public $name;
    public $placeholder;
    public $label;
    public $value;
    public $prefix;
    public $suffix;
    public $maxlength;
    public function __construct(
        $name        = "",
        $placeholder = "149000",
        $label       = "",
        $value       = "",
        $prefix      = "",
        $suffix      = "",
        $maxlength   = "18"
    )
    {
        $this->name        = $name;
        $this->placeholder = $placeholder;
        $this->label       = $label;
        $this->value       = $value;
        $this->prefix      = $prefix;
        $this->suffix      = $suffix;
        $this->maxlength   = $maxlength;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('larawinds::components.input.number');
    }
}
