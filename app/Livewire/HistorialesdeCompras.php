<?php

namespace App\Livewire;
use App\Models\Compra;
use Livewire\Component;

use Livewire\WithPagination;

class HistorialesdeCompras extends Component
{
    public $open = false;
    public  $factura , $id , $estado, $fecha ;
    public $buscar;
    public $sortColumnName = 'id';
    public $sortDirection= 'desc';
    use WithPagination;

    public function sortBy($columnName)
    {
        if ($this->sortColumnName === $columnName) {
            $this->sortDirection = $this->swapSortDirection();
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortColumnName = $columnName;
    }

    public function swapSortDirection()
    {
        return $this->sortDirection === 'asc' ? 'desc' : 'asc';
    }
    public function render()
    {
        $buscar='%'. $this->buscar . '%';
        $compras = Compra::where( 'id' ,'LIKE' , $buscar)
        ->orwhere( 'estado' ,'LIKE' , $buscar)
        ->orderBy($this->sortColumnName, $this->sortDirection)
        ->paginate(6);
        return view('livewire.historiales-de-compras'
        , [
            'compras' => $compras 
        ]);
    }
}
