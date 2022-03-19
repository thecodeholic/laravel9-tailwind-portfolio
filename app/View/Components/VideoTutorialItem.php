<?php

namespace App\View\Components;

use Illuminate\View\Component;

class VideoTutorialItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $videoId, public string $title, public string $description)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.video-tutorial-item');
    }
}
