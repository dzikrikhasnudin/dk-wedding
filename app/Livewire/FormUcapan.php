<?php

namespace App\Livewire;

use App\Models\Ucapan;
use Livewire\Component;

class FormUcapan extends Component
{
    public $nama;
    public $kehadiran;
    public $ucapan;

    public function render()
    {
        return view('livewire.form-ucapan');
    }

    public function save()
    {

        $this->validate([
            'nama' => 'required|string',
            'kehadiran' => 'required|string',
            'ucapan' => 'required|string'
        ]);

        // dd($this->nama, $this->kehadiran, $this->ucapan);

        $ucapan = Ucapan::create([
            'nama' => $this->nama,
            'kehadiran' => $this->kehadiran,
            'ucapan' => $this->ucapan
        ]);

        $this->dispatch('ucapan-created', $ucapan);

        session()->flash('success', 'Berhasil mengirim ucapan.');
    }
}
