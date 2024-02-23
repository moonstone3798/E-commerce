<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'precio', 'cantidad', 'precio'];
    public function relProductos(){
        return $this->belongsTo(Producto::class,'idProducto');
    }
}
