<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FoodWebSecond extends Component
{
    public function render()
    {
        return view('livewire.food-web-second')->layout('layouts.app');
    }

    public function foodweb3()
    {
        return redirect()->route('foodweb3');
    }
}
