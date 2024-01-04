<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\Attributes\Layout;

class UndanganApp extends Component
{
    #[Layout('layouts.guest')]

    public $guest;

    public function render()
    {
        return view('livewire.undangan-app');
    }
}
