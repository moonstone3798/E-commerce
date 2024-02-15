<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Categoria; //invocar al modelo
use Livewire\WithPagination; //agregar paginación 

class Categorias extends Component
{
    use WithPagination; //paginación
    //Defino variables
    public $buscar; 
    public $ordenar;
    public $modal = false;
    public $ordenarColumna= 'categoria';
    public $ordenarDireccion= 'desc';
    
    //función para ordenar la columna categorias
    public function sortBy($nombredeColumna){
        if($this->ordenarColumna===$nombredeColumna){
            $this->ordenarDireccion = $this->cambiarDireccion();
        } else{
            $this->ordenarDireccion= 'asc';
        }
        $this->ordenarColumna = $nombredeColumna;
            }
        public function cambiarDireccion(){
          return  $this->ordenarDireccion === 'asc' ? 'desc': 'asc';
        }

    public function render()
    {
        //tomo el valor de la variable buscar y hago que filtre las categorias que arrancan como el valor ingresado en ella
        $buscar= $this->buscar . '%';
        //almaceno en la variable $categorias las categorias que esten ordenadas segun el orderby y que cumplan con el filtro de busqueda vigente
        $categorias = Categoria::where( 'categoria' ,'LIKE' , $buscar)
        ->orderBy($this->ordenarColumna, $this->ordenarDireccion)
        ->paginate(6);
        //hago que me muestre hasta 6 datos, y los siguientes se encuentren en otras páginas de la paginación 
        return view('livewire.categorias', [
            'categorias' => $categorias]
        )
        ;
    }
    public function agregarCategoria()
    {
        $this->limpiarCampos();
        $this->abrirModal();
        
    }

    public function abrirModal() {
        $this->modal = true;
    }
    public function cerrarModal() {
        $this->modal = false;
    }
    public function limpiarCampos(){
        $this->categoria = '';
        $this->id = '';
    }
    public function modificarCategoria($id)
    {
        $categoria = Categoria::findOrFail($id);
        $this->id = $id;
        $this->categoria = $categoria->categoria;
        $this->abrirModal();
    }

    public function eliminarCategoria($id)
    {
        Categoria::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {
        Categoria::updateOrCreate(['id'=>$this->id],
            [
                'categoria' => $this->categoria,
            ]);
         
         session()->flash('message',
            $this->id ? '¡Actualización exitosa!' : '¡Alta Exitosa!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
}
