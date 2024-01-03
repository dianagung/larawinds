<?php

namespace Dianagung\Larawinds\View\Components\Card;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Form extends Component
{
    public $title;
    public $action;
    public $btext;
    public $method;
    public function __construct(
        $title = "Card Title",
        $action = "",
        $btext = "Save",
        $method = "POST"
    )
    {
        $this->title = $title;
        $this->action = $action;
        $this->btext = $btext;
        $this->method = $method;
    }

    public function methodTitle()
    {
        switch($this->method) {
            case 'POST':
                $title = "";
                break;
            case 'PUT':
                $title = ": update";
                break;
            case 'DELETE':
                $title = ": delete";
                break;
            default:
                $title = "";
                break;
        }
        return $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('larawinds::components.card.form');
    }
}
