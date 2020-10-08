<div id="store" class="{{ $block->classes }}">
  <div class="container px-4 mx-auto sm:px-6 lg:px-8">
    <div class="pt-12 pb-8 mt-12 bg-white md:p-12 lg:p-16">
      <div class="md:flex md:items-center md:justify-between md:mb-8">
        <h2 class="mb-4 text-5xl text-center text-c-blue-200 font-bebas md:mb-0 lg:text-6xl xl:text-7xl">{!! $title !!}</h2>
        <div>
          <a class="items-center hidden md:flex group" href="{!! $link['url'] !!}" target="_blank">
            <span class="mr-4 font-bold text-c-blue-200 md:text-sm xl:text-base group-hover:text-c-red-100">{!! $link['title'] !!}</span>
            <div class="inline-block p-2 transition duration-300 border rounded-full border-c-gray-300">
              <svg class="w-4 h-4 transition duration-300 text-c-blue-200 group-hover:text-c-red-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
              </svg>
            </div>
          </a>
        </div>
      </div>

      <div class="grid grid-rows-2 md:grid-cols-2 md:grid-rows-none lg:grid-cols-3">
        @foreach($items as $item)
          <a class="block group md:hover:bg-c-gray-100" href="{!! $item['link'] !!}" target="_blank">
            <div class="p-8 md:flex-col md:flex md:h-full md:pt-8 md:pb-12 md:px-4 lg:pt-4">
              <div class="mb-4 overflow-hidden md:flex-grow md:bg-transparent md:flex md:items-center md:px-4 2xl:px-12">
                <img class="object-contain object-top w-full h-48 md:h-auto" src="{!! $item['image']['url'] !!}" alt="">
              </div>
              <h3 class="mb-4 font-bold text-center text-black uppercase md:mb-8">{!! $item['title'] !!}</h3>
              <div class="">
                <button class="block w-full px-12 py-3 font-bold text-center text-white uppercase bg-c-blue-100 group-hover:shadow-lg md:w-auto md:mx-auto" href="{!! $item['link'] !!}">Buy</button>
              </div>
            </div>
          </a>
        @endforeach
      </div>

    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
