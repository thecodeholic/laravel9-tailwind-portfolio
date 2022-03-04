<?php

namespace App\View\Components;

use Illuminate\Support\Arr;
use Illuminate\View\Component;

class PortfolioSection extends Component
{
    public array $items = [];

    public array $tabs = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Laravel', 'Tailwind.css', 'Vue3'],
                'title' => 'Full Stack app with Laravel, Tailwindcss and Vue 3',
                'image' => 'https://yt3.ggpht.com/fIPpjsL21weqiADj0f8lZeNfckZezeBktE6jZ9J4PYcTdunSMXWqqCbHbAGRJsangeZzOzcCk7gpE3U=s800-c-fcrop64=1,00000000ffffffff-nd-v1',
                'github' => 'https://github.com/thecodeholic/laravel-vue-survey'
            ],
            [
                'category' => ['Yii2', 'Bootstrap'],
                'title' => 'E-commerce website with Yii2',
                'image' => 'https://yt3.ggpht.com/fIPpjsL21weqiADj0f8lZeNfckZezeBktE6jZ9J4PYcTdunSMXWqqCbHbAGRJsangeZzOzcCk7gpE3U=s800-c-fcrop64=1,00000000ffffffff-nd-v1',
                'github' => 'https://github.com/thecodeholic/yii2-ecommerce-website'
            ],
            [
                'category' => ['PHP', 'Laravel'],
                'title' => 'REST API with Laravel 8 and Sanctum',
                'image' => 'https://yt3.ggpht.com/fIPpjsL21weqiADj0f8lZeNfckZezeBktE6jZ9J4PYcTdunSMXWqqCbHbAGRJsangeZzOzcCk7gpE3U=s800-c-fcrop64=1,00000000ffffffff-nd-v1',
                'github' => 'https://github.com/thecodeholic/laravel-image-manipulation-rest-api'
            ],
            [
                'category' => ['PHP'],
                'title' => 'PHP MVC Framework',
                'image' => 'https://yt3.ggpht.com/fIPpjsL21weqiADj0f8lZeNfckZezeBktE6jZ9J4PYcTdunSMXWqqCbHbAGRJsangeZzOzcCk7gpE3U=s800-c-fcrop64=1,00000000ffffffff-nd-v1',
                'github' => 'https://github.com/thecodeholic/php-mvc-framework'
            ],
            [
                'category' => ['Yii2', 'Bootstrap'],
                'title' => 'YouTube clone with Yii2',
                'image' => 'https://yt3.ggpht.com/fIPpjsL21weqiADj0f8lZeNfckZezeBktE6jZ9J4PYcTdunSMXWqqCbHbAGRJsangeZzOzcCk7gpE3U=s800-c-fcrop64=1,00000000ffffffff-nd-v1',
                'github' => 'https://github.com/thecodeholic/Yii2-Youtube-Clone'
            ],
            [
                'category' => ['Yii2', 'VueJs'],
                'title' => 'Yii2 + VueJs Notes application',
                'image' => 'https://yt3.ggpht.com/fIPpjsL21weqiADj0f8lZeNfckZezeBktE6jZ9J4PYcTdunSMXWqqCbHbAGRJsangeZzOzcCk7gpE3U=s800-c-fcrop64=1,00000000ffffffff-nd-v1',
                'github' =>  'https://github.com/thecodeholic/vue.js-yii2-notes'
            ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.portfolio-section');
    }
}
