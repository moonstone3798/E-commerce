<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Stock;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
class Productos extends Component
{
    use WithFileUploads;
    public  $nombre , $id , $precio , $idCategoria ;
    public $modal = false;
    public $buscar;
    public $imagenes = [];
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
        $productos = Producto::with('relCategorias') 
        ->where( 'nombre' ,'LIKE' , $buscar)
        ->orwhere( 'precio' ,'LIKE' , $buscar)
        ->orwhere( 'idCategoria' ,'LIKE' , $buscar)
        ->orderBy($this->sortColumnName, $this->sortDirection)
        ->paginate(6);
        $categorias = Categoria::all();
        return view('livewire.productos'
        , [
            'productos' => $productos ,
            'categorias'=>$categorias
        ]);
    
    }
    public function mostrarproducto($id)
    {
        $imagenes = array();
        $Producto = Producto::find($id);
        $categorias = Categoria::all();
        $stocks = Stock::all();

        
        return view(
            'mostrarproducto',
            [
                'Producto' => $Producto,
                'categorias'=>$categorias,
                'stocks'=>$stocks,
            ]
        );

    }
    public function agregarProducto(){
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
        $this->id =  '' ;   
        $this->nombre='';   
        $this->precio=''; 
        $this->imagenes='';
        $this->idCategorias='';     }         
/*
    public function modificarProducto($id){
$producto= Producto::findOrFail($id);
$this-> id_producto = $id;
$this-> nombre = $producto->nombre;
$this-> precio = $producto->precio;
$this-> imagenes = $producto->imagenes;
$this-> idCategoria = $producto->idCategoria;
$this->abrirModal();
    }

    public function eliminarProducto($id){
Producto::find($id)->delete();
    }

    public function guardar(){
        $this->validate([
            'imagenes.*' => 'image|max:1024', 
        ]);
 
        if($this->imagenes){
            $validated['imagenes']=$this->imagenes->store('imagenes','public');
        }
                
        Producto::updateOrCreate(['id'=>this->id],
        [
            
           
            'nombre'=>$this->nombre,
            'precio'=>$this->precio,
            'imagenes'=>$this->imagenes,
            'idCategoria'=>$this->idCategoria,
    
        ]);
        $this->cerrarModal();
        $this->limpiarCampos();
    }*/
    public function store()
    {
        if($imagenes){
            foreach($imagenes as $imagen){
                $nombreimg = uniqid();
                $ext = $imagen->getClientOriginalExtension();
                $img = $nombreimg . '.' . $ext;
                $imagen->move(public_path('imagenes/'), $img);
                $imagenes[] = $img;
            }
        }
  
   

        Producto::insert([
            'imagenes' => implode('|', $imagenes),
            'nombre'=>$this->nombre,
            'precio'=>$this->precio,
            'idCategoria'=>$this->idCategoria,
        ]);
       
        $this->cerrarModal();
        $this->limpiarCampos();

    }

    public function eliminarProducto($id){
        Producto::find($id)->delete();
            }

}
