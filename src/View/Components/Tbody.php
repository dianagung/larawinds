<?php

namespace Dianagung\Larawinds\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Tbody extends Component
{
    public $list;
    public $actionDelete;
    public $actionEdit;
    public $actionUpdate;
    public $preset;
    public $confirmTitle;
    public $confirmText;
    public $confirmYes;
    public $confirmNo;
    public $btextUpdate;
    public $btextEdit;
    public $btextDelete;
    public function __construct(
        $list         = "John Doe,Web Developer",
        $actionDelete = "",
        $actionEdit   = "",
        $actionUpdate = "",
        $preset       = [],
        $confirmTitle = "Are you sure?",
        $confirmText  = "",
        $confirmYes   = "Yes",
        $confirmNo    = "Cancel",
        $btextUpdate  = "Update",
        $btextEdit    = "",
        $btextDelete  = ""
    )
    {
        $this->list         = $list;
        $this->actionDelete = $actionDelete;
        $this->actionEdit   = $actionEdit;
        $this->actionUpdate = $actionUpdate;
        $this->preset       = $preset;
        $this->confirmTitle = $confirmTitle;
        $this->confirmText  = $confirmText;
        $this->confirmYes   = $confirmYes;
        $this->confirmNo    = $confirmNo;
        $this->btextUpdate  = $btextUpdate;
        $this->btextEdit    = $btextEdit;
        $this->btextDelete  = $btextDelete;
    }

    public function dataArray()
    {
        $arr     = explode(",", $this->list);
        $new_arr = array_merge($arr, ['Actions']);
        return $new_arr;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('larawinds::components.tbody');
    }
}
