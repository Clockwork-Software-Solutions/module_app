<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OxygenVid extends Component
{
    public function render()
    {
        return view('livewire.oxygen-vid')->layout('layouts.app');
    }

    public function proceed()
    {
        return redirect()->route('oxygen');
    }
}
