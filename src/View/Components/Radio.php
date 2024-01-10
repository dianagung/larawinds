<?php

namespace Dianagung\Larawinds\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Radio extends Component
{
    public $value;
    public $title;
    public $text;
    public $name;
    public $key;
    public function __construct(
        $value = [],
        $title = [],
        $text  = [],
        $name  = "radio",
        $key   = ""
    )
    {
        $this->value = $value;
        $this->title = $title;
        $this->text  = $text;
        $this->name  = $name;
        $this->key   = $key;
    }

    public function dataArray()
    {
        $radio_title = explode(",", $this->title);
        $radio_text = explode(",", $this->text);
        $radio_value = explode(",", $this->value);
        foreach($radio_title as $k => $v) {
            $new[] = trim($v) . '|' . trim($radio_text[$k]) . '|' . trim($radio_value[$k]);
        }
        return $new;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('larawinds::components.radio');
    }
}
