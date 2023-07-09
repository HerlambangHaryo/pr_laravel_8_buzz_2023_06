<?php

namespace App\View\Components\Studio_v30;

use Illuminate\View\Component;

class BadgeFixtureStatus extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $link; 
    public $nama; 

    public function __construct($link, $nama)
    {
        //
        $this->link = $link;
        $this->nama = $nama; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.studio_v30.badge-fixture-status');
    }
}
