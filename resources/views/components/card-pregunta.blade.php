<div class="flex justify-center " x-data="{open: false}">
  <div class="bg-opacity-20 bg-[#9D5B68E6] rounded-lg w-11/12 mb-7"><button x-on:click="open=!open">
  <h3 class="text-xl mb-3 mt-2"> <i :class="{'hidden':  open}"  class="fa-solid fa-plus ml-4 mr-2"></i><i :class="{'hidden': ! open}" class="fa-solid fa-minus ml-4 mr-2"></i>
  {{ $pregunta }}</h3></button> 
  <div :class="{'block': open, 'hidden': ! open}"  class="bg-white text-black flex justify-center pt-4 text-lg ">
          {{ $texto }}
        </div></div>
</div>