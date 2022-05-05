<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LastActivityNew extends Component
{
    public function render()
    {
        return view('livewire.last-activity-new')->layout('layouts.app');
    }

    public function topic4()
    {
       return redirect()->route('foodchain8');
    }
}
