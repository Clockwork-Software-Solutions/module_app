<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BioticAndAbioticLast extends Component
{
    public function render()
    {
        return view('livewire.biotic-and-abiotic-last')->layout('layouts.app');
    }

    public function next(){
        return redirect()->route('main');
    }
}
