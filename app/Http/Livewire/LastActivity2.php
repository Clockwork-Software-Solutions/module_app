<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LastActivity2 extends Component
{
    public function render()
    {
        return view('livewire.last-activity2')->layout('layouts.app');
    }

    public function topic4()
    {
        //redirect to the topic
        return redirect()->route('foodchain6');
    }
}
