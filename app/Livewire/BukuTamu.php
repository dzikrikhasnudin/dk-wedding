<?php

namespace App\Livewire;

use App\Models\Ucapan;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

class BukuTamu extends Component
{
    #[Layout('layouts.app')]

    public $filter;
    public $hadir;
    public $tidakHadir;
    public $belumPasti;

    public function mount()
    {
        $this->hadir = Ucapan::where('kehadiran', 'Hadir')->count();
        $this->tidakHadir = Ucapan::where('kehadiran', 'Tidak Hadir')->count();
        $this->belumPasti = Ucapan::where('kehadiran', 'Belum Pasti')->count();
    }

    public function render()
    {

        if ($this->filter == null) {
            $listUcapan = Ucapan::latest()->get();
        } else {
            $listUcapan = Ucapan::where('kehadiran', $this->filter)->get();
        }

        return view('livewire.buku-tamu', compact('listUcapan'));
    }

    public function destroy($id)
    {
        $ucapan = Ucapan::find($id);
        $ucapan->delete();

        $this->dispatch('ucapan-deleted', $ucapan);
    }

    #[On('ucapan-deleted')]
    public function updateCounter($ucapan)
    {
        $this->hadir = Ucapan::where('kehadiran', 'Hadir')->count();
        $this->tidakHadir = Ucapan::where('kehadiran', 'Tidak Hadir')->count();
        $this->belumPasti = Ucapan::where('kehadiran', 'Belum Pasti')->count();
    }
}
