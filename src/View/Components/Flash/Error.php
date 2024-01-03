<?php

namespace Dianagung\Larawinds\View\Components\Flash;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Error extends Component
{
    public $text;
    public function __construct(
        $text = 'Oops! An error occured.'
    )
    {
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('larawinds::components.flash.error');
    }
}
