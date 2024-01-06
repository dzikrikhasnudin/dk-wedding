<?php

namespace App\Livewire;

use App\Models\Ucapan;
use Livewire\Attributes\Layout;
use Livewire\Component;

class BukuTamu extends Component
{
    #[Layout('layouts.app')]

    public $filter;

    public function render()
    {

        if ($this->filter == null) {
            $listUcapan = Ucapan::latest()->get();
        } else {
            $listUcapan = Ucapan::where('kehadiran', $this->filter)->get();
        }

        return view('livewire.buku-tamu', compact('listUcapan'));
    }
}
