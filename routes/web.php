<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
//invoco a los componentes creados
use App\Livewire\Productos; 
use App\Livewire\Categorias;
use App\Livewire\Stocks;
use App\Livewire\HistorialesdeCompras;
use App\Livewire\Preguntasfrecuentes;
use App\Livewire\Contactos;
use App\Mail\ContactoMail;

Route::get('/', function () {
    return view('inicio');
});


Route::view('/inicio', 'inicio');
Route::get('/contactos', Contactos::class);
Route::get('/preguntasfrecuentes', Preguntasfrecuentes::class);
Route::get('/historiales-de-compras', HistorialesdeCompras::class);

//mostrar estas vistas solo si esta logueado
Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard');
    Route::get('/productos', Productos::class);
    Route::get('/categorias', Categorias::class);
    Route::get('/stocks', Stocks::class);
});