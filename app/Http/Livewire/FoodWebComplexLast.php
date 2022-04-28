<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FoodWebComplexLast extends Component
{
    public function render()
    {
        return view('livewire.food-web-complex-last')->layout('layouts.app');
    }

    public function backToMain()
    {
        return redirect()->route('main');
    }
}
