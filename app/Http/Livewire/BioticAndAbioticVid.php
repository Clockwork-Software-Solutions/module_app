<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BioticAndAbioticVid extends Component
{
    public function render()
    {
        return view('livewire.biotic-and-abiotic-vid')->layout('layouts.app');
    }

    public function proceed()
    {
        return redirect()->route('bioticLast');
    }
}
