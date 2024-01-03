<?php

namespace Dianagung\Larawinds\View\Components\Button;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Primary extends Component
{
    public $text;
    public $type;
    public function __construct(
        $text = "Save",
        $type = "button"
    )
    {
        $this->text = $text;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('larawinds::components.button.primary');
    }
}
