<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SecondActivity extends Component
{
    public function render()
    {
        return view('livewire.second-activity')->layout('layouts.app');
    }

    public function topic3(){
        return redirect()->route('foodchain3');
    }
}
