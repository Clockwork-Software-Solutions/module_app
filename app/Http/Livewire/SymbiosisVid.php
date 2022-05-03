<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SymbiosisVid extends Component
{
    public function render()
    {
        return view('livewire.symbiosis-vid')->layout('layouts.app');
    }

    public function proceed()
    {
        return redirect()->route('symbiosis');
    }
}
