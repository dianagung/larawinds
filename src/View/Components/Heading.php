<?php

namespace Dianagung\Larawinds\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Heading extends Component
{
    public $text;
    public $for;
    public $subtext;
    public function __construct(
        $text,
        $for = '',
        $subtext = ''
    )
    {
        $this->text = $text;
        $this->for = $for;
        $this->subtext = $subtext;
    }

    public function render(): View|Closure|string
    {
        return view('larawinds::components.heading');
    }
}
