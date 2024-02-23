
<div>
<div class="flex justify-center">
<x-buscador></x-buscador>
<div class="flex justify-end ">   
<select wire:click="Ordenar()" class=" text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-gray-500 focus:border-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500">
        <option >Ordenar por</option>
        <option class="  {{$ordenarDireccion ==='asc' }}" >Menor precio</option>
        <option class=" {{$ordenarDireccion ==='desc' }}" >Mayor precio</option>
    </select>
</div>
</div>
<br>
<div class="flex justify-start">
<div class=" flex justify-evenly text-white w-5/6">
@if($productos->count())
@foreach( $productos as $producto )
@php
                $imagenesArray = explode('|', $producto->imagenes);
            @endphp
            <x-card-producto >
            <x-slot name="id">{{ $producto->id }}</x-slot>
        <x-slot name="nombre">{{ $producto->nombre }}</x-slot>
        <x-slot name="imagen"> {{ array_values($imagenesArray)[0] }} </x-slot>
        <x-slot name="precio">{{ $producto->precio }}</x-slot>
            </x-card-producto>
@endforeach
</div>
</div>

{{ $productos->links() }}
@else()
 <div>
    <div class="flex justify-center">
 <img class=" w-1/3" src="/Storage/noencontrado.png" alt="" ></div>
 <div class="flex justify-center">
    <p>Disculpe pero no poseemos ningún producto con ese nombre o características</p></div>
 </div>
 @endif
</div> 
