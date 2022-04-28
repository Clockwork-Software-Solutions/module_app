<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Parasitism extends Component
{
    public function render()
    {
        return view('livewire.parasitism')->layout('layouts.app');
    }

    public function next(){
        return redirect()->route('commensalism');
    }
}
