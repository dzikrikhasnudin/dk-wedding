<?php

namespace App\Livewire;

use App\Models\Guest;
use Livewire\Component;

class GuestList extends Component
{
    public $copyLabel = 'Salin Tautan';

    public function render()
    {
        $guests = Guest::all()->sortBy('nama');
        return view('livewire.guest-list', compact('guests'));
    }

    public function changeLabel($id)
    {
        $this->copyLabel = 'Tautan disalin';
    }
}
