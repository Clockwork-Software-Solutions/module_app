<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FoodChainComplexThird extends Component
{
    public function render()
    {
        return view('livewire.food-chain-complex-third')->layout('layouts.app');
    }

    public function topic7()
    {
        return redirect()->route('foodweb');
    }
}
