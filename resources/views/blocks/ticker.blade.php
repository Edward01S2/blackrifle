<div class="relative z-30 md:-mt-10 xl:-mt-12 {{ $block->classes }}">
  <div class="container mx-auto lg:px-8">
    <div class="relative flex overflow-hidden">
      {{-- <div class="absolute top-0 right-0 z-30 w-4 h-full bg-c-red-100"></div> --}}
      <div class="relative p-2 bg-c-red-200 md:p-3 md:py-4 xl:pl-4">
        <div class="ticker-title"></div>
        <div class="md:flex md:items-center">
          @svg($logo['url'], 'h-12 w-12 relative z-20 xl:h-16 xl:w-16')
          <div class="z-20 hidden ml-2 text-lg italic font-extrabold leading-5 tracking-wide text-white md:block xl:text-2xl xl:leading-6">{!! $title !!}</div>
        </div>
      </div>
      <div class="relative flex items-center">
        <ul class="inline-flex items-center h-full pl-8 overflow-hidden whitespace-no-wrap ticker bg-c-red-100">
          <span class="inline-block ticker-wrapper">
            <span class="inline-block ticker-items">
              @foreach($headlines as $item)
                <li class="inline-block ml-4 text-white">
                  <div>
                    @svg('images.star', 'w-4 h-4 text-white mr-4 inline mb-1 fill-current text-white')
                    <span class="font-bold uppercase">{!! $item['headline'] !!}</span>
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
