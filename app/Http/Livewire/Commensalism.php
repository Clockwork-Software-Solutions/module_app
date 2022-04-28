<?php

namespace App\Http\Livewire;

use Livewire\Component;
use PDO;

class Commensalism extends Component
{
    public function render()
    {
        return view('livewire.commensalism')->layout('layouts.app');
    }

    public function next(){
        return redirect()->route('mutualism');
    }
}
