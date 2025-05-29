<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StatsCounter extends Component
{
     public $title;
    public $items;

    public function __construct($title = null, $items = [])
    {
        $this->title = $title;
        $this->items = $items;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.stats-counter');
    }
}
