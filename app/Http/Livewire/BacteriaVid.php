<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BacteriaVid extends Component
{
    public function render()
    {
        return view('livewire.bacteria-vid')->layout('layouts.app');
    }

    public function proceed()
    {
        return redirect()->route('bacteria');
    }
}
