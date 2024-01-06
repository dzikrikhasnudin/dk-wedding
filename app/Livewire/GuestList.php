<?php

namespace App\Livewire;

use App\Models\Guest;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class GuestList extends Component
{
    use WithPagination;
    #[Url(as: 'nama')]
    public $search;

    public function render()
    {

        if ($this->search == null) {
            $guests = Guest::latest();
        } else {
            $guests = Guest::where('nama', 'like', '%' . $this->search . '%');
        }

        return view('livewire.guest-list', [
            'guests' => $guests->paginate(15)
        ]);
    }

    #[On('guest-created')]
    public function updateList()
    {
        session()->flash('success', 'Tamu undangan telah ditambahkan.');
    }

    public function destroy($id)
    {
        $guest = Guest::find($id);
        $guest->delete();
    }
}
