<x-app-layout>
    <x-hero></x-hero>
    <x-call-to-action>
        <x-slot:title>
            <span class="text-white text-base font-semibold mb-2">
                Check my PHP Developer Roadmap
            </span>
            <h2
                class=" text-white font-bold text-3xl sm:text-[38px] leading-tight mb-6 sm:mb-8 lg:mb-0 "
            >
                Start Learning <br class="hidden xs:block"/>
                PHP For FREE
            </h2>
        </x-slot>
        <a
            href="javascript:void(0)"
            class=" inline-block py-4 px-6 md:px-9 lg:px-6 xl:px-9 rounded text-base font-medium bg-gray-900 hover:bg-gray-800 text-white mr-4 my-1 transition "
        >

            View on Github
        </a>
        <a
            href="javascript:void(0)"
            class=" inline-block py-4 px-6 md:px-9 lg:px-6 xl:px-9 rounded text-base font-medium bg-red-700 transition hover:bg-opacity-90 text-white my-1 "
        >
            Watch on YouTube
        </a>
    </x-call-to-action>
    <x-about-section></x-about-section>
    <x-portfolio-section></x-portfolio-section>
    <x-video-tutorials></x-video-tutorials>
    <x-testimonials></x-testimonials>
    <x-section.contact></x-section.contact>
    <x-footer></x-footer>
</x-app-layout>
