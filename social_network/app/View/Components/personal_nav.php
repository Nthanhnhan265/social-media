<?php

namespace App\View\Components;

use Illuminate\View\Component;

class personal_nav extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $user; 
    public $friend; 
    public function __construct($user,$friend)
    {
        $this->user = $user; 
        $this->friend = $friend; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.personal_nav');
    }
}
