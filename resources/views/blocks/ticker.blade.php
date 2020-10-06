<div class="relative z-10 md:-mt-10 xl:-mt-12 {{ $block->classes }}">
  <div class="container mx-auto lg:px-8">
    <div class="flex overflow-hidden relative">
      {{-- <div class="absolute bg-c-red-100 right-0 w-4 h-full top-0 z-30"></div> --}}
      <div class="p-2 relative bg-c-red-200 md:p-3 md:py-4 xl:pl-4">
        <div class="ticker-bg"></div>
        <div class="md:flex md:items-center">
          @svg($logo['url'], 'h-12 w-12 relative z-20 xl:h-16 xl:w-16')
          <div class="hidden font-extrabold italic ml-2 tracking-wide leading-5 text-white text-lg md:block xl:text-2xl xl:leading-6">{!! $title !!}</div>
        </div>
      </div>
      <div class="flex items-center relative">
        <ul class="ticker whitespace-no-wrap h-full bg-c-red-100 inline-flex items-center overflow-hidden pl-8">
          <span class="ticker-wrapper inline-block">
            <span class="ticker-items inline-block">
              @foreach($headlines as $item)
                <li class="text-white inline-block ml-4">
                  <div>
                    @svg('images.star', 'w-4 h-4 text-white mr-4 inline mb-1 fill-current text-white')
                    <span class="uppercase font-bold">{!! $item['headline'] !!}</span>
                  </div>
                </li>
              @endforeach
            </span>
          </span>
        </ul>
      </div>
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
