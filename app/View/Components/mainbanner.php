<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class mainbanner extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $para;
    public $imgs;
    public function __construct($name='', $para='', $imgs='')
    {
        $this->name = $name;
        $this->para = $para;
        $this->imgs = $imgs;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.mainbanner');
    }
}
