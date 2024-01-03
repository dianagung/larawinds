<?php

namespace Dianagung\Larawinds\View\Components\Input;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Text extends Component
{
    public $placeholder;
    public $value;
    public $name;
    public $label;
    public $required;
    public $hint;
    public function __construct(
        $placeholder = "",
        $value       = "",
        $name        = "",
        $label       = "",
        $required    = false,
        $hint        = ""
    )
    {
        $this->placeholder = $placeholder;
        $this->value       = $value;
        $this->name        = $name;
        $this->label       = $label;
        $this->required    = $required;
        $this->hint        = $hint;
    }


    public function render(): View|Closure|string
    {
        return view('larawinds::components.input.text');
    }
}
