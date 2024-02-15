<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Stock;
use App\Models\Producto;
class Stocks extends Component
{
    public  $cantidad, $talle, $idProducto, $id, $nombre, $color;
    public $modal = false;
    public $buscar;
    public $sortColumnName = 'id';
    public $sortDirection= 'desc';

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
        $buscar='%'.$this->buscar . '%';
        $stocks = Stock::with('relProducto')
        ->where('cantidad', 'LIKE', $buscar)
        ->orwhere('talle', 'LIKE' , $buscar)
        ->orwhere('idProducto', 'LIKE' , $buscar)
        ->orwhere('color', 'LIKE' , $buscar)
        ->orderBy($this->sortColumnName, $this->sortDirection)
        ->paginate(8);
        $productos = Producto::all();
        return view('livewire.stocks' ,
        [ 'stocks'=>$stocks ,
        'productos'=>$productos
    ]);
    }

    public function agregarStock(){
        $this->limpiarCampos();
        $this->abrirModal();

        
    }
    public function abrirModal(){
        $this->modal = true;
    }
    public function cerrarModal(){
        $this->modal = false;
    }
    public function limpiarCampos(){
        $this->talle='';
        $this->cantidad=''; 
        $this->idProducto='';   
        $this->color='';  }

    public function modificarStock($id)
    {
        $stock = Stock::findOrFail($id);
        $this->talle = $stock->talle;
        $this->cantidad = $stock->cantidad;
        $this->idProducto = $stock->idProducto;
        $this->color = $stock->color;
        $this->abrirModal();
    }

    public function eliminarStock($id)
    {
        Stock::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }


        public function guardar(){
   Stock::updateOrCreate(['id'=>$this->id],
        [
            
           
            'talle'=>$this->talle,
            'cantidad'=>$this->cantidad,
            'idProducto'=>$this->idProducto,
            'color'=>$this->color,
    
        ]);
        
        session()->flash('message',
        $this->id ? '¡Actualización exitosa!' : '¡Alta Exitosa!');
     
        $this->cerrarModal();
        $this->limpiarCampos();
    }
}

