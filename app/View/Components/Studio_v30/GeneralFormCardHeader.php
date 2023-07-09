<?php

namespace App\View\Components\studio_v30;

use Illuminate\View\Component;

class GeneralFormCardHeader extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $view;  
    public $panel;  

    public function __construct($view, $panel)
    {
        //
        $this->view = $view; 
        $this->panel = $panel; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.studio_v30.general-form-card-header');
    }
}
