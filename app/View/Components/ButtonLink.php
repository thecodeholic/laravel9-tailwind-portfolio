<?php

namespace App\View\Components;

use Illuminate\View\Component;
use function view;

class ButtonLink extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $href, public string $variant = 'primary', public string $target = '_self')
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
        return view('components.button-link');
    }
}
