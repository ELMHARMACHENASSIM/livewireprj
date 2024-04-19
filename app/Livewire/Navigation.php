<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {
        return view('livewire.pages.navigation',);
    }
}
