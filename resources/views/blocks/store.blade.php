<div id="store" class="{{ $block->classes }}">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-white mt-12 pt-12 pb-8 md:p-12 lg:p-16">
      <div class="md:flex md:items-center md:justify-between md:mb-8">
        <h2 class="text-c-blue-200 font-bebas text-5xl mb-4 text-center md:mb-0 lg:text-6xl xl:text-7xl">{!! $title !!}</h2>
        <div>
          <a class="hidden md:flex items-center group" href="{!! $link['url'] !!}" target="_blank">
            <span class="mr-4 text-c-blue-200 font-bold md:text-sm xl:text-base group-hover:text-c-red-100">{!! $link['title'] !!}</span>
            <div class="inline-block rounded-full p-2 border border-c-gray-300 transition duration-300">
              <svg class="h-4 w-4 text-c-blue-200 group-hover:text-c-red-100 transition duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
              </svg>
            </div>
          </a>
        </div>
      </div>

      <div class="grid grid-rows-2 md:grid-cols-2 md:grid-rows-none md:gap-x-12">
        @foreach($items as $item)
          <a class="block group md:hover:bg-c-gray-100" href="{!! $item['link'] !!}" target="_blank">
            <div class="p-8 md:flex-col md:flex md:h-full md:pt-8 md:pb-12 md:px-4 lg:pb-16">
              <div class="bg-c-gray-100 overflow-hidden mb-4 md:flex-grow md:bg-transparent md:flex md:items-center md:px-4 2xl:px-12">
                <img class="object-cover w-full h-48 object-top md:h-auto" src="{!! $item['image']['url'] !!}" alt="">
              </div>
              <h3 class="font-bold text-black uppercase text-center mb-4 md:mb-8">{!! $item['title'] !!}</h3>
              <div class="">
                <button class="uppercase block bg-c-blue-100 w-full text-white text-center group-hover:shadow-lg font-bold py-3 px-12 md:w-auto md:mx-auto" href="{!! $item['link'] !!}">Buy</button>
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
