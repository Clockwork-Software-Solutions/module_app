<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FoodChain extends Component
{
    public function render()
    {
        return view('livewire.food-chain')->layout('layouts.app');
    }

    public function topic2(){
        return redirect()->route('foodchain2');
    }
}
