<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;
use function view;

class NavbarItem extends Component
{
    public string $href = '#';
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $href)
    {
        $this->href = $href;
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
