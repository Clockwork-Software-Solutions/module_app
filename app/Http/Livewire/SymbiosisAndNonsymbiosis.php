<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SymbiosisAndNonsymbiosis extends Component
{
    public function render()
    {
        return view('livewire.symbiosis-and-nonsymbiosis')->layout('layouts.app');
    }

    public function nextTopic(){
      return redirect()->route('parasitism');
    }
}
