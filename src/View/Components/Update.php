<?php

namespace Dianagung\Larawinds\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Update extends Component
{
    public $action;
    public $text;
    public $confirmTitle;
    public $confirmText;
    public $confirmYes;
    public $confirmNo;
    public function __construct(
        $action = "",
        $text = "",
        $confirmTitle = "Are you sure want to update?",
        $confirmText = "",
        $confirmYes = "Yes, update it",
        $confirmNo = "Cancel"
    )
    {
        $this->action = $action;
        $this->text = $text;
        $this->confirmTitle = $confirmTitle;
        $this->confirmText = $confirmText;
        $this->confirmYes = $confirmYes;
        $this->confirmNo = $confirmNo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('larawinds::components.update');
    }
}
