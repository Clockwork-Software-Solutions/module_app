<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Mutualism extends Component
{
    public function render()
    {
        return view('livewire.mutualism')->layout('layouts.app');
    }

    public function next()
    {
        return redirect()->route('competition');
    }
}
