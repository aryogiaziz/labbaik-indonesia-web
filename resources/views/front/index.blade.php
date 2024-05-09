@push('css')
    <link rel="stylesheet" href="{{ asset('/assets/libraries/owl-carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/libraries/owl-carousel/assets/owl.theme.default.css') }}">
@endpush

@section('title', 'Home | Labbaik Indonesia')

<x-front.layout>
    <x-front.jumbotron />

    <section class="max-w-screen-xl mx-auto mt-16 relative">
        <div id="brochure-owl" class="owl-carousel owl-theme">

            <div class="item  h-full">
                <img src="https://i.pinimg.com/736x/1a/71/80/1a7180f2c41a4681973ce90690258daf.jpg"
                    class="img-responsive object-cover w-[400px] h-[500px]">
            </div>

            <div class="item">
                <img src="https://static.zerochan.net/Nishikigi.Chisato.full.3699876.jpg"
                    class="img-responsive object-cover w-[400px] h-[500px]">
            </div>

            <div class="item">
                <img src="https://pbs.twimg.com/media/Fw3uLUPaUAA7kZZ?format=jpg&name=4096x4096"
                    class="img-responsive object-cover w-[400px] h-[500px]">
            </div>

            <div class="item">
                <img src="https://storage.googleapis.com/muslimpergi/uploads/slide/pict/415/1.AWAL_SEPTEMBER_EKSEKUTIF.png"
                    class="img-responsive object-cover w-[400px] h-[500px]">
            </div>

        </div>
    </section>

    <section class="max-w-screen-xl mx-auto mt-16 flex flex-col gap-6 px-3">
        <div class="flex flex-col xl:flex-row justify-center gap-6">
            <div class=" bg-white border border-gray-200 rounded-lg shadow flex flex-col w-full">
                <div class="border-b-2 py-6 px-10">
                    <h5 class="text-xl">Total Customer</h5>
                    <h3 class="text-2xl font-bold">10.000</h3>
                    <h5 class="text-xl">Jamaah</h5>
                </div>
                <div>
                    <canvas id="totalCustomerChart"></canvas>
                </div>
            </div>

            <div class=" bg-white border border-gray-200 rounded-lg shadow flex flex-col w-full">
                <div class="border-b-2 py-6 px-10">
                    <h5 class="text-xl">Total Customer Laki-Laki</h5>
                    <h3 class="text-2xl font-bold">10.000</h3>
                    <h5 class="text-xl">Jamaah</h5>
                </div>
                <div>
                    <canvas id="totalManCustomerChart"></canvas>
                </div>
            </div>

            <div class=" bg-white border border-gray-200 rounded-lg shadow flex flex-col w-full">
                <div class="border-b-2 py-6 px-10">
                    <h5 class="text-xl">Total Customer Perempuan</h5>
                    <h3 class="text-2xl font-bold">10.000</h3>
                    <h5 class="text-xl">Jamaah</h5>
                </div>
                <div>
                    <canvas id="totalWomanCustomerChart"></canvas>
                </div>
            </div>
        </div>

        <div class=" bg-white border border-gray-200 rounded-lg shadow flex flex-col w-full">
            <div class="border-b-2 py-6 px-10">
                <h5 class="text-xl">Total Berangkat Ke Bulan</h5>
                <h3 class="text-2xl font-bold">10.000</h3>
                <h5 class="text-xl">Jamaah</h5>
            </div>
            <div>
                <canvas id="totalCustomerPerYear" style="width: 100%"></canvas>
            </div>
        </div>

    </section>

    <section class="h-[400px] mt-16">
        <div class="h-full bg-cover bg-fixed flex justify-center items-center"
            style="background-image:url('https://images.unsplash.com/photo-1549575483-14686a641c28?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
            <h1 class="text-center text-5xl font-bold text-white">الحياة كالبحر، فإما أن تركبها أمواجها أو تغرق فيها
            </h1>
        </div>
    </section>

    <section class="py-14 bg-[#F9F9F9]">
        <div class="max-w-screen-xl mx-auto flex flex-col gap-6 px-3">
            <div class="flex flex-col gap-2">
                <h1 class="text-5xl font-bold">Mengapa Memilih Kami ?</h1>
                <p class="text-xl font-semibold max-w-xl">
                    Membantu saudara muslim sebanyak-banyaknya untuk bisa berangkat
                    Umrah & Haji dengan mudah dan nyaman.
                </p>
            </div>

            <div class="grid md:grid-cols-3 xl:grid-cols-4 gap-6">
                @for ($i = 0; $i < 8; $i++)
                    <div
                        class=" bg-white border border-gray-200 rounded-lg shadow w-full hover:bg-[#318448] hover:text-white transition ease-in-out duration-300">
                        <div class="py-6 px-6 flex flex-col justify-center items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-14 h-14">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                            </svg>

                            <h3 class="text-2xl font-semibold">Endanged Species</h3>
                            <p class="text-lg">
                                The Bengal tiger is a population of the Panthera tigris tigris subspecies. It ranks
                                among
                                the
                                biggest wild cats alive today. It is considered to belong to the world's charismatic
                                megafauna.
                            </p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <section class="py-14">
        <div class="max-w-screen-xl mx-auto flex flex-col gap-6 px-3">
            <div class="flex flex-col gap-2">
                <h1 class="text-5xl font-bold">Galeri Foto</h1>
                <p class="text-xl font-semibold max-w-xl">
                    Beberapa kegiatan jama'ah ketika dalam perjalanan bersama Namira Travel
                </p>
            </div>

            <div id="gallery-owl" class="owl-carousel owl-theme h-full">
                <div class="item  h-full">
                    <img src="https://i.pinimg.com/736x/1a/71/80/1a7180f2c41a4681973ce90690258daf.jpg"
                        class="img-responsive object-cover w-[400px] h-[500px]">
                </div>

                <div class="item">
                    <img src="https://static.zerochan.net/Nishikigi.Chisato.full.3699876.jpg"
                        class="img-responsive object-cover w-[400px] h-[500px]">
                </div>

                <div class="item">
                    <img src="https://pbs.twimg.com/media/Fw3uLUPaUAA7kZZ?format=jpg&name=4096x4096"
                        class="img-responsive object-cover w-[400px] h-[500px]">
                </div>

                <div class="item">
                    <img src="https://storage.googleapis.com/muslimpergi/uploads/slide/pict/415/1.AWAL_SEPTEMBER_EKSEKUTIF.png"
                        class="img-responsive object-cover w-[400px] h-[500px]">
                </div>
            </div>
        </div>
    </section>

    <section class="py-14 bg-[#F9F9F9]">
        <div class="max-w-screen-xl mx-auto flex flex-col gap-6 px-3">
            <div class="flex flex-col gap-2">
                <h1 class="text-5xl font-bold">Mengapa Memilih Kami ?</h1>
                <p class="text-xl font-semibold max-w-xl">
                    Membantu saudara muslim sebanyak-banyaknya untuk bisa berangkat Umrah & Haji dengan mudah dan
                    nyaman.
                </p>
            </div>

            <div class="flex flex-col lg:flex-row gap-6">
                @for ($i = 0; $i < 3; $i++)
                    <div
                        class=" bg-white border border-gray-200 rounded-lg shadow w-full hover:bg-[#318448] hover:text-white transition ease-in-out duration-300">
                        <div class="py-6 px-6">
                            <div class="flex items-center mb-4">
                                <img class="w-10 h-10 me-4 rounded-full"
                                    src="https://i.pinimg.com/736x/1a/71/80/1a7180f2c41a4681973ce90690258daf.jpg"
                                    alt="">
                                <div class="font-medium dark:text-white">
                                    <p>
                                        Nino
                                        <time datetime="2014-08-16 19:00"
                                            class="block text-sm text-gray-500 dark:text-gray-400">@nino</time>
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-gray-300 dark:text-gray-500" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                            </div>

                            <p class="text-lg">
                                The Bengal tiger is a population of the Panthera tigris tigris subspecies. It ranks
                                among
                                the
                                biggest wild cats alive today. It is considered to belong to the world's charismatic
                                megafauna.
                            </p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <section class="py-14">
        <div class="max-w-screen-xl mx-auto flex flex-col gap-6 px-3">
            <div class="flex flex-col gap-2">
                <h1 class="text-5xl font-bold">Artikel</h1>
                <p class="text-xl font-semibold max-w-xl">
                    Bacalah karena iqro adalah baca
                </p>
            </div>

            <div class="flex flex-col lg:flex-row gap-6">
                @for ($i = 0; $i < 3; $i++)
                    <div
                        class=" bg-white border border-gray-200 rounded-lg shadow w-full transition ease-in-out duration-300">
                        <a href="#">
                            <img class="rounded-t-lg object-cover w-full h-[220px]"
                                src="https://pbs.twimg.com/media/Fw3uLUPaUAA7kZZ?format=jpg&name=4096x4096"
                                alt="" />
                        </a>
                        <div class="py-6 px-6">

                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Noteworthy technology acquisitions 2021</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                            </p>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#F7CE46] hover:bg-[#f7a746]  rounded-md  focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>

                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>


    @push('script')
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="{{ asset('/assets/libraries/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            $(document).ready(function() {

                $('#brochure-owl').owlCarousel({
                    nav: true,
                    stagePadding: 40,
                    margin: 10,
                    loop: true,
                    dots: true,
                    autoplay: true,
                    autoplayTimeout: 6000,
                    smartSpeed: 800,
                    animateOut: 'fadeOut',
                    animateIn: 'fadeIn',
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        1024: {
                            items: 3
                        }
                    },
                    navText: [
                        `<span 
                            class="inline-flex items-center py-3 px-5 text-base font-medium text-black bg-[#F7CE46] rounded-md hover:bg-[#f7a746] text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                            </svg>
                        </span>`,
                        `<span 
                            class="inline-flex items-center py-3 px-5 text-base font-medium text-black bg-[#F7CE46] rounded-md hover:bg-[#f7a746] text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </span>`
                    ],
                });

                const totalCustomersdata = {
                    labels: [
                        'Usia Balita',
                        'Usia Remaja dan Dewasa',
                        'Usia Lanjut'
                    ],
                    datasets: [{
                        label: 'My First Dataset',
                        data: [10, 20, 70],
                        backgroundColor: [
                            'rgb(255, 99, 132)',
                            'rgb(54, 162, 235)',
                            'rgb(255, 205, 86)'
                        ],
                        hoverOffset: 4
                    }]
                };

                new Chart($('#totalCustomerChart'), {
                    type: 'doughnut',
                    data: totalCustomersdata,
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });


                const totalManCustomersdata = {
                    labels: [
                        'Usia Balita',
                        'Usia Remaja dan Dewasa',
                        'Usia Lanjut'
                    ],
                    datasets: [{
                        label: 'My First Dataset',
                        data: [10, 60, 30],
                        backgroundColor: [
                            'rgb(255, 99, 132)',
                            'rgb(54, 162, 235)',
                            'rgb(255, 205, 86)'
                        ],
                        hoverOffset: 4
                    }]
                };

                new Chart($('#totalManCustomerChart'), {
                    type: 'doughnut',
                    data: totalManCustomersdata,
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });

                const totalWomanCustomersdata = {
                    labels: [
                        'Usia Balita',
                        'Usia Remaja dan Dewasa',
                        'Usia Lanjut'
                    ],
                    datasets: [{
                        label: 'My First Dataset',
                        data: [10, 10, 80],
                        backgroundColor: [
                            'rgb(255, 99, 132)',
                            'rgb(54, 162, 235)',
                            'rgb(255, 205, 86)'
                        ],
                        hoverOffset: 4
                    }]
                };

                new Chart($('#totalWomanCustomerChart'), {
                    type: 'doughnut',
                    data: totalWomanCustomersdata,
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });

                const labelsCustomerPerYearData = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'];
                const totalCustomerPerYearData = {
                    labels: labelsCustomerPerYearData,
                    datasets: [{
                            label: 'Usia Balita',
                            data: [65, 59, 80, 81, 56, 55, 40],
                            // backgroundColor: [
                            //     'rgba(255, 99, 132, 0.2)',
                            //     'rgba(255, 159, 64, 0.2)',
                            //     'rgba(255, 205, 86, 0.2)',
                            //     'rgba(75, 192, 192, 0.2)',
                            //     'rgba(54, 162, 235, 0.2)',
                            //     'rgba(153, 102, 255, 0.2)',
                            //     'rgba(201, 203, 207, 0.2)'
                            // ],
                            // borderColor: [
                            //     'rgb(255, 99, 132)',
                            //     'rgb(255, 159, 64)',
                            //     'rgb(255, 205, 86)',
                            //     'rgb(75, 192, 192)',
                            //     'rgb(54, 162, 235)',
                            //     'rgb(153, 102, 255)',
                            //     'rgb(201, 203, 207)'
                            // ],
                            // borderWidth: 1
                        },
                        {
                            label: 'Remaja & Dewasa',
                            data: [10, 20, 60, 45, 62, 13, 20],
                            // backgroundColor: [
                            //     'rgba(255, 99, 132, 0.2)',
                            //     'rgba(255, 159, 64, 0.2)',
                            //     'rgba(255, 205, 86, 0.2)',
                            //     'rgba(75, 192, 192, 0.2)',
                            //     'rgba(54, 162, 235, 0.2)',
                            //     'rgba(153, 102, 255, 0.2)',
                            //     'rgba(201, 203, 207, 0.2)'
                            // ],
                            // borderColor: [
                            //     'rgb(255, 99, 132)',
                            //     'rgb(255, 159, 64)',
                            //     'rgb(255, 205, 86)',
                            //     'rgb(75, 192, 192)',
                            //     'rgb(54, 162, 235)',
                            //     'rgb(153, 102, 255)',
                            //     'rgb(201, 203, 207)'
                            // ],
                            borderWidth: 1
                        },
                        {
                            label: 'Usia Lanjut',
                            data: [67, 73, 35, 87, 43, 64, 76],
                            // backgroundColor: [
                            //     'rgba(255, 99, 132, 0.2)',
                            //     'rgba(255, 159, 64, 0.2)',
                            //     'rgba(255, 205, 86, 0.2)',
                            //     'rgba(75, 192, 192, 0.2)',
                            //     'rgba(54, 162, 235, 0.2)',
                            //     'rgba(153, 102, 255, 0.2)',
                            //     'rgba(201, 203, 207, 0.2)'
                            // ],
                            // borderColor: [
                            //     'rgb(255, 99, 132)',
                            //     'rgb(255, 159, 64)',
                            //     'rgb(255, 205, 86)',
                            //     'rgb(75, 192, 192)',
                            //     'rgb(54, 162, 235)',
                            //     'rgb(153, 102, 255)',
                            //     'rgb(201, 203, 207)'
                            // ],
                            borderWidth: 1
                        },
                    ]
                };

                new Chart($('#totalCustomerPerYear'), {
                    type: 'bar',
                    data: totalCustomerPerYearData,
                    options: {
                        indexAxis: 'y',
                        elements: {
                            bar: {
                                borderWidth: 2,
                            }
                        },
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'bottom',
                            },
                            title: {
                                display: true,
                                text: 'Chart.js Horizontal Bar Chart'
                            }
                        }
                    }
                });

                $('#gallery-owl').owlCarousel({
                    nav: true,
                    stagePadding: 40,
                    margin: 10,
                    loop: true,
                    dots: true,
                    autoplay: true,
                    autoplayTimeout: 6000,
                    smartSpeed: 800,
                    animateOut: 'fadeOut',
                    animateIn: 'fadeIn',
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1
                        }
                    },
                    navText: [
                        `<span 
                            class="inline-flex items-center py-3 px-5 text-base font-medium text-black bg-[#F7CE46] rounded-md hover:bg-[#f7a746] text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                            </svg>
                        </span>`,
                        `<span 
                            class="inline-flex items-center py-3 px-5 text-base font-medium text-black bg-[#F7CE46] rounded-md hover:bg-[#f7a746] text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </span>`
                    ],
                });

            });
        </script>
    @endpush

</x-front.layout>
