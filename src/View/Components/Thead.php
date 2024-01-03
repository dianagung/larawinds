<?php

namespace Dianagung\Larawinds\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Thead extends Component
{
    public $list;
    public function __construct(
        $list = "name,description"
    )
    {
        $this->list = $list;
    }

    public function dataArray()
    {
        $arr = explode(",", $this->list);
        $new_arr = array_merge($arr, ['Actions']);
        return $new_arr;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('larawinds::components.thead');
    }
}
