<?php

namespace App\View\Components;

use Illuminate\View\Component;

class comment extends Component
{
    public $commenter; 
    public $isHidden;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($commenter,$isHidden)
    {
        $this->commenter = $commenter;
        $this->isHidden = $isHidden; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.comment');
    }
}
