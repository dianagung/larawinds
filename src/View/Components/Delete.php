<?php

namespace Dianagung\Larawinds\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Delete extends Component
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
        $confirmTitle = "Are you sure want to delete?",
        $confirmText = "This action can not be undo",
        $confirmYes = "Yes, delete it",
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
        return view('larawinds::components.delete');
    }
}
