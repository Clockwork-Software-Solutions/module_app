<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Start extends Component
{
    public function render()
    {
        return view('livewire.start')->layout('layouts.app');
    }

    
    public function mainOptions(){
        return redirect()->route('main');
    }
}
