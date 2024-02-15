<div>
@section('contenido')
<x-buscador></x-buscador>
<table class="w-1/2 text-m text-center rtl:text-right text-gray-500">
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
         </tr>
     </thead>
     <tbody>
     @foreach( $compras as $compra )
    
<tr  class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">
   <th scope="row" class="px-7 py-4 font-medium text-gray-900 whitespace-nowrap">{{ $compra->id }}</th>
   <td class="px-7 py-4">{{ $compra->fecha}}</td>
   <td class="px-7 py-4">{{ $compra->precioT }}</td>
 </tr>
@endforeach
     </tbody>
 </table>
 {{ $compras->links() }}
    @endsection
</div>

