<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Photosynthesis extends Component
{
    public function render()
    {
        return view('livewire.photosynthesis')->layout('layouts.app');
    }

    public function next()
    {
        return redirect()->route('respiration');
    }
}
