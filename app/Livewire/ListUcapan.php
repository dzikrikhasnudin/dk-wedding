<?php

namespace App\Livewire;

use App\Models\Ucapan;
use Livewire\Attributes\On;
use Livewire\Component;

class ListUcapan extends Component
{
    public function render()
    {
        $ucapan = Ucapan::latest()->get();

        return view('livewire.list-ucapan', compact('ucapan'));
    }

    #[On('ucapan-created')]
    public function updateListUcapan($ucapan)
    {
        // ...
    }
}
