<div
  x-data="{categories: {{ json_encode($categories) }} }"
  :class="showCards == 'all' || categories.includes(showCards) ? 'block' : 'hidden' "
  class="w-full md:w-1/2 xl:w-1/3 px-4"
>
  <div class="relative mb-12">
    <div class="rounded-lg overflow-hidden">
      <img
        src="{{ $image }}"
        alt="portfolio"
        class="w-full h-[240px] object-cover"
      />
    </div>
    <div class="text-center bg-white dark:bg-slate-800 relative z-10 py-9 px-3 rounded-lg shadow-lg mx-7 -mt-10 h-[260px]">
      <span class="text-sm text-primary font-semibold block mb-2">
        {{ implode(", ", $categories) }}
      </span>
      <h3 class="font-bold text-lg text-dark dark:text-gray-300 mb-4">
        {{ $title }}
      </h3>
      <a
        href="{{$github}}"
        target="_blank"
        class="
          text-body-color text-sm
          font-semibold
          py-3
          px-7
          inline-block
          border
          rounded-md
          hover:bg-primary
          hover:border-primary
          hover:text-white
          transition
        "
      >
        View Details
      </a>
    </div>
  </div>
</div>
