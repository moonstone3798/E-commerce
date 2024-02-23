<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'estado', 'factura', 'fecha'];
    public $timestamps = false;
    public function relUsers(){
        return $this->belongsTo(User::class,'idUsuario');
    }
    public function relCarritos(){
        return $this->belongsTo(Carrito::class,'idCarrito');
    }
}
