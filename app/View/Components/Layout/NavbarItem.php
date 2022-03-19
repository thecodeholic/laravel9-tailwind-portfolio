<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;
use function view;

class NavbarItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $href)
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layout.navbar-item');
    }
}
