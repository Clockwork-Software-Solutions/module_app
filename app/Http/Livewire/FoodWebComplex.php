<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FoodWebComplex extends Component
{
    public function render()
    {
        return view('livewire.food-web-complex')->layout('layouts.app');
    }

    public function foodweb4()
    {

        return redirect()->route('foodweb4');
    }

}
