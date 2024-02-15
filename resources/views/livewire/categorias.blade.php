<div class="py-3">
    <div class="max-w-7x1 mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-x1 sm:rounded-lg px-4 py-4 ">
        <x-buscador></x-buscador>
                <br>
                <div class="w-full flex justify-center">
            <table class=" w-1/5 text-m text-center " >
     <thead class="text-l text-white bg-[#854d58] ">
         <tr class="text-center">
          
             <th scope="col" class="px-6 py-3">Categoria
                <span wire:click="sortBy('categoria')" class="float-right">
                    <i class="	fa fa-arrow-up fa-2xs {{$ordenarColumna === 'categoria' && $ordenarDireccion ==='asc' ? ''  : 'text-muted' }}"></i>
                    <i class="	fa fa-arrow-down fa-2xs {{$ordenarColumna === 'categoria' && $ordenarDireccion ==='desc' ? ''  : 'text-muted' }}"></i>
                </span>
             </th>
             <th colspan="2"> <button wire:click="agregarCategoria()" class="bg-white  text-xl rounded-full my-3"> <i class="fa-solid fa-circle-plus fa-xl text-[#22c55e] hover:text-[#16a340]"></i></button>
 @if($modal)
 @include('livewire.agregarCategoria')
 @endif
 </th>
         </tr>
     </thead>
     <tbody>
     @foreach( $categorias as $categoria )
<tr  class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">
   <td class="px-2 py-2 w-2/3">{{ $categoria->categoria}}</td>
   <td class="px-1 py-1"><button wire:click="eliminarCategoria({{$categoria->id}})" ><i class="fa-regular fa-trash-can fa-xl text-red-500 hover:text-red-600"></i></button></td>
   <td class="px-1 py-1"><button wire:click="modificarCategoria({{$categoria->id}})" > <i class="fa-regular fa-pen-to-square fa-xl text-gray-500 hover:text-gray-600"></i></button></td>
</tr>
@endforeach
     </tbody>
 </table>
 </div>
 <br>
 <div style="text-align: center">
 {{ $categorias->links() }}
 </div>
        </div>
    </div>
    
    
</div>

