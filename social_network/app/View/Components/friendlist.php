<?php

namespace App\View\Components;

use Illuminate\View\Component;

class friendlist extends Component
{
    protected $friend;  
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($friend)
    {
        $this->friend = $friend; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.friendlist',["friend"=>$this->friend]);
    }
}
