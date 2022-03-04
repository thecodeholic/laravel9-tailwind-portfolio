<div
  :class="showCards == 'all' || $attributes->get('category').includes(showCards) ? 'block' : 'hidden' "
  class="w-full md:w-1/2 xl:w-1/3 px-4"
>
  <h1 x-text="showCards"></h1>
  <div class="relative mb-12">
    <div class="rounded-lg overflow-hidden">
      <img
        src="{{ $attributes->get('image') }}"
        alt="portfolio"
        class="w-full"
      />
    </div>
    <div
      class="
        text-center
        bg-white
        relative
        z-10
        py-9
        px-3
        rounded-lg
        shadow-lg
        mx-7
        -mt-20
      "
    >
      <span class="text-sm text-primary font-semibold block mb-2">
        {{ implode(", ", $attributes->get('category')) }}
      </span>
      <h3 class="font-bold text-lg text-dark mb-4">
        {{ $attributes->get('title') }}
      </h3>
      <a
        href="javascript:void(0)"
        class="
          text-body-color text-sm
          font-semibold
          py-3
          px-7
          inline-block
          border
          rounded-md
          hover:bg-primary hover:border-primary hover:text-white
          transition
        "
      >
        View Details
      </a>
    </div>
  </div>
</div>
