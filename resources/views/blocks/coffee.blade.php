<div id="coffee" class="{{ $block->classes }} lg:pb-12">
  <div class="container px-4 pt-12 mx-auto sm:px-6 md:pt-20 lg:px-8 xl:py-24">
    <div class="w-3/4 mx-auto mb-8 md:mb-12 md:container md:w-full">
      <img class="hidden mx-auto lg:h-24 lg:mb-4 lg:block xl:mb-8" src="{!! $logo['url'] !!}" alt="">
      <h2 class="mb-4 text-5xl text-center text-c-blue-200 font-bebas lg:text-6xl xl:text-7xl lg:mb-8 xl:mb-12">{!! $title !!}</h2>
    </div>
  </div>

  <div class="relative flex items-center outline-none coffee-slider swiper-container">
    <div class="swiper-wrapper">
      @foreach($coffee as $item)
        <div class="swiper-slide">
          <div class="">
            <div class="relative">
              <img class="relative z-20 w-auto h-64 mx-auto md:h-72 lg:h-80" src="{!! $item['image']['url'] !!}" alt="">
              <div class="absolute z-10 w-40 h-40 transform -translate-x-1/2 -translate-y-1/2 rounded-full circle bg-c-red-100 left-1/2 top-1/2 md:h-48 md:w-48 lg:h-56 lg:w-56"></div>
              {{-- @svg('images.star_circle', 'stars fill-current text-white absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10') --}}
            </div>
          </div>
          <div class="mt-4 text-center md:mt-8">
            <h3 class="text-lg font-bold uppercase text-c-blue-200">{!! $item['title'] !!}</h3>
            <div class="text-c-gray-1000">{!! $item['description'] !!}</div>
            <div class="hidden md:block md:mt-8 md:pb-8">
              <a class="z-30 inline-block px-8 py-2 font-bold uppercase bg-white hover:shadow-lg text-c-blue-100" href="{!! $item['link'] !!}" target="_blank">Buy</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <div class="absolute top-0 flex justify-center w-full h-64 md:h-72 lg:h-80">
      @svg('images.star_circle', 'stars fill-current text-white absolute')
    </div>
    <div class="container absolute top-0 left-0 right-0 z-40 flex items-center justify-between w-full h-64 px-4 mx-auto md:h-72 lg:h-80 sm:px-6 lg:px-8">
      <div class="p-2 -ml-px transition duration-150 bg-black bg-opacity-25 rounded-full cursor-pointer swiper-prev hover:bg-opacity-50">
        <svg class="w-8 h-8 text-white stroke-current lg:h-10 lg:w-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
      </div>
      <div class="p-2 -mr-px transition duration-150 bg-black bg-opacity-25 rounded-full cursor-pointer swiper-next hover:bg-opacity-50">
        <svg class="w-8 h-8 text-white stroke-current lg:h-10 lg:w-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </div>
    </div>
  </div>

  <div class="container px-4 mx-auto mt-8 mb-4 sm:px-6 md:hidden">
    <div class="px-8 text-center">
      <a class="block py-3 font-bold tracking-wider text-white uppercase bg-c-red-100 hover:shadow-lg hover:bg-c-red-200" href="{!! $shop!!}" target="_blank">Shop Coffee</a>
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
