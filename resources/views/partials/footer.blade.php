<footer class="bg-c-blue-200">
  <div class="container px-4 mx-auto sm:px-6 lg:px-8">
    <div class="flex flex-col px-4 py-12 md:py-16 lg:grid lg:grid-cols-3">

      <div class="mb-8 text-center lg:mb-0 lg:flex lg:items-center">
        <a class="text-lg font-semibold tracking-wider text-white uppercase hover:text-c-red-100 md:text-2xl lg:text-lg " href="{!! $link['url'] !!}" target="_blank">{!! $link['title'] !!}</a>
      </div>

      <div class="hidden lg:block">
        <div class="lg:flex lg:items-center">
          <a href="{{ $logo_link }}" class="hover:opacity-50 lg:mx-auto" target="_blank">
            <img id="logo-main" class="w-20 h-20 xl:h-24 xl:w-24" src="{!! $logo['url'] !!}" alt="{{ $siteName }}" />
          </a>
        </div>
      </div>

      <div class="lg:flex lg:items-center">
        <div class="flex items-center justify-center space-x-8 lg:space-x-10 lg:items-center">
          @foreach ($nav as $item)
            <a class="nav-link tracking-wide leading-5 text-white uppercase group text-sm focus:outline-none transition duration-150 ease-in-out hover:text-c-red-100 lg:text-xs {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}" href="{{ $item->url }}">
              <div class="text-center">{{ $item->label }}</div>
            </a>
          @endforeach
        </div>
      </div>


    </div>
  </div>
</footer>
