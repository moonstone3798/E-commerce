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
<div class="w-full h-4 mb-4 bg-gray-200 rounded-full dark:bg-gray-700">
  <div class="h-4 bg-purple-600 rounded-full dark:bg-purple-500" style="width: 45%"></div>
</div>
        </x-slot>
        <x-slot name="footer">
         <x-danger-button wire:click="$set('open', false)">Cerrar</x-danger-button>
        </x-slot>

</x-dialog-modal>

</div>

