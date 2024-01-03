<?php

namespace Dianagung\Larawinds\View\Components\Input;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Textarea extends Component
{
    public $label;
    public $placeholder;
    public $name;
    public $value;
    public function __construct(
        $label = '',
        $placeholder = '',
        $name = '',
        $value = ''
    )
    {
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('larawinds::components.input.textarea');
    }
}
