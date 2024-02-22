<div>
<button  wire:click="$set('open', true)" class="bg-white  text-xl rounded-full my-3"> <i class="fa-solid fa-circle-plus fa-xl text-[#22c55e] hover:text-[#16a340]"></i></button>
<x-dialog-modal  wire:model="open" >
<x-slot name="title" ></x-slot>
        <x-slot name="content">
   <form action="">
   <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="mb-4">
                            <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="descripcion" wire:model="descripcion">
                        </div>

                        <div class="mb-4">
                            <label for="categoria" class="block text-gray-700 text-sm font-bold mb-2">Categoria</label>
                           
                        </div>

 
        </x-slot>
        <x-slot name="footer">
            
        <div class="px-4  sm:px-6 sm:flex sm:flex-row-reverse">
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            
                                <button wire:click.prevent="guardar()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-purple-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-purple-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">Guardar</button>
                                <x-button>Guardar</x-button>
                            </span>
                            
                           
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click="cerrarModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">Cancelar</button>
                                <x-secondary-button>Cancelar</x-secondary-button>
                            </span>
                        </div>

                    </div>
        </x-slot>
        </form>
</x-dialog-modal>
</div>