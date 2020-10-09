<nav id="nav" x-data="{open: false}" class="z-50 w-full bg-white">
  <div class="container px-4 py-3 mx-auto sm:px-6 lg:px-8 xl:py-4">
    <div class="grid items-center grid-cols-3">

      <div class="items-center hidden nav-container md:flex md:space-x-12 md:justify-end lg:space-x-20 xl:space-x-24">
        @foreach ($navigation as $item)
          @if($loop->index < 2)
          <a class="nav-link font-mont text-sm tracking-widest text-c-gray-900 uppercase font-bold focus:outline-none group focus:text-gray-700 transition duration-150 ease-in-out hover:text-c-red-100 {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}" href="{{ $item->url }}" target="{!! $item->target !!}">
            <div class="nav-text group-hover:text-c-gold-100">{{ $item->label }}</div>
          </a>
          @endif
        @endforeach
      </div>

      <div class="flex items-center md:hidden">
        <!-- Mobile menu button -->
        <button @click="open = !open" class="inline-flex items-center justify-center mr-auto transition duration-150 ease-in-out rounded-md text-c-gray-400 focus:outline-none hover:text-c-red-100" aria-label="Main menu" aria-expanded="false">
          <!-- Icon when menu is closed. -->
          <svg :class="{'hidden': open, 'block': !open }" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
          <!-- Icon when menu is open. -->
          <svg :class="{'block': open, 'hidden': !open }" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" x-cloak>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>

      <div class="flex-grow md:flex-grow-0">
        <div class="flex items-center flex-shrink-0 md:justify-center">
          <a href="{{ $logo_link }}" class="hover:opacity-50" target="_blank">
            <img id="logo-main" class="w-auto h-10 md:h-12 xl:h-16" src="{!! $logo['url'] !!}" alt="{{ $siteName }}" />
          </a>
        </div>
      </div>

      <div class="items-center hidden nav-container md:flex md:space-x-12 md:justify-start lg:space-x-20 xl:space-x-24">
        @foreach ($navigation as $item)
          @if($loop->index === 2)
            <a class="nav-link font-mont text-sm tracking-widest text-c-gray-900 uppercase font-bold focus:outline-none group transition duration-150 ease-in-out hover:text-c-red-100 focus:{{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}" href="{{ $item->url }}" target="{!! $item->target !!}">
              <div class="nav-text group-hover:text-c-gold-100">{{ $item->label }}</div>
            </a>
          @endif
          @if($loop->last)
            <a class="nav-link font-mont text-sm tracking-wide text-white bg-c-red-100 px-3 py-2 uppercase font-bold focus:outline-none group transition duration-150 ease-in-out hover:bg-c-red-200 hover:shadow-lg lg:px-6 {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}" href="{{ $item->url }}" target="{!! $item->target !!}">
              <div class="nav-text group-hover:text-c-gold-100">{{ $item->label }}</div>
            </a>
          @endif
        @endforeach
      </div>

      <div class="ml-auto md:hidden">
        @foreach ($navigation as $item)
          @if($loop->last)
          <a class="inline-block font-mont px-6 py-2 text-xs text-white tracking-widest uppercase bg-c-red-100 font-bold focus:outline-none group transition duration-150 ease-in-out hover:bg-c-red-200 {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}" href="{{ $item->url }}">
            <div>Join</div>
          </a>
          @endif
        @endforeach
      </div>


    </div>
  </div>

  <!--
    Mobile menu, toggle classes based on menu state.

    Menu open: "block", Menu closed: "hidden"
  -->
  <div :class="{'block': open, 'hidden': !open }" class="bg-white shadow-md md:hidden" x-cloak>
    <div @click.away="open = false" class="pb-4">
      <ul class="flex flex-col">
        @foreach ($navigation as $item)
          <li class="group relative px-6 hover:bg-c-orange-100 transition duration-150 ease-in-out {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}">
            <a class="block py-4 text-lg font-bold tracking-wider uppercase transition duration-150 ease-in-out text-c-gray-900 focus:outline-none hover:text-c-red-100 md:text-base" href="{{ $item->url }}">
              {{ $item->label }}
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</nav>