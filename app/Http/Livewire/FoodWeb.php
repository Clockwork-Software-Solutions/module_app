<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FoodWeb extends Component
{
    public function render()
    {
        return view('livewire.food-web')->layout('layouts.app');
    }

    public function foodweb2()
    {
        return redirect()->route('foodweb2');
    }
}
