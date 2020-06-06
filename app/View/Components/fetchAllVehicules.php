<?php

namespace App\View\Components;

use Illuminate\View\Component;

class fetchAllVehicules extends Component
{
    public $vehicule;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($vehicule)
    {
        $this->vehicule = $vehicule;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
    */
    public function render()
    {
        return view('components.fetch-all-vehicules');
    }
}
