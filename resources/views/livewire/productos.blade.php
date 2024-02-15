<div class="py-5">
    <div class="max-w-7x1 mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-x1 sm:rounded-lg px-4 py-4">
        <div>
    <x-buscador></x-buscador>
        <br>
        <div class="w-full flex justify-center">
 <table class="w-1/2 text-m text-center rtl:text-right text-gray-500">
     <thead class="text-l text-white  bg-[#854d58] ">
         <tr class="text-center">
             <th scope="col" class="px-7 py-3">Nombre
             <span wire:click="sortBy('nombre')" class="float-right">
                    <i class="	fa fa-arrow-up fa-2xs {{$sortColumnName === 'nombre' && $sortDirection ==='asc' ? ''  : 'text-muted' }}"></i>
                    <i class="	fa fa-arrow-down fa-2xs {{$sortColumnName === 'nombre' && $sortDirection ==='desc' ? ''  : 'text-muted' }}"></i>
                </span>
             </th>
             <th scope="col" class="px-7 py-3">Categoria
             <span wire:click="sortBy('idCategoria')" class="float-right">
                    <i class="	fa fa-arrow-up fa-2xs {{$sortColumnName === 'idCategoria' && $sortDirection ==='asc' ? ''  : 'text-muted' }}"></i>
                    <i class="	fa fa-arrow-down fa-2xs {{$sortColumnName === 'idCategoria' && $sortDirection ==='desc' ? ''  : 'text-muted' }}"></i>
                </span>
             </th>
             <th scope="col" class="px-7 py-3">Precio
             <span wire:click="sortBy('precio')" class="float-right">
                    <i class="	fa fa-arrow-up fa-2xs {{$sortColumnName === 'precio' && $sortDirection ==='asc' ? ''  : 'text-muted' }}"></i>
                    <i class="	fa fa-arrow-down fa-2xs {{$sortColumnName === 'precio' && $sortDirection ==='desc' ? ''  : 'text-muted' }}"></i>
                </span>
             </th>
             <th scope="col" class="px-3 py-3">Imágenes</th>
             <th colspan="2" > <button wire:click="agregarProducto()" class="bg-white  text-xl rounded-full my-3"> <i class="fa-solid fa-circle-plus fa-xl text-[#22c55e] hover:text-[#16a340]"></i></button>
 @if($modal)
 @include('livewire.agregarProducto')
 @endif
 </th>
         </tr>
     </thead>
     <tbody>
     @foreach( $productos as $producto )
     
@php
$imagenesArray = explode('|', $producto->imagenes);
@endphp  
<tr  class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">
   <th scope="row" class="px-7 py-4 font-medium text-gray-900 whitespace-nowrap">{{ $producto->nombre }}</th>
   <td class="px-7 py-4">{{ $producto->relCategorias->categoria}}</td>
   <td class="px-7 py-4">{{ $producto->precio }}</td>
   <td class="px-3 py-4 w-1/6"><img src="/storage/{{ array_values($imagenesArray)[0] }} " class="img-thumbnail" style="width: 170px ; height:120px; object-fit:cover;"></td>
   <td class="px-1 py-1"><button wire:click="eliminarProducto({{$producto->id}})" ><i class="fa-regular fa-trash-can fa-xl text-red-500 hover:text-red-600"></i></button></td>
   <td class="px-1 py-1"><button wire:click="modificarProducto({{$producto->id}})" > <i class="fa-regular fa-pen-to-square fa-xl text-gray-500 hover:text-gray-600"></i></button></td>
</tr>
@endforeach
     </tbody>
 </table>
 </div>
 {{ $productos->links() }}
        </div>
    </div>
    
</div>

