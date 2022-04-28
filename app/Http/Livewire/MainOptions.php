<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MainOptions extends Component
{
    public function render()
    {
        //return view('livewire.main-options', ['title' => 'Show Posts'])->layout('layouts.app');
        return view('livewire.main-options')->layout('layouts.app');
    }

    public function topic1(){
        return redirect()->route('foodchain');
    }

    public function topic2(){
        return redirect()->route('symbiosis');
    }

    
    public function topic3(){
        return redirect()->route('biotic');
    }

    public function topic4(){
        return redirect()->route('bacteria');
    }
}
