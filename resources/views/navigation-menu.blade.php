
<nav x-data="{ open: false }" class="bg-[#5B253BE6] border-b border-gray-100 ">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class=" flex items-center ms-6">
            
                <!-- Settings Dropdown -->
                <div class="ms-3 relative">
                    <x-dropdown align="left" width="48">
                        <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                      Hola, {{ Auth::user()->name }}

                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                        
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="text-center font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                            <div class="text-center font-medium text-xs text-gray-500">{{ Auth::user()->email }}</div>
                
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>
                      
                            <x-dropdown-link href="{{ route('profile.show') }}" class="no-underline">
                                {{ __('Profile') }}
                            </x-dropdown-link>


                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}" class="no-underline"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center ">
                <button @click="open = ! open" class="inline-flex items-center justify-end rounded-md text-gray-100 hover:text-gray-200 hover:bg-gray-800 focus:outline-none focus:bg-gray-800 focus:text-white transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div class="flex justify-end">
    <div x-show="open" class="bg-[#5B253BE6] absolute h-full right-0 z-10 sm:w-1/5 w-1/2 origin-top-right shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none " role="menu" aria-orientation="vertical"  tabindex="-1">
      
    <div :class="{'block': open, 'hidden': ! open}" class="hidden">
            <x-responsive-nav-link href="{{('productos') }}" :active="request()->routeIs('productos')">
                {{ __('Productos') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link  href="{{('stocks') }}" :active="request()->routeIs('stocks')">
                {{ __('Stocks') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{('categorias') }}" :active="request()->routeIs('categorias')">
                {{ __('Categorias') }}
            </x-responsive-nav-link>
        </div>
        </div>
        </div>
</nav>
