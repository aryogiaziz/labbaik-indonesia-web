<nav class="bg-[#318448] fixed w-full z-20 top-0 start-0 border-b border-[#318448]">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('/logo.png') }}" class="h-12" alt="Flowbite Logo">
            <span class="self-center text-2xl font-semibold whitespace-nowrap hidden md:block">Labbaik
                Indonesia</span>
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            {{-- <button type="button"
                class="text-black bg-[#F7CE46] hover:bg-[#f7a746] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm px-4 py-2 text-center">Login
            </button> --}}
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-[#F7CE46] rounded-lg md:hidden  focus:outline-none focus:ring-2 focus:ring-[#F7CE46]"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-[#318448] md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:[#318448] md:dark:bg-gray-900">
                <li>
                    <a href="{{ route('front.index') }}"
                        class="{{ request()->routeIs('front.index') ? 'bg-[#F7CE46] md:text-[#F7CE46]' : 'text-white hover:bg-[#F7CE46]' }} block py-2 px-3 rounded md:bg-transparent md:hover:bg-transparent md:p-0 "
                        aria-current="page">Beranda</a>
                </li>
                <li>
                    <a href="{{ route('front.about') }}"
                        class="{{ request()->routeIs('front.about') ? 'bg-[#F7CE46] md:text-[#F7CE46]' : 'text-white hover:bg-[#F7CE46]' }} block py-2 px-3 rounded  md:bg-transparent md:hover:bg-transparent md:p-0">
                        Tentang Kami
                    </a>
                </li>
                <li>
                    <a href="{{ route('front.contact') }}"
                        class="{{ request()->routeIs('front.contact') ? 'bg-[#F7CE46] md:text-[#F7CE46]' : 'text-white hover:bg-[#F7CE46]' }} block py-2 px-3 rounded  md:bg-transparent md:hover:bg-transparent md:p-0">
                        Kontak
                    </a>
                </li>
                <li>
                    <a href="{{ route('front.packet') }}"
                        class="{{ request()->routeIs('front.packet') ? 'bg-[#F7CE46] md:text-[#F7CE46]' : 'text-white hover:bg-[#F7CE46]' }} block py-2 px-3 rounded  md:bg-transparent md:hover:bg-transparent md:p-0">
                        Paket Umroh
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
