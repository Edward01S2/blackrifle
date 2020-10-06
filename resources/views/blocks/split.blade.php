<div id="{!! $block->block->id !!}" class="{{ $block->classes }}">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col pt-12 lg:flex-row">
      <div class="side-1 lg:w-1/2 lg:relative">
        <img class="hidden lg:block lg:absolute lg:object-center lg:object-cover lg:w-full lg:h-full" src="{!! $image['url'] !!}" alt="">
      </div>
      <div class="side-2 p-8 bg-white md:p-12 lg:w-1/2 lg:flex lg:items-center">
        <div class="lg:py-16 lg:px-8 xl:w-3/4 xl:px-0 xl:mx-auto 2xl:w-3/5 2xl:py-24">
          <div class="flex items-center justify-center mb-4 space-x-2 lg:mb-0">
            @svg('images.star', 'w-6 h-6 fill-current text-c-gray-400 lg:hidden')
            @svg('images.star', 'w-10 h-10 fill-current text-c-gray-400 lg:hidden')
            @svg('images.star', 'w-6 h-6 fill-current text-c-gray-400 lg:hidden')
          </div>
          <h2 class="text-c-blue-200 font-bebas text-5xl mb-4 text-center lg:text-left lg:text-6xl xl:text-7xl lg:mb-8 xl:mb-12">{!! $title !!}</h2>
          <div class="prose max-w-none mb-8 text-c-gray-900 lg:mb-12 xl:mb-16">
            {!! $content !!}
          </div>
          <div class="text-center mb-4 lg:text-left lg:mb-0">
            <a class="block bg-c-red-100 text-white uppercase font-bold py-3 tracking-wider hover:shadow-lg hover:bg-c-red-200 md:inline-block  md:px-12" href="{!! $link['url'] !!}" target="{!! $link['target'] !!}">{!! $link['title'] !!}</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
