<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WhyCard extends Component
{
   public $img;
    public $title;
    public $desc;

    /**
     * Create a new component instance.
     */
    public function __construct($img, $title, $desc)
    {
        $this->img = $img;
        $this->title = $title;
        $this->desc = $desc;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.why-card');
    }
}
