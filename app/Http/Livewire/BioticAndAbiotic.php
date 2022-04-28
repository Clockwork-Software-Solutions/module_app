<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BioticAndAbiotic extends Component
{
    public function render()
    {
        return view('livewire.biotic-and-abiotic')->layout('layouts.app');
    }

    public function next()
    {
        return redirect()->route('main');
    }
}
