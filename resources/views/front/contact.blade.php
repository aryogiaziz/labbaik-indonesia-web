@push('css')
    <link rel="stylesheet" href="{{ asset('/assets/libraries/owl-carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/libraries/owl-carousel/assets/owl.theme.default.css') }}">
@endpush

@section('title', 'About | Labbaik Indonesia')

<x-front.layout>

    <section class="py-14 bg-[#F9F9F9] mt-16">
        <div class="max-w-screen-xl mx-auto flex flex-col gap-6 px-3">
            <div class="flex flex-col gap-2">
                <h1 class="text-5xl font-bold">Hubungi Kami</h1>
                <p class="text-xl font-semibold max-w-xl">
                    It is a long established fact that a reader will be distracted by the readable content of a page
                    when looking at its layout.
                </p>
            </div>
        </div>
    </section>

    <section class="py-14">
        <div class="max-w-screen-xl mx-auto grid md:grid-cols-3 justify-between items-start gap-6 px-3">

            <div class="flex flex-col gap-3">
                <div class="flex items-center gap-3">
                    <svg width="24" height="18" viewBox="0 0 24 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M2.31284 6.32461L23.3183 1L15.2867 17.5115L10.7819 10.2093L0.999996 6.6574L2.31284 6.32461Z"
                            fill="#E7C45E" stroke="#E7C45E" stroke-linejoin="round" />
                    </svg>
                    <h3 class="font-semibold text-lg">Kantor Labbaik Travel</h3>
                </div>
                <ul class="px-9 flex flex-col gap-3">
                    <li class="flex gap-3">
                        <svg class="" width="24" height="24" viewBox="0 0 17 17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.5 14.875C8.5 14.875 12.75 10.4125 12.75 6.375C12.75 4.02779 10.8472 2.125 8.5 2.125C6.15279 2.125 4.25 4.02779 4.25 6.375C4.25 10.4125 8.5 14.875 8.5 14.875Z"
                                stroke="black" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.49999 7.08332C8.89119 7.08332 9.20832 6.76619 9.20832 6.37499C9.20832 5.98379 8.89119 5.66666 8.49999 5.66666C8.10879 5.66666 7.79166 5.98379 7.79166 6.37499C7.79166 6.76619 8.10879 7.08332 8.49999 7.08332Z"
                                stroke="black" />
                        </svg>
                        <span>
                            lorem orem s ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod
                        </span>
                    </li>
                    <li class="flex gap-3">
                        <svg class="" width="24" height="24" viewBox="0 0 17 17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.5 14.875C8.5 14.875 12.75 10.4125 12.75 6.375C12.75 4.02779 10.8472 2.125 8.5 2.125C6.15279 2.125 4.25 4.02779 4.25 6.375C4.25 10.4125 8.5 14.875 8.5 14.875Z"
                                stroke="black" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.49999 7.08332C8.89119 7.08332 9.20832 6.76619 9.20832 6.37499C9.20832 5.98379 8.89119 5.66666 8.49999 5.66666C8.10879 5.66666 7.79166 5.98379 7.79166 6.37499C7.79166 6.76619 8.10879 7.08332 8.49999 7.08332Z"
                                stroke="black" />
                        </svg>
                        <span>
                            lorem orem s ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod
                        </span>
                    </li>
                </ul>
            </div>

            <div class="flex flex-col gap-4">
                <div class="flex flex-col gap-3">
                    <div class="flex items-center gap-3">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10.7408 16.4036L13.3055 13.8389C13.6481 13.4963 14.1871 13.4486 14.5846 13.7258L18.1353 16.2023C18.6459 16.5584 18.7106 17.2894 18.2704 17.7296L17.8841 18.1159C17.1739 18.8261 16.1547 19.1338 15.1986 18.826C13.1336 18.1613 9.37672 16.6179 6.26175 13.503C3.14678 10.388 1.6034 6.63109 0.938708 4.56614C0.63093 3.60999 0.938593 2.59084 1.64885 1.88058L2.03512 1.49432C2.47529 1.05415 3.20634 1.11879 3.56244 1.62937L6.03888 5.18011C6.3161 5.57758 6.26844 6.11661 5.92578 6.45927L3.36113 9.02391"
                                fill="#E7C45E" />
                            <path
                                d="M10.7408 16.4036L13.3055 13.8389C13.6481 13.4963 14.1871 13.4486 14.5846 13.7258L18.1353 16.2023C18.6459 16.5584 18.7106 17.2894 18.2704 17.7296L17.8841 18.1159C17.1739 18.8261 16.1547 19.1338 15.1986 18.826C13.1336 18.1613 9.37672 16.6179 6.26175 13.503C3.14678 10.388 1.6034 6.63109 0.938708 4.56614C0.630929 3.60999 0.938593 2.59084 1.64885 1.88058L2.03512 1.49432C2.47529 1.05415 3.20634 1.11879 3.56244 1.62937L6.03888 5.18011C6.3161 5.57758 6.26844 6.11661 5.92578 6.45927L3.36113 9.02391"
                                stroke="#E7C45E" stroke-linecap="round" />
                        </svg>


                        <h3 class="font-semibold text-lg">Telp & Whatsapp</h3>
                    </div>
                    <ul class="px-9 flex flex-col gap-3">
                        <li class="flex gap-3">
                            <span class="font-semibold underline">08xxxxxxxxx</span>
                            <span>
                                Customer Service
                            </span>
                        </li>
                        <li class="flex gap-3">
                            <span class="font-semibold underline">08xxxxxxxxx</span>
                            <span>
                                Customer Service
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="flex flex-col gap-3">
                    <div class="flex items-center gap-3">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 6L12 14L21 6" stroke="#E7C45E" />
                            <rect x="2" y="5" width="20" height="14" stroke="#E7C45E" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <h3 class="font-semibold text-lg">Email</h3>
                    </div>
                    <ul class="px-9 flex flex-col gap-3">
                        <li class="flex gap-3">
                            <span class="font-semibold underline">loremipsum@gmail.com</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="font-semibold underline">loremipsum@gmail.com</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col gap-3">
                <div class="flex items-center gap-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M22.5 12C22.5 17.799 17.799 22.5 12 22.5C6.20101 22.5 1.5 17.799 1.5 12C1.5 6.20101 6.20101 1.5 12 1.5C17.799 1.5 22.5 6.20101 22.5 12Z"
                            stroke="#E7C45E" />
                        <path d="M12 5V12L16 16" stroke="#E7C45E" stroke-linecap="round" />
                    </svg>

                    <h3 class="font-semibold text-lg">Jam Operasional</h3>
                </div>
                <ul class="px-9 flex flex-col gap-3">
                    @php
                        $jadwal = [
                            [
                                'hari' => 'Senin',
                                'jam' => '08:30 - 17:30 WIB',
                            ],
                            [
                                'hari' => 'Selasa',
                                'jam' => '08:30 - 17:30 WIB',
                            ],
                            [
                                'hari' => 'Rabu',
                                'jam' => '08:30 - 17:30 WIB',
                            ],
                            [
                                'hari' => 'Kamis',
                                'jam' => '08:30 - 17:30 WIB',
                            ],
                            [
                                'hari' => 'Jumat',
                                'jam' => '08:30 - 17:30 WIB',
                            ],
                            [
                                'hari' => 'Sabtu',
                                'jam' => '08:30 - 17:30 WIB',
                            ],
                            [
                                'hari' => 'Minggu',
                                'jam' => 'Libur',
                            ],
                        ];
                    @endphp
                    @foreach ($jadwal as $j)
                        <li class="flex gap-3">
                            <span class="font-semibold underline">{{ $j['hari'] }}</span>
                            <span>
                                {{ $j['jam'] }}
                            </span>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>


    </section>


    @push('script')
    @endpush

</x-front.layout>
