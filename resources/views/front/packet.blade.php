@push('css')
    <link rel="stylesheet" href="{{ asset('/assets/libraries/owl-carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/libraries/owl-carousel/assets/owl.theme.default.css') }}">
@endpush

@section('title', 'About | Labbaik Indonesia')

<x-front.layout>

    <section class="py-14 bg-[#F9F9F9] mt-16">
        <div class="max-w-screen-xl mx-auto flex flex-col gap-6 px-3">
            <div class="flex flex-col gap-2">
                <h1 class="text-5xl font-bold">Paket Umroh</h1>
                <p class="text-xl font-semibold max-w-xl">
                    Labbaik Indonesia
                </p>
            </div>
        </div>
    </section>

    <section class="py-14">
        <div class="max-w-screen-xl mx-auto flex flex-col md:flex-row px-3 gap-6">
            {{-- <div class="md:max-w-xs bg-white border border-gray-200 rounded-lg shadow md:sticky top-40 h-fit">
                <div class="p-5 flex flex-col gap-3">
                    <!-- <div>
                        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">Harga</label>
                        <div class="flex gap-3">
                            <input type="text" id="small-input" placeholder="Min"
                                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-[#318448] focus:border-[#318448]">
                            <input type="text" id="small-input" placeholder="Min"
                                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-[#318448]focus:border-[#318448]">
                        </div>
                    </div> -->

                    <!-- @foreach (['Filter 1', 'Filter 2'] as $filter)
                        <div>
                            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">
                                {{ $filter }}
                            </label>
                            @for ($j = 0; $j < 4; $j++)
                                <div class="flex items-center mb-4">
                                    <input id="default-checkbox" type="checkbox" value=""
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                                    <label for="default-checkbox" class="ms-2 text-sm text-gray-900">
                                        Default checkbox
                                    </label>
                                </div>
                            @endfor
                        </div>
                    @endforeach -->
                </div>
            </div> --}}

            <div class="grid md:grid-cols-3 gap-6">
                @foreach ($pakets as $paket)
                    <div class="w-full max-w-sm p-4 bg-[#E7C45E] border border-gray-200 rounded-lg shadow sm:p-8 ">
                        <h5 class="mb-4 text-xl font-medium text-white ">
                            {{ $paket->name }}
                        </h5>
                        <div class="mb-3 flex items-baseline text-white">
                            <span class="text-3xl font-semibold">Rp.</span>
                            <span class="text-4xl font-bold tracking-tight">{{ number_format($paket->harga) }},-</span>
                        </div>
                        <p class="text-gray-500">
                            All the basic features to boost your freelance career
                        </p>
                        <ul role="list" class="space-y-5 my-7">
                            <li class="grid grid-cols-2 content-center text-white">
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                    </svg>
                                    <span class="ms-3 text-nowrap text-base font-normal">
                                        Jadwal Keberangkatan
                                    </span>
                                </div>
                                <span class="place-self-end text-nowrap text-base font-normal">
                                    {{ \Carbon\Carbon::parse($paket->jadwal_keberangkatan)->format('d M Y') }}
                                </span>
                            </li>

                            <li class="grid grid-cols-2 content-center text-white">
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <span class="ms-3 text-nowrap text-base font-norma">
                                        Durasi Paket
                                    </span>
                                </div>
                                <span class="place-self-end text-nowrap text-base font-normal">
                                    {{ $paket->durasi }}
                                </span>
                            </li>

                            <li class="grid grid-cols-2 content-center text-white">
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                                    </svg>
                                    <span class="ms-3 text-nowrap text-base font-normal">
                                        Hotel
                                    </span>
                                </div>
                                <span class="place-self-end text-nowrap text-base font-normal">
                                    {{ $paket->hotel }}
                                </span>
                            </li>

                            <li class="grid grid-cols-2 content-center text-white">
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                    </svg>
                                    <span class="ms-3 text-nowrap text-base font-normal">
                                        Ketersedian Zeus
                                    </span>
                                </div>
                                <span class="place-self-end text-nowrap text-base font-normal">
                                    {{ $paket->ketersediaan }}
                                </span>
                            </li>

                            <li class="grid grid-cols-2 content-center text-white">
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path
                                            d="M15.3937 1.3638L11 4L3 2L2 3L7.5 7.5L5 11H2L1 12L3.5 13.5L4.5 14.5L6 17L7 16V13L10.5 10.5L15 16L16 15L14 7L16.6362 2.60634C16.85 2.24999 16.7939 1.79385 16.5 1.5C16.2061 1.20615 15.75 1.14999 15.3937 1.3638Z"
                                            stroke="currentColor" />
                                    </svg>
                                    <span class="ms-3 text-nowrap text-base font-normal">
                                        Berangkat Dari
                                    </span>
                                </div>
                                <span class="place-self-end text-nowrap text-base font-normal">
                                    {{ $paket->berangkat_dari }}
                                </span>
                            </li>
                        </ul>

                        <a href="https://wa.me/+6289623847260?text=paket {{ $paket->name }}" target="_blank"
                            class="text-white bg-[#318448] hover:bg-[#428431] focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">
                            Choose plan
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>


    @push('script')
    @endpush

</x-front.layout>
