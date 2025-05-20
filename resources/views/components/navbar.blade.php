<div class="h-14 z-20">
  <nav class="bg-[#07211A]" x-data="{ isOpen: false }" role="navigation" aria-label="Main Navigation">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
      
        <div class="flex items-center">
          <a href="/" class="flex-shrink-0">
            <img class="h-9" src="{{ asset('images/Navbar-logo.png') }}" alt="AlasBase Logo" />
          </a>
        </div>
  
        <div class="hidden md:flex md:items-center md:space-x-4">
          <a href="/" 
             class="{{ request()->is('/') ? 'bg-gray-500 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
             @if(request()->is('/')) aria-current="page" @endif
          >Home</a>
          <a href="/flora" 
             class="{{ request()->is('flora') ? 'bg-gray-500 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
             @if(request()->is('flora')) aria-current="page" @endif
          >Flora</a>
          <a href="/fauna" 
             class="{{ request()->is('fauna') ? 'bg-gray-500 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
             @if(request()->is('fauna')) aria-current="page" @endif
          >Fauna</a>
        </div>
  
        <!-- Mobile menu button -->
        <div class="md:hidden flex items-center">
          <button 
            @click="isOpen = !isOpen" 
            type="button" 
            aria-controls="mobile-menu" 
            :aria-expanded="isOpen.toString()" 
            aria-label="Toggle menu" 
            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
          >
            <svg x-show="!isOpen" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="isOpen" x-cloak class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  
    <!-- Mobile Menu -->
    <div x-show="isOpen" x-transition class="md:hidden" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-[#07211A]">
        <a href="/" 
           class="{{ request()->is('/') ? 'bg-gray-500 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium"
           @if(request()->is('/')) aria-current="page" @endif
        >Home</a>
        <a href="/flora" 
           class="{{ request()->is('flora') ? 'bg-gray-500 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium"
           @if(request()->is('flora')) aria-current="page" @endif
        >Flora</a>
        <a href="/fauna" 
           class="{{ request()->is('fauna') ? 'bg-gray-500 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium"
           @if(request()->is('fauna')) aria-current="page" @endif
        >Fauna</a>
      </div>
    </div>
  </nav>
</div>
