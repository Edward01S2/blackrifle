<div class="{{ $block->classes }} bg-c-blue-200">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="py-16 md:py-20 lg:py-24 2xl:py-28">
      <h2 class="md:hidden text-white font-bebas text-5xl mb-12 text-center">{!! $mobile !!}</h2>
      <h2 class="hidden text-white font-bebas text-5xl mb-4 text-center md:mb-8 md:block lg:text-6xl xl:text-7xl">{!! $title !!}</h2>
      <div class="hidden prose max-w-none text-c-gray-100 md:block md:text-center md:mb-12 xl:max-w-5xl xl:mx-auto 2xl:max-w-6xl">
        {!! $content !!}
      </div>
      <div class="subscribe-form px-8 md:max-w-2xl md:mx-auto xl:max-w-3xl 2xl:max-w-4xl">
        @include('partials.form', ['form' => $form])
      </div>
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
