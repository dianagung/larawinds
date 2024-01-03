<?php

namespace Dianagung\Larawinds\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Dropdown extends Component
{
    public $text;
    public $name;
    public $label;
    public $collect;
    public $key;
    public function __construct(
        $text = "Choose Option",
        $name = "",
        $label = "",
        $collect = [],
        $key = ""
    )
    {
        $this->text = $text;
        $this->name = $name;
        $this->label = $label;
        $this->collect = $collect;
        $this->key = $key;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('larawinds::components.dropdown');
    }
}
