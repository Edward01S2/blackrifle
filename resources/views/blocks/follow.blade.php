<div class="{{ $block->classes }} bg-c-black-100">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="py-16 md:py-20 lg:py-32 xl:py-40 2xl:py-48">
      <h2 class="text-white font-bebas text-5xl mb-8 text-center md:mb-12 lg:text-6xl xl:text-7xl">{!! $title !!}</h2>
      <div class="flex justify-center space-x-4 md:space-x-8 lg:space-x-10 2xl:space-x-12">
        @foreach($social as $item)
          <a class="group" href="{!! $item['url'] !!}" target="_blank">
            <div class="p-4 bg-white rounded-full inline-block group-hover:bg-c-red-100 transition duration-200">
              @svg($item['icon']['url'], 'h-8 w-8 fill-current text-c-black-100 md:h-10 md:w-10 lg:h-12 lg:w-12 group-hover:text-white transition duration-200')
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
