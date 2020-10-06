<div class="relative">
  <div class="w-full h-full">
    <video class="object-cover w-full h-full object-center absolute z-10" autoplay loop muted poster="{!! $poster !!}">
      <source id="bg-vid" src="{!! $bg['url'] !!}" type="video/mp4">
    </video>
  </div>

  <div class="relative z-20 container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center text-white pt-24 pb-40 lg:pt-32 lg:pb-48">
      <div class="flex items-center justify-center text-c-gray-400 font-bebas text-3xl tracking-wide mb-4 md:space-x-4 lg:text-4xl lg:space-x-6 xl:text-5xl">
        @svg('images.star', 'hidden w-4 h-4 fill-current text-white md:block lg:h-5 lg:w-5')
        @svg('images.star', 'hidden w-4 h-4 fill-current text-white md:block lg:h-5 lg:w-5')
        @svg('images.star', 'hidden w-4 h-4 fill-current text-white md:block lg:h-5 lg:w-5')
        <div class="hidden md:block">{!! $pretitle !!}</div>
        <div class="md:hidden">{!! $mobile !!}</div>
        @svg('images.star', 'hidden w-4 h-4 fill-current text-white md:block lg:h-5 lg:w-5')
        @svg('images.star', 'hidden w-4 h-4 fill-current text-white md:block lg:h-5 lg:w-5')
        @svg('images.star', 'hidden w-4 h-4 fill-current text-white md:block lg:h-5 lg:w-5')
      </div>
      <h1 class="uppercase font-bebas text-6xl tracking-wider md:text-6xl lg:text-7xl xl:text-8xl 2xl:text-9xl">{!! $title !!}</h1>
      <a class="inline-block bg-white rounded-full p-4 mt-8 group hover:bg-c-red-100 hover:cursor-pointer transition duration-200" href="{!! $link !!}" data-lity>
        <svg class="h-10 w-10 fill-current text-c-red-100 ml-1 -mr-1 group-hover:text-white md:h-10 md:w-10 lg:h-12 lg:w-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M4 4l12 6-12 6z"/></svg>
      </a>
      <div class="hidden uppercase text-sm mt-8 md:block lg:text-base">{!! $content !!}</div>
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
