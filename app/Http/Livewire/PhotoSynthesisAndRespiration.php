<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PhotoSynthesisAndRespiration extends Component
{
    public function render()
    {
        return view('livewire.photo-synthesis-and-respiration')->layout('layouts.app');
    }

    public function finish()
    {
        return redirect()->route('main');
    } 
}
