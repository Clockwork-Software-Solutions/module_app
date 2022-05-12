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
        return redirect()->route('foodchain_vid');
    }

    public function topic2(){
        return redirect()->route('symbiosis_vid');
    }

    
    public function topic3(){
        return redirect()->route('biotic_vid');
    }

    public function topic4(){
        return redirect()->route('bacteria_vid');
    }

    public function topic5(){
        return redirect()->route('photosynthesis_vid');
    }

    public function topic6(){
        return redirect()->route('oxygen_vid');
    }
}
