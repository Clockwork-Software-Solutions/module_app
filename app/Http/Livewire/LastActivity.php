<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LastActivity extends Component
{
    public function render()
    {
        return view('livewire.last-activity')->layout('layouts.app');
    }

    public function topic4()
    {
        //redirect to the next topic
        return redirect()->route('foodchain5');
    }
}
