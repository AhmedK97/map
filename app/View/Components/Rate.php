<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Rate extends Component
{
    public $total;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($total)
    {
        $this->total = $total;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.rate');
    }
}
