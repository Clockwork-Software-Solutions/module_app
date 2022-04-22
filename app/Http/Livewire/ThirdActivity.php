<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ThirdActivity extends Component
{
    public function render()
    {
        return view('livewire.third-activity')->layout('layouts.app');
    }

    
    public function topic4(){
        return redirect()->route('foodchain4');
    }
}
