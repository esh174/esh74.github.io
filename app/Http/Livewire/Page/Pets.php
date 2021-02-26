<?php

namespace App\Http\Livewire\Page;

use App\Models\Pet;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Pets extends Component
{
    public Collection $pets;

    public function mount() {
        $this->pets = Pet::all();
    }

    public function render()
    {
        return view('livewire.page.pets');
    }
}
