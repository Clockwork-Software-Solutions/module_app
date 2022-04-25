<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FoodChainComplex extends Component
{
    public function render()
    {
        return view('livewire.food-chain-complex');
    }

    public function topic5()
    {
       return redirect()->route('foodchain7');
    }
}
