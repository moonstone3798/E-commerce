<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $fillable = ['cantidad', 'talle', 'idProducto', 'color'];
    public $timestamps = false;
    public function relProducto(){
        return $this->belongsTo(Producto::class,'idProducto');
    }
}
