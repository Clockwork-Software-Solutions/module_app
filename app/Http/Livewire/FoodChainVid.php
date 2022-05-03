<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FoodChainVid extends Component
{
    public function render()
    {
        return view('livewire.food-chain-vid')->layout('layouts.app');
    }

    public function proceed()
    {
        return redirect()->route('foodchain');
    }
}
