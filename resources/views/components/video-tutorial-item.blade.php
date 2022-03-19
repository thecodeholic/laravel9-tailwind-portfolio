<div class="w-full md:w-1/2 xl:w-1/3 px-4">
  <div class="bg-white rounded-lg mb-10">
    <!-- ====== Video Section Start -->
    <section x-data="{
          videoOpen: false,
          videoUrl: 'https://www.youtube.com/embed/{{ $videoId }}?autoplay=1',
          url: '',
        }">
      <div class="flex flex-wrap justify-center">
        <div class="w-full aspect-video relative z-20">
          <div class="w-full h-full absolute top-0 left-0 p-3">
            <!-- Thumbnail -->
            <img
              src="https://i.ytimg.com/vi/{{ $videoId }}/original.jpg"
              alt="image"
              class="w-full h-full object-center object-cover rounded-lg"
            />
            <!-- /Thumbnail -->
          </div>
          <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center bg-primary bg-opacity-0 z-10">
            <!-- Play Video -->
            <a
              href="javascript:void(0)"
              @click="videoOpen = true; url = videoUrl"
              class="flex items-center justify-center w-20 md:w-[70px] h-20 md:h-[70px] rounded-full bg-white text-primary absolute z-20"
            >
                <span
                  class="absolute w-full h-full rounded-full top-0 right-0 bg-white bg-opacity-20 z-[-1] animate-ping delay-300 duration-1000"
                ></span>

              <!-- Play Icon -->
              <svg
                width="23"
                height="27"
                viewBox="0 0 23 27"
                class="fill-current"
              >
                <path
                  d="M22.5 12.634C23.1667 13.0189 23.1667 13.9811 22.5 14.366L2.25 26.0574C1.58333 26.4423 0.750001 25.9611 0.750001 25.1913L0.750002 1.80866C0.750002 1.03886 1.58334 0.557731 2.25 0.942631L22.5 12.634Z"
                />
              </svg>
              <!-- /Play Icon -->
            </a>
            <!-- /Play Video -->
          </div>
        </div>
      </div>

      <!-- Video -->
      <div
        x-show="videoOpen"
        x-transition
        class="fixed top-0 left-0 w-full h-screen flex items-center justify-center z-50 bg-black bg-opacity-70"
      >
        <div @click.outside="videoOpen = false; url = ''" class="w-11/12 md:w-10/12 xl:w-8/12 mx-auto bg-white">
          <iframe
            class="w-full aspect-video"
            x-bind:src="url"
          >
          </iframe>
        </div>
        <button
          @click="videoOpen = false"
          class="absolute top-0 right-0 w-20 h-20 flex items-center justify-center cursor-pointer text-body-color hover:bg-black"
        >
          <svg viewBox="0 0 16 15" class="fill-current w-8 h-8">
            <path
              d="M3.37258 1.27L8.23258 6.13L13.0726 1.29C13.1574 1.19972 13.2596 1.12749 13.373 1.07766C13.4864 1.02783 13.6087 1.00141 13.7326 1C13.9978 1 14.2522 1.10536 14.4397 1.29289C14.6272 1.48043 14.7326 1.73478 14.7326 2C14.7349 2.1226 14.7122 2.24439 14.6657 2.35788C14.6193 2.47138 14.5502 2.57419 14.4626 2.66L9.57258 7.5L14.4626 12.39C14.6274 12.5512 14.724 12.7696 14.7326 13C14.7326 13.2652 14.6272 13.5196 14.4397 13.7071C14.2522 13.8946 13.9978 14 13.7326 14C13.6051 14.0053 13.478 13.984 13.3592 13.9375C13.2404 13.8911 13.1326 13.8204 13.0426 13.73L8.23258 8.87L3.38258 13.72C3.29809 13.8073 3.19715 13.8769 3.08559 13.925C2.97402 13.9731 2.85405 13.9986 2.73258 14C2.46737 14 2.21301 13.8946 2.02548 13.7071C1.83794 13.5196 1.73258 13.2652 1.73258 13C1.73025 12.8774 1.753 12.7556 1.79943 12.6421C1.84586 12.5286 1.91499 12.4258 2.00258 12.34L6.89258 7.5L2.00258 2.61C1.83777 2.44876 1.74112 2.23041 1.73258 2C1.73258 1.73478 1.83794 1.48043 2.02548 1.29289C2.21301 1.10536 2.46737 1 2.73258 1C2.97258 1.003 3.20258 1.1 3.37258 1.27Z"
            />
          </svg>
        </button>
      </div>
      <!-- /Video -->
    </section>
    <!-- ====== Video Section End -->

    <!-- Video Content -->
    <div class="p-6 xl:p-7 2xl:p-9 h-[320px] overflow-hidden text-center">
      <h3>
        <a
          href="https://youtu.be/{{ $videoId }}"
          target="_blank "
          class="font-bold text-dark text-lg mb-4 block hover:text-primary"
        >
          {{ $title }}
        </a>
      </h3>
      <p class="text-base text-body-color leading-relaxed mb-7">
        {{ $description }}
      </p>
    </div>
    <!-- /Video Content -->
  </div>
</div>
