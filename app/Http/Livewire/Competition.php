<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Competition extends Component
{
    public function render()
    {
        return view('livewire.competition')->layout('layouts.app');
    }

    public function next(){
        return redirect()->route('lastcompetition');
    }
}
