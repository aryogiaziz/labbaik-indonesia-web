@push('css')
    <link rel="stylesheet" href="{{ asset('/assets/libraries/owl-carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/libraries/owl-carousel/assets/owl.theme.default.css') }}">
@endpush

@section('title', 'About | Labbaik Indonesia')

<x-front.layout>

    <section class="py-14 bg-[#F9F9F9] mt-16">
        <div class="max-w-screen-xl mx-auto flex flex-col gap-6 px-3">
            <div class="flex flex-col gap-2">
                <h1 class="text-5xl font-bold">Tentang Kami</h1>
                <p class="text-xl font-semibold max-w-xl">
                    It is a long established fact that a reader will be distracted by the readable content of a page
                    when looking at its layout.
                </p>
            </div>
        </div>
    </section>

    <section class="py-14">
        <div class="max-w-screen-xl mx-auto grid md:grid-cols-2 justify-items-center items-center gap-6 px-3">
            <div>
                <svg width="346" height="317" viewBox="0 0 346 317" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_8_69)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M105.575 161.99C106.134 163.92 107.299 165.362 108.767 165.942L168.599 189.57C169.348 189.866 170.139 189.923 170.914 189.751C171.651 189.588 172.375 189.218 173.036 188.653L226.795 142.709C228.234 141.48 229.225 139.456 229.485 137.219C229.746 134.981 229.247 132.776 228.131 131.236L159.134 35.9894C157.955 34.3635 156.234 33.6712 154.507 34.1371C152.782 34.6016 151.27 36.1632 150.449 38.3278L105.856 155.89C105.118 157.833 105.016 160.059 105.575 161.99Z"
                            fill="#FFCC02" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M177.799 209.882C177.596 207.157 176.266 204.933 174.366 204.141L17.4147 138.74C15.238 137.833 12.7788 138.993 11.3325 141.61C9.88714 144.226 9.78698 147.699 11.0851 150.198L85.6972 293.857C86.8251 296.029 88.7425 296.984 90.6313 296.567C91.443 296.387 92.2492 295.954 92.9853 295.255L175.324 216.997C177.044 215.362 178.002 212.607 177.799 209.882Z"
                            fill="#EFAE07" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M327.62 77.8197C325.891 75.9231 323.366 75.842 321.381 77.619L86.8989 287.487C84.7763 289.386 83.8105 292.91 84.5702 295.99C85.3295 299.071 87.6118 300.873 90.0741 300.352L268.917 262.476L268.943 262.47C270.849 262.054 272.515 260.324 273.298 257.905L328.937 85.9104C329.882 82.9904 329.349 79.7158 327.62 77.8197Z"
                            fill="#FFCC02" />
                    </g>
                    <defs>
                        <clipPath id="clip0_8_69">
                            <rect width="346" height="317" fill="white" />
                        </clipPath>
                    </defs>
                </svg>

            </div>
            <div class="flex flex-col gap-2 text-xl">
                <h1 class="text-5xl mb-3">Tentang</h1>
                <p class="font-semibold">
                    lorem orem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod
                </p>
                <p class="font-semibold">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat :
                </p>
                <div class="mb-3">
                    <ul class="space-y-1 list-disc list-inside">
                        @for ($i = 0; $i < 6; $i++)
                            <li>lorem orem ipsum dolor sit amet Duis aute irure dolor in reprehenderit in voluptate
                                velit
                                esse cillum</li>
                        @endfor
                    </ul>
                </div>
            </div>
            <div class="col-span-full text-xl max-w-2xl">
                <p>lorem orem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod, duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum </p>
            </div>
        </div>


    </section>


    @push('script')
    @endpush

</x-front.layout>
