   {{-- header --}}
   <div class="bg-white shadow-md">
    <header class="container mx-auto max-w-7xl flex flex-wrap items-center p-6 justify-between">
        <div class="flex items-center text-sec hover:text-pri cursor-pointer transition">
           
          <a href="{{url('/') }}"<span class="font-title text-pri text-3xl">Coding</span> <span class="font-title text-sec text-3xl">Forum</span></a>
        </div>
        <div class="md:hidden block">
              <button id="menu-open" class=" px-3 py-1 rounded bg-sec text-white hover:bg-purple-900 transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
              </button>
              <button id="menu-close" class="hidden px-3 py-1 rounded bg-sec text-white hover:bg-purple-900 transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
              </button>
        </div>
        <nav id="menu-items" class="hidden md:flex md:items-center font-title w-full md:w-auto">
            <ul class="text-lg">
               
                 <li class="block mb-3 md:my-0 md:inline-block items-center mr-4">

                    @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    <a class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>

                    
                   @else

                   
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                  @endauth
                   
                 </li>
            </ul>
        </nav>

    </header>
</div>

{{-- header end --}}