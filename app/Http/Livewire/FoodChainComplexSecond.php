<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FoodChainComplexSecond extends Component
{
    public function render()
    {
        return view('livewire.food-chain-complex-second')->layout('layouts.app');
    }

    public function topic6()
    {
       return redirect()->route('foodchain8');
    }
}
