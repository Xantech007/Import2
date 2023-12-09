<?php

namespace App\Livewire;

use Livewire\Component;

class Theme extends Component
{
    public function switch()
    {
        if(session('dark-mode') == 'light-mode'){
            session()->put('dark-mode', 'dark-mode');
        } else {
            session()->put('dark-mode', 'light-mode');
        }
    }

    public function render()
    {
        return view('livewire.theme');
    }
}
