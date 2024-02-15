<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    //pongo con la propiedad fillable los atributos de la tabla categorias que quiero que puedan modificar desde el exterior
    protected $fillable = ['categoria'];
    
    public $timestamps = false;
    /*relacion uno a muchos con la tabla productos
     la relación se da en los campos idCategorias (Tabla productos) = id (Tabla categorias)
     Muchos productos pueden tener una misma categoria 
     */
    public function relProductos(){
        return $this->hasMany(Producto::class,'id');
    }
}
