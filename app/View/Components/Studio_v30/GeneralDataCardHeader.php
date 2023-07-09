<?php

namespace App\View\Components\studio_v30;

use Illuminate\View\Component;

class GeneralDataCardHeader extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $panel_name;  
    public $content;  

    public function __construct($panel_name, $content)
    {
        //
        $this->panel_name = $panel_name; 
        $this->content = $content; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.studio_v30.general-data-card-header');
    }
}
