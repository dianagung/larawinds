<?php

namespace Dianagung\Larawinds\View\Components\Upload;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Image extends Component
{
    public $name;
    public $label;
    public $accept;
    public $maxsize;
    public function __construct(
        $name = '',
        $label = '',
        $accept = 'jpg,png',
        $maxsize = null
    )
    {
        $this->name = $name;
        $this->label = $label;
        $this->accept = $accept;
        $this->maxsize = $maxsize;
    }

    public function formatFileAccept() {
        $arr = explode(",", $this->accept);
        $format = preg_filter('/^/', 'image/', $arr);
        $str = join(",", $format);
        return $str;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('larawinds::components.upload.image');
    }
}
