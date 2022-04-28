<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BacteriaAndAnimals extends Component
{
    public function render()
    {
        return view('livewire.bacteria-and-animals')->layout('layouts.app');
    }

    public function next(){
        return redirect()->route('main');
    }
}
