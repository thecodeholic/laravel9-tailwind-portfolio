<!-- ====== Navbar Section Start -->
<header
    x-data="
        {
          navbarOpen: false
        }
      "
    class="bg-white w-full flex items-center"
>
    <div class="container">
        <div class="flex -mx-4 items-center justify-between relative">
            <div class="px-4 w-60 max-w-full">
                <a href="javascript:void(0)" class="w-full block py-5">
                    <img
                        src="https://cdn.tailgrids.com/1.0/assets/images/logo/logo.svg"
                        alt="logo"
                        class="w-full"
                    />
                </a>
            </div>
            <div class="flex px-4 justify-between items-center w-full">
                <div>
                    <button
                        @click="navbarOpen = !navbarOpen"
                        :class="navbarOpen && 'navbarTogglerActive' "
                        id="navbarToggler"
                        class="
                          block
                          absolute
                          right-4
                          top-1/2
                          -translate-y-1/2
                          lg:hidden
                          focus:ring-2
                          ring-primary
                          px-3
                          py-[6px]
                          rounded-lg
                        "
                    >
                <span
                    class="relative w-[30px] h-[2px] my-[6px] block bg-body-color"
                ></span>
                        <span
                            class="relative w-[30px] h-[2px] my-[6px] block bg-body-color"
                        ></span>
                        <span
                            class="relative w-[30px] h-[2px] my-[6px] block bg-body-color"
                        ></span>
                    </button>
                    <nav
                        :class="!navbarOpen && 'hidden' "
                        id="navbarCollapse"
                        class="
                          absolute
                          py-5
                          px-6
                          bg-white
                          shadow
                          rounded-lg
                          max-w-[250px]
                          w-full
                          lg:max-w-full lg:w-full
                          right-4
                          top-full
                          lg:block lg:static lg:shadow-none
                        "
                    >
                        <ul class="blcok lg:flex">
                            <x-navbar-item href="/about">About</x-navbar-item>
                            <x-navbar-item href="/projects">Projects</x-navbar-item>
                            <x-navbar-item href="/tutorials">Coding Tutorials</x-navbar-item>
                            <x-navbar-item href="/testimonials">Testimonials</x-navbar-item>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ====== Navbar Section End -->
