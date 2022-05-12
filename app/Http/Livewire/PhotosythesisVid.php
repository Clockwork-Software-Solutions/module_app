<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PhotosythesisVid extends Component
{
    public function render()
    {
        return view('livewire.photosythesis-vid')->layout('layouts.app');
    }

    public function proceed()
    {
        return redirect()->route('photosynthesis');
    }
}
