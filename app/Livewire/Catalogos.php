<?php

namespace App\Livewire;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Stock;
use Livewire\Component;
use Livewire\WithPagination;

class Catalogos extends Component
{
    use WithPagination;
    public $buscar;

    public $ordenarDireccion= 'desc';
    
public function Ordenar(){
    if ($ordenarDireccion ==='asc')
    {
        $this->ordenarDireccion = $this->cambiarDireccion();
    }elseif($ordenarDireccion === 'desc')
    {

    }
}
    
        public function cambiarDireccion(){
          return  $this->ordenarDireccion === 'asc' ? 'desc': 'asc';
        }

    public function render()
    {
        $buscar='%'. $this->buscar . '%';
        $productos = Producto::with('relCategorias') 
        ->where( 'nombre' ,'LIKE' , $buscar)
        ->orwhere( 'precio' ,'LIKE' , $buscar)
        ->orwhere( 'idCategoria' ,'LIKE' , $buscar)
        ->orderBy('precio', $this->ordenarDireccion)
        ->paginate(6);
        $categorias = Categoria::all();
        return view('livewire.catalogos'
        , [
            'productos' => $productos ,
            'categorias'=>$categorias
        ]);
    }
}
