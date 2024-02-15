<?php

namespace App\Livewire;

use Livewire\Component;

class Preguntasfrecuentes extends Component
{
    public function render()
    {
        return view('livewire.preguntasfrecuentes')
        ->layout('layouts.plantilla');
    }
}
