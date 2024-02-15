<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'precio', 'imagenes[]', 'idCategoria','categoria'];
    public function relCategorias(){
        return $this->belongsTo(Categoria::class,'idCategoria');
    }
    public function relStocks(){
        return $this->hasMany(Stock::class,'id');
    }
}
