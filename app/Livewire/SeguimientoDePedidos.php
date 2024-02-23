<?php

namespace App\Livewire;
use App\Models\Compra;
use Livewire\Component;
use Livewire\WithPagination;

class SeguimientoDePedidos extends Component
{
    public $open = false;
    use WithPagination;

    public function render()
    {
        $compras = Compra::paginate(6);
        return view('livewire.seguimiento-de-pedidos', [
            'compras' => $compras 
        ]);
    }
}
