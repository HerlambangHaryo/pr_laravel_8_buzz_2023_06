<?php

namespace App\View\Components\Studio_v30;

use Illuminate\View\Component;

class ADropdownItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $link;
    public $icon;
    public $title;
    
    public function __construct($link, $icon, $title)
    {
        //
        $this->link = $link;
        $this->icon = $icon;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.studio_v30.a-dropdown-item');
    }
}
