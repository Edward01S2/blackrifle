<div class="relative">
  <div class="w-full h-full">
    <video class="absolute z-10 object-cover object-center w-full h-full" autoplay loop muted poster="{!! $poster !!}">
      <source id="bg-vid" src="{!! $bg['url'] !!}" type="video/mp4">
    </video>
    <div class="absolute z-20 w-full h-full bg-black opacity-25"></div>
  </div>

  <div class="container relative z-20 px-4 mx-auto sm:px-6 lg:px-8">
    <div class="pt-24 pb-40 text-center text-white lg:pt-32 lg:pb-48">
      <div class="flex items-center justify-center mb-4 text-3xl tracking-wide text-c-gray-400 font-bebas md:space-x-4 lg:text-4xl lg:space-x-6 xl:text-5xl">
        @svg('images.star', 'hidden w-4 h-4 fill-current text-white md:block lg:h-5 lg:w-5')
        @svg('images.star', 'hidden w-4 h-4 fill-current text-white md:block lg:h-5 lg:w-5')
        @svg('images.star', 'hidden w-4 h-4 fill-current text-white md:block lg:h-5 lg:w-5')
        <div class="hidden md:block">{!! $pretitle !!}</div>
        <div class="md:hidden">{!! $mobile !!}</div>
        @svg('images.star', 'hidden w-4 h-4 fill-current text-white md:block lg:h-5 lg:w-5')
        @svg('images.star', 'hidden w-4 h-4 fill-current text-white md:block lg:h-5 lg:w-5')
        @svg('images.star', 'hidden w-4 h-4 fill-current text-white md:block lg:h-5 lg:w-5')
      </div>
      <h1 class="text-6xl tracking-wider uppercase font-bebas md:text-6xl lg:text-7xl xl:text-8xl 2xl:text-9xl">{!! $title !!}</h1>
      <a class="inline-block p-4 mt-8 transition duration-200 bg-white rounded-full group hover:bg-c-red-100 hover:cursor-pointer" href="{!! $link !!}" data-lity>
        <svg class="w-10 h-10 ml-1 -mr-1 fill-current text-c-red-100 group-hover:text-white md:h-10 md:w-10 lg:h-12 lg:w-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M4 4l12 6-12 6z"/></svg>
      </a>
      <div class="hidden mt-8 text-sm uppercase md:block lg:text-base">{!! $content !!}</div>
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
