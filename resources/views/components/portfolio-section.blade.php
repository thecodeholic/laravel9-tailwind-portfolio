<!-- ====== Portfolio Section Start -->
<section
    x-data="
        {
          showCards: 'all',
          activeClasses: 'bg-primary text-white',
          inactiveClasses: 'text-body-color hover:bg-primary hover:text-white',
        }
      "
    class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px]"
>
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="text-center mx-auto mb-[60px] max-w-[510px]">
              <span class="font-semibold text-lg text-primary mb-2 block">
                My Portfolio
              </span>
                    <h2
                        class="
                          font-bold
                          text-3xl
                          sm:text-4xl
                          md:text-[40px]
                          text-dark
                          mb-4
                        "
                    >
                        My Recent Projects
                    </h2>
                    <p class="text-base text-body-color">
                        You learn most by building projects. Go ahead and build something right now.
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap justify-center -mx-4">
            <div class="w-full px-4">
                <ul class="flex flex-wrap justify-center mb-12 space-x-1">
                    <li class="mb-1">
                        <button
                            @click="showCards = 'all' "
                            :class="showCards == 'all' ? activeClasses : inactiveClasses "
                            class="
                                inline-block
                                py-2
                                md:py-3
                                px-5
                                lg:px-8
                                rounded-lg
                                text-base
                                font-semibold
                                text-center
                                transition
                              "
                        >
                            All Projects
                        </button>
                    </li>
                    <li class="mb-1">
                        <button
                            @click="showCards = 'branding' "
                            :class="showCards == 'branding' ? activeClasses : inactiveClasses "
                            class="
                                inline-block
                                py-2
                                md:py-3
                                px-5
                                lg:px-8
                                rounded-lg
                                text-base
                                font-semibold
                                text-center
                                transition
                              "
                        >
                            Laravel
                        </button>
                    </li>
                    <li class="mb-1">
                        <button
                            @click="showCards = 'design' "
                            :class="showCards == 'design' ? activeClasses : inactiveClasses "
                            class="
                                inline-block
                                py-2
                                md:py-3
                                px-5
                                lg:px-8
                                rounded-lg
                                text-base
                                font-semibold
                                text-center
                                transition
                              "
                        >
                            Vue.js
                        </button>
                    </li>
                    <li class="mb-1">
                        <button
                            @click="showCards = 'marketing' "
                            :class="showCards == 'marketing' ? activeClasses : inactiveClasses "
                            class="
                                inline-block
                                py-2
                                md:py-3
                                px-5
                                lg:px-8
                                rounded-lg
                                text-base
                                font-semibold
                                text-center
                                transition
                              "
                        >
                            Yii2
                        </button>
                    </li>
                    <li class="mb-1">
                        <button
                            @click="showCards = 'development' "
                            :class="showCards == 'development' ? activeClasses : inactiveClasses "
                            class="
                                inline-block
                                py-2
                                md:py-3
                                px-5
                                lg:px-8
                                rounded-lg
                                text-base
                                font-semibold
                                text-center
                                transition
                              "
                        >
                            Tailwindcss
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="flex flex-wrap -mx-4">
            @for ($i = 0; $i<6; $i++)
                <x-portfolio-item></x-portfolio-item>
            @endfor
        </div>
    </div>
</section>
<!-- ====== Portfolio Section End -->
