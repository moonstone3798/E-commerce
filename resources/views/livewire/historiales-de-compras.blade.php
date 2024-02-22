<div>
<button wire:click="$set('open', true)">  <div >
 <div class="flex items-center">
         <i class="fa-solid fa-book-open "></i>
            <h2 class="ms-3 text-xl font-semibold t"> Ver historial de compras </h2>
        </div>
        <p class="mt-4 text-sm leading-relaxed text-justify">
 En esta sección puedes visualizar las compras realizadas con esta cuenta, su número de orden, la fecha realizada, el valor abonado y si lo desea podra descargar su factura.    
        </p>
    </div></button>
<x-dialog-modal  wire:model="open" >
<x-slot name="title" >
            {{ __('Historial de compras') }}
        </x-slot>
        <x-slot name="content">
        <x-buscador></x-buscador>
<br>
<table class="w-full text-m text-center rtl:text-right text-gray-500">
     <thead class="text-l text-white  bg-[#f1889b] ">
         <tr class="text-center">
             <th scope="col" class="px-7 py-3">N° de orden
             <span wire:click="sortBy('id')" class="float-right">
                    <i class="	fa fa-arrow-up fa-2xs {{$sortColumnName === 'id' && $sortDirection ==='asc' ? ''  : 'text-muted' }}"></i>
                    <i class="	fa fa-arrow-down fa-2xs {{$sortColumnName === 'id' && $sortDirection ==='desc' ? ''  : 'text-muted' }}"></i>
                </span>
             </th>
             <th scope="col" class="px-7 py-3">Fecha de compra
             <span wire:click="sortBy('fecha')" class="float-right">
                    <i class="	fa fa-arrow-up fa-2xs {{$sortColumnName === 'fecha' && $sortDirection ==='asc' ? ''  : 'text-muted' }}"></i>
                    <i class="	fa fa-arrow-down fa-2xs {{$sortColumnName === 'fecha' && $sortDirection ==='desc' ? ''  : 'text-muted' }}"></i>
                </span>
             </th>
             <th scope="col" class="px-7 py-3">Precio
             <span wire:click="sortBy('precioT')" class="float-right">
                    <i class="	fa fa-arrow-up fa-2xs {{$sortColumnName === 'precioT' && $sortDirection ==='asc' ? ''  : 'text-muted' }}"></i>
                    <i class="	fa fa-arrow-down fa-2xs {{$sortColumnName === 'precioT' && $sortDirection ==='desc' ? ''  : 'text-muted' }}"></i>
                </span>
             </th>
             <th scope="col" class="px-7 py-3">Factura
             <span wire:click="sortBy('factura')" class="float-right">
                     </span>
             </th>
         </tr>
     </thead>
     <tbody>
     @foreach( $compras as $compra )
    
<tr  class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">
   <th scope="row" class="px-7 py-4 font-medium text-gray-900 whitespace-nowrap">{{ $compra->id }}</th>
   <td class="px-7 py-4">{{ $compra->fecha}}</td>
   <td class="px-7 py-4">{{ $compra->precioT }}</td>
   <td class="px-7 py-4">{{ $compra->factura }}</td>
 </tr>
@endforeach
     </tbody>
 </table>
 {{ $compras->links() }}
        </x-slot>
        <x-slot name="footer">
         <x-danger-button wire:click="$set('open', false)">Cerrar</x-danger-button>
        </x-slot>

</x-dialog-modal>

</div>

