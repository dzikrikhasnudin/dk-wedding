<?php

namespace App\Livewire;

use App\Models\Guest;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use LivewireUI\Modal\ModalComponent;

class CreateGuest extends ModalComponent
{
    #[Validate('required', as: 'Nama')]
    public $name;

    public function render()
    {
        return view('livewire.create-guest');
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|min:3|unique:guests,nama'
        ]);

        $guest = Guest::create([
            'nama' => $this->name,
            'slug' => Str::slug($this->name)
        ]);

        $this->dispatch('guest-created', $guest);

        $this->dispatch('closeModal');
    }
}
