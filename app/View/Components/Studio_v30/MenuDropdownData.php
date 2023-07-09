<?php

namespace App\View\Components\Studio_v30;

use Illuminate\View\Component;

class MenuDropdownData extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $content; 
    public $id; 

    public function __construct($content, $id)
    {
        //
        $this->content = $content;
        $this->id = $id; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.studio_v30.menu-dropdown-data');
    }
}
