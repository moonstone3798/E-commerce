<div>
<nav x-data="{ open: false }" class="bg-[#5B253BE6]">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button"  @click="open = ! open" class="relative inline-flex items-center justify-center rounded-md p-2 hover:bg-[#f1889b] hover:text-white " aria-controls="mobile-menu" aria-expanded="false">
          <span class="absolute -inset-0.5"></span>
          <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex flex-shrink-0 hidden sm:block">
          <img class="h-8 w-auto" src="/Storage/logo.png" alt="" >
        </div>
        
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="/inicio" class="text-white rounded-md px-3 py-2 text-lg font-bold" aria-current="page">Tienda</a>
            <a href="/preguntasfrecuentes" class="text-white rounded-md px-3 py-2 text-lg font-bold">Preguntas frecuentes</a>
            <a href="/contactos" class="text-white rounded-md px-3 py-2 text-lg font-bold">Contacto</a>
          </div>
        </div>
      </div>
      
        <!-- Profile dropdown -->
        <div x-data="{open: false}" class="relative ml-3 hidden sm:block">
          <div>
          <button x-on:click="open=!open" type="button" class=" rounded-full bg-white">
          <i class="fa-solid fa-circle-user fa-xl text-[#646170] "></i>
        </button>
          </div>
          

          <!--
            Dropdown menu, show/hide based on menu state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
          <div x-show="open" class="absolute right-0 z-10 mt-4 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
            <!-- Active: "bg-gray-100", Not Active: "" -->
            <button x-on:click="open=!open" class="fa-solid fa-circle-xmark text-[#f44336] pl-40 pt-2"></button>
            <br>
            @if (Route::has('login'))
                @auth
                <div class="block px-4 py-1 text-xs text-gray-400">
                <p>{{ Auth::user()->name }}</p>  
               <p class="text-xs">{{ Auth::user()->email }}</p> 
                            </div>
         
                        <x-dropdown-link href="{{  url('/dashboard')  }}">
                                {{ __('Mi perfil') }}
                            </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Cerrar sesión') }}
                                </x-dropdown-link>
                                </form>
                        @else
                        <x-dropdown-link href="{{ route('login') }}">
                                {{ __('Iniciar sesión') }}
                            </x-dropdown-link>
                           @if (Route::has('register'))
                           <x-dropdown-link href="{{ route('register') }}">
                                {{ __('Registrarse') }}
                            </x-dropdown-link>
                            
                              @endif
                    @endauth
            @endif

          </div></div>
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
      <button type="button" class="relative flex rounded-full text-sm " id="user-menu-button" aria-expanded="false" aria-haspopup="true">
      <i class="fa-solid fa-cart-shopping fa-xl text-white"> 
      </i>   
            </button>
            <div class=" px-1 mt-3 bg-gray-300  text-xs rounded-full"  x-data="{ count: 0 }"> <span x-text="count"></span></div>
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div :class="{'block': open, 'hidden': ! open}" class="sm:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pb-3 pt-2">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <a href="/inicio" class="text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Tienda</a>
      <a href="/preguntasfrecuentes" class="text-white block rounded-md px-3 py-2 text-base font-medium">Preguntas frecuentes</a>
      <a href="/contactos" class="  hover:border-1-[#f99aaa] text-white block rounded-md px-3 py-2 text-base font-medium">Contacto</a>
    </div>
    
        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 text-white block">
            <div class="flex items-center px-4">
            @if (Route::has('login'))
                @auth
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="shrink-0 me-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif
               
                <div>
                    <div class="font-medium text-base ">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm ">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1 ">
                <!-- Account Management -->
                <x-responsive-nav-link href="{{ url('/dashboard') }}" class="text-white">
                    {{ __('Mi perfil') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-responsive-nav-link href="{{ route('logout') }}" 
                                   @click.prevent="$root.submit();" 
                                    class="text-white">
                        {{ __('Cerrar sesión') }}
                    </x-responsive-nav-link>
                    </form>
                    @else
                        <x-responsive-nav-link href="{{ route('login') }}" class="text-white">
                                {{ __('Iniciar sesión') }}
                            </x-responsive-nav-link>
                           @if (Route::has('register'))
                           <x-responsive-nav-link href="{{ route('register') }} " class="text-white">
                                {{ __('Registrarse') }}
                            </x-responsive-nav-link>
                           

                            @endif
                    @endauth
            @endif
</div>
  </div>
</nav>

</div>
