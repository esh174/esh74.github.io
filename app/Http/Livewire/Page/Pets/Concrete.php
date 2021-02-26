<?php

namespace App\Http\Livewire\Page\Pets;

use App\Models\Pet;
use Livewire\Component;

class Concrete extends Component
{
    public Pet $pet;

    public function render()
    {
        return view('livewire.page.pets.concrete');
    }
}
