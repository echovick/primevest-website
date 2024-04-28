<nav class="bg-white-100 border-b-2 border-slate-100 h-30">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">

            <div class="flex space-x-4">
                <!-- logo -->
                <div>
                    <a href="{{ url('/') }}" class="py-5 px-2">
                        <img class="w-auto h-10" src="{{ asset('assets/imgs/primevest-logo.svg') }}" alt="Logo">
                    </a>
                </div>

                <!-- primary nav -->
                <div class="hidden md:flex items-center space-x-1 text-md pl-20">
                    <a href="{{ url('/') }}" class="py-5 px-3 text-gray-700 hover:text-gray-900">Home</a>
                    <a href="{{ url('about') }}" class="py-5 px-3 text-gray-700 hover:text-gray-900">About Us</a>
                    <a href="{{ url('why-us') }}" class="py-5 px-3 text-gray-700 hover:text-gray-900">Why Primevest</a>
                    <a href="{{ url('how-primevest-works') }}" class="py-5 px-3 text-gray-700 hover:text-gray-900">How it works</a>
                </div>
            </div>

            <!-- secondary nav -->
            <div class="hidden md:flex items-center space-x-1">
                <a href="" class="py-2 px-6 bg-white text-sm rounded-sm border border-primary mr-3">Login</a>
                <a href="" class="py-2 px-6 bg-primary text-white text-sm rounded-sm">Get Started</a>
            </div>

            <!-- mobile button goes here -->
            <div class="md:hidden flex items-center">
                <button class="mobile-menu-button">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- mobile menu -->
    <div class="mobile-menu hidden md:hidden b-10">
        <a href="{{ url('/') }}" class="block py-2 px-4 text-sm hover:bg-gray-200">Home</a>
        <a href="{{ url('about') }}" class="block py-2 px-4 text-sm hover:bg-gray-200">About Us</a>
        <a href="{{ url('why-us') }}" class="block py-2 px-4 text-sm hover:bg-gray-200">Why Primevest</a>
        <a href="{{ url('how-primevest-works') }}" class="block py-2 px-4 text-sm hover:bg-gray-200">How it works</a>
        <hr>
        <div class="flex row x-space-5 px-4 my-6">
            <a href="" class="py-2 px-6 bg-white text-sm rounded-sm border border-primary mr-3">Login</a>
            <a href="" class="py-2 px-6 bg-primary text-white text-sm rounded-sm">Get Started</a>
        </div>
    </div>
</nav>
