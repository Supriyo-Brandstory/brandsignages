<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TestimonialCard extends Component
{
       public $img;
    public $name;
    public $role;
    public $text;

    public function __construct($img, $name, $role, $text)
    {
        $this->img = $img;
        $this->name = $name;
        $this->role = $role;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.testimonial-card');
    }
}
