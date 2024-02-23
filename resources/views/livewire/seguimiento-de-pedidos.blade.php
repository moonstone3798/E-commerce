<div>
<button wire:click="$set('open', true)"> 
    <div >
        <div class="flex items-center">
        <i class="fa-solid fa-truck-arrow-right"></i> 
            <h2 class="ms-3 text-xl font-semibold ">Realizar seguimiento de pedido</h2>
        </div>
         <p class="mt-4  text-sm leading-relaxed text-justify">
        En esta sección con su número de orden, usted podrá visualizar en que estado se encuentra su pedido
        </p> 
    </div></button>
<x-dialog-modal  wire:model="open" >
    
<x-slot name="title" >
            {{ __('Seguimiento de pedidos') }}
        </x-slot>
        <x-slot name="content">
        <label for="id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Seleccione el n° de orden de su compra para ver su estado</label>
                        <select name="id" id="id" wire:model="id" class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option value="">N° de orden </option>
                            @foreach( $compras as $compra )
                            <option value="{{ $compra->id}}">{{ $compra->id}}</option>
                            @endforeach
                        </select>
        <div>
<div class="w-full h-4 mb-4 bg-gray-200 rounded-full dark:bg-gray-700">
  <div class="h-4 bg-purple-600 rounded-full dark:bg-purple-500" style="width: 45%"></div>
</div>
</div>
        </x-slot>
        <x-slot name="footer">
         <x-danger-button wire:click="$set('open', false)">Cerrar</x-danger-button>
        </x-slot>

</x-dialog-modal>

</div>

