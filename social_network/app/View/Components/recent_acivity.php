<?php

namespace App\View\Components;

use Illuminate\View\Component;

class recent_acivity extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $postActivityHistors;
    public $commentsActivityHistorys;
    public $shareActivityHistorys;

   public function __construct($postActivityHistors, $commentsActivityHistorys, $shareActivityHistorys)
    {
        $this->postActivityHistors = $postActivityHistors;
        $this->commentsActivityHistorys = $commentsActivityHistorys;
        $this->shareActivityHistorys = $shareActivityHistorys;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.recent_acivity');
    }
}
