<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CompetitionLast extends Component
{
    public function render()
    {
        return view('livewire.competition-last')->layout('layouts.app');
    }

    public function next()
    {
        return redirect()->route('main');
    }
}
