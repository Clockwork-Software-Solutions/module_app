<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OxygenCarbonDioxideCycle extends Component
{
    public function render()
    {
        return view('livewire.oxygen-carbon-dioxide-cycle')->layout('layouts.app');
    }

    public function finish()
    {
        return redirect()->route('main');
    }
}
