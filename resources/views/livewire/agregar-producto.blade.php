<div>
<button  wire:click="$set('open', true)" class="bg-white  text-xl rounded-full my-3"> <i class="fa-solid fa-circle-plus fa-xl text-[#22c55e] hover:text-[#16a340]"></i></button>
<x-dialog-modal  wire:model="open" >
<x-slot name="title" ></x-slot>
        <x-slot name="content">
        <div class="mt-2 md:mt-0 md:col-span-2">
        <div class="px-4 bg-white sm:p-2 shadow">
           
        <form enctype="multipart/form-data" method="post">
            @csrf
                    <div class="bg-white px-4 pb-4 sm:p-2 sm:pb-4">
                        <div class="mb-4">
                            <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre </label>
                            <input type="text" class="shadow appearance-none border rounded w-3/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" wire:model="nombre">
                        </div>
                        <div class="mb-4">
                            <label for="categoria" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categoria </label>
                        <select name="categoria" id="categoria" wire:model="idCategoria" class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-3/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option value="">Seleccione la categoria</option>
                            @foreach( $categorias as $categoria )
                            <option value="{{ $categoria->id}}">{{ $categoria->categoria}}</option>
                            @endforeach
                        </select>
</div>
                             <div class="mb-4">
                            <label for="precio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio </label>
                            <input type="text" class="shadow appearance-none border rounded w-3/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="precio" wire:model="precio">
                        </div>
                        <label for="imagenes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imagenes</label>
                          <div class="flex items-center justify-center w-full">
    <label for="dropzone-file" class="flex flex-col items-center justify-center w-3/4 h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
        <div class="flex flex-col items-center justify-center pt-5 pb-6">
            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
            </svg>
            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Hace click para subir las imagenes</span> o arrastralas acá</p>
            <p class="text-xs text-gray-500 dark:text-gray-400">JPEG, PNG o JPG  (MAX. 800x400px)</p>
        </div>
        <input id="dropzone-file" multiple wire:model="imagenes" accept=".jpg, .jpeg, .png" type="file" class="hidden" />
    </label>
</div>
        </x-slot>
        <x-slot name="footer">      
        <div class="px-4  sm:px-6 sm:flex sm:flex-row-reverse">
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                               <x-button wire:click.prevent="store()">Guardar</x-button>
                            </span>
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <x-secondary-button wire:click="$set('open', false)">Cancelar</x-secondary-button>
                            </span>
                        </div>

                    </div>
                    
            </div>

        </x-slot>
        </form>
        </div>
</x-dialog-modal>
</div>