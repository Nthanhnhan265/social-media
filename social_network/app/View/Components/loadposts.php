<?php

namespace App\View\Components;

use Illuminate\View\Component;

class loadposts extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $posts; 
    public $user;
    public function __construct($posts,$user )
    {
        $this->posts = $posts;
        $this->user = $user;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.loadposts');
    }
}
