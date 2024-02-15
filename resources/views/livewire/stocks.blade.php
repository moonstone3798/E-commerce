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
             <th scope="col" class="px-6 py-3">Nombre
             <span wire:click="sortBy('idProducto')" class="float-right">
                    <i class="	fa fa-arrow-up fa-2xs {{$sortColumnName === 'idProducto' && $sortDirection ==='asc' ? ''  : 'text-muted' }}"></i>
                    <i class="	fa fa-arrow-down fa-2xs {{$sortColumnName === 'idProducto' && $sortDirection ==='desc' ? ''  : 'text-muted' }}""></i>
                </span>
             </th>
             <th scope="col" class="px-6 py-3">Cantidad
             <span wire:click="sortBy('cantidad')" class="float-right">
                    <i class="	fa fa-arrow-up fa-2xs {{$sortColumnName === 'cantidad' && $sortDirection ==='asc' ? ''  : 'text-muted' }}"></i>
                    <i class="	fa fa-arrow-down fa-2xs {{$sortColumnName === 'cantidad' && $sortDirection ==='desc' ? ''  : 'text-muted' }}""></i>
                </span>
             </th>
             <th scope="col" class="px-6 py-3">Talle
             <span wire:click="sortBy('talle')" class="float-right">
                    <i class="	fa fa-arrow-up fa-2xs {{$sortColumnName === 'talle' && $sortDirection ==='asc' ? ''  : 'text-muted' }}"></i>
                    <i class="	fa fa-arrow-down fa-2xs {{$sortColumnName === 'talle' && $sortDirection ==='desc' ? ''  : 'text-muted' }}""></i>
                </span>
             </th>
             <th scope="col" class="px-6 py-3">Color
             <span wire:click="sortBy('color')" class="float-right">
                    <i class="	fa fa-arrow-up fa-2xs {{$sortColumnName === 'color' && $sortDirection ==='asc' ? ''  : 'text-muted' }}"></i>
                    <i class="	fa fa-arrow-down fa-2xs {{$sortColumnName === 'color' && $sortDirection ==='desc' ? ''  : 'text-muted' }}""></i>
                </span>
             </th>
             <th colspan="2" class="px-2 py-2"> <button wire:click="agregarStock()" class="bg-white  text-xl rounded-full my-3"> <i class="fa-solid fa-circle-plus fa-xl text-[#22c55e] hover:text-[#16a340]"></i></button>
 @if($modal)
 @include('livewire.agregarStock')
 @endif
 </th>
         </tr>
     </thead>
     <tbody>
     @foreach( $stocks as $stock )
<tr  class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">
   <td class="px-6 py-4">{{ $stock->relProducto->nombre}}</td>
   <td class="px-6 py-4">{{ $stock->cantidad }}</td>
   <td class="px-6 py-4">{{ $stock->talle }}</td>
   <td class="px-6 py-4">{{ $stock->color }}</td>
   <td class="px-1 py-1"><button wire:click="eliminarStock({{$stock->id}})" ><i class="fa-regular fa-trash-can fa-xl text-red-500 hover:text-red-600"></i></button></td>
   <td class="px-1 py-1"><button wire:click="modificarStock({{$stock->id}})" > <i class="fa-regular fa-pen-to-square fa-xl text-gray-500 hover:text-gray-600"></i></button></td>
</tr>
@endforeach
     </tbody>
 </table>
 </div>
 {{ $stocks->links() }}
        </div>
    </div>
    
</div>
