<?php

namespace Dianagung\Larawinds\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class App extends Component
{
    public $title;
    public $metaTitle;
    public $metaDescription;
    public function __construct(
        $title = null,
        $metaTitle = null,
        $metaDescription = null
    )
    {
        $this->title = $title ?? config('app.name');
        $this->metaTitle = $metaTitle ?? config('app.name');
        $this->metaDescription = $metaDescription;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('larawinds::layouts.app');
    }
}
