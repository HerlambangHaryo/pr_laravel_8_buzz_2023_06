<?php

namespace App\View\Components\Message;

use Illuminate\View\Component;

class TrNoRecordData extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $col;

    public function __construct($col)
    {
        //
        $this->col = $col;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.message.tr-no-record-data');
    }
}
