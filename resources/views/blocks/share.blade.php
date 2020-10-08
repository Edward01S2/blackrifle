<div class="{{ $block->classes }}">
  <div class="container px-4 pt-16 pb-16 mx-auto sm:px-6 lg:px-8 lg:pt-20">
    <div class="lg:max-w-4xl lg:mx-auto xl:max-w-5xl 2xl:max-w-6xl">
      <img class="hidden mx-auto lg:h-24 lg:mb-4 lg:block xl:mb-8" src="{!! $logo['url'] !!}" alt="">
      {{-- <h2 class="mb-8 text-5xl text-center md:hidden text-c-blue-200 font-bebas">{!! $mobile !!}</h2> --}}
      <h2 class="mb-8 text-5xl text-center text-c-blue-200 font-bebas md:mb-8 md:block lg:text-6xl lg:mb-16 xl:text-7xl">{!! $title !!}</h2>
    </div>
    <div class="grid gap-y-4 md:grid-cols-2 md:gap-x-6 md:gap-y-6 lg:gap-y-8 lg:gap-x-8 lg:max-w-4xl lg:mx-auto xl:max-w-5xl 2xl:max-w-6xl">
      @foreach($share as $item)
        <div class="relative w-full pb-full">
          <img class="absolute inset-0 object-cover object-center w-full h-full img-share" src="{!! $item['url'] !!}" alt="" data-title="{!! $stitle !!}" data-summary="{!! $sdesc !!}">
          {{-- <div class="absolute bottom-0 right-0 flex items-center justify-end w-full mb-4 mr-4 space-x-4 a2a_kit lg:mb-8 lg:mr-8 lg:space-x-6">
            <a class="image-share a2a_button_facebook">
              @svg('images.facebook', 'w-6 h-6 fill-current text-white hover:text-c-red-100 lg:w-8 lg:h-8')
            </a>
            <a class="image-share a2a_button_twitter">
              @svg('images.twitter', 'w-6 h-6 fill-current text-white hover:text-c-red-100 lg:w-8 lg:h-8')
            </a>
          </div> --}}
        </div>
      @endforeach
      {{-- @dump($share) --}}
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
