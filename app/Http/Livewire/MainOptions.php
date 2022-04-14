<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MainOptions extends Component
{
    public function render()
    {
        //return view('livewire.main-options', ['title' => 'Show Posts'])->layout('layouts.app');
        return view('livewire.main-options')->layout('layouts.app');
    }

    public function topic1(){
        return redirect()->route('foodchain');
    }
}
