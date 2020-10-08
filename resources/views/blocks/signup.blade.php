<div class="{{ $block->classes }} bg-c-blue-200">
  <div class="container px-4 mx-auto sm:px-6 lg:px-8">
    <div class="px-4 py-16 md:py-20 md:px-8 lg:py-24 2xl:py-28">
      {{-- <h2 class="mb-12 text-5xl text-center text-white md:hidden font-bebas">{!! $mobile !!}</h2> --}}
      <h2 class="mb-8 text-5xl text-center text-white font-bebas md:mb-8 md:block lg:text-6xl xl:text-7xl">{!! $title !!}</h2>
      <div class="mb-8 prose max-w-none text-c-gray-100 md:block md:text-center md:mb-12 xl:max-w-5xl xl:mx-auto 2xl:max-w-6xl">
        {!! $content !!}
      </div>
      <div class="subscribe-form md:max-w-2xl md:mx-auto xl:max-w-3xl 2xl:max-w-4xl">
        @include('partials.form', ['form' => $form])
      </div>
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
