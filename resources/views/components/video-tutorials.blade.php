@php
    $videoTutorials = [
        [
            'videoId' => 'yXzWfZ4N4xU',
            'title' => 'PHP Tutorial for Absolute Beginners - PHP Course 2021',
            'description' => 'This is 5 hours PHP Course and in this course you will learn all the basics you need in PHP. This is good starting point if you want to learn PHP.'
        ],
        [
            'videoId' => 'WLQDpY7lOLg',
            'title' => 'Full Stack App with Laravel, Tailwindcss and Vue 3',
            'description' => 'You will build a Full stack application, which includes Laravel REST API with authentication, Tailwind.css and Vue 3 with Vuex for UI'
        ],
        [
            'videoId' => 'WKy-N0q3WRo',
            'title' => 'Learn How to build PHP MVC Framework',
            'description' => 'Video playlist which will show you how to build an MVC framework from scratch. This will help you understand how modern PHP frameworks work.'
        ],
    ]
@endphp

<!-- ====== Cards Section Start -->
<section class="dark:bg-slate-800 pt-24 pb-16">
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="text-center mx-auto mb-[60px] max-w-[510px]">
                    <h2 class="font-bold text-3xl text-dark dark:text-gray-300 mb-4">
                        Video Tutorials
                    </h2>
                    <p class="text-base text-body-color">
                        You learn most by building projects. Go ahead and build something right now.
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap -mx-4">
            @foreach($videoTutorials as $video)
                <x-video-tutorial-item :video-id="$video['videoId']" :title="$video['title']" :description="$video['description']"></x-video-tutorial-item>
            @endforeach
        </div>
      <div class="flex justify-center">
        <a href="https://youtube.com/TheCodeholic"
           target="_blank"
           class="py-4 px-10 lg:px-8 xl:px-10 inline-flex items-center justify-center text-center text-white text-base bg-primary hover:bg-opacity-90 font-normal rounded-lg">
            View All Tutorials
        </a>
      </div>
    </div>
</section>
<!-- ====== Cards Section End -->
