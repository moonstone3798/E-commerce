<?php

namespace App\Livewire;

use Livewire\Component;

class SeguimientoDePedidos extends Component
{
    public $open = false;
    public function render()
    {
        return view('livewire.seguimiento-de-pedidos');
    }
}
