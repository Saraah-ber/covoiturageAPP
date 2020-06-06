<?php

namespace App\View\Components;

use Illuminate\View\Component;

class fetchAllAnnoncesTrajets extends Component
{
    public $trajet;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($trajet)
    {
        $this->trajet = $trajet;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.fetch-all-annonces-trajets');
    }
}
