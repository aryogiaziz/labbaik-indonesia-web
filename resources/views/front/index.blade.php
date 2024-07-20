@push('css')
    <link rel="stylesheet" href="{{ asset('/assets/libraries/owl-carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/libraries/owl-carousel/assets/owl.theme.default.css') }}">
@endpush

@section('title', 'Home | Labbaik Indonesia')

<x-front.layout>
    <x-front.jumbotron />

    {{-- halaman brosur --}}

    <section class="max-w-screen-xl mx-auto mt-16 relative">
        <div id="brochure-owl" class="owl-carousel owl-theme">

            @foreach ($brosurs as $brosur)
                <div class="item h-full">
                    <img src="{{ asset('storage/' . $brosur->image_brochure) }}"
                        class="img-responsive object-cover w-[400px] h-[600px]">
                </div>
            @endforeach

        </div>
    </section>

    {{-- dashboard index --}}

    <section class="max-w-screen-xl mx-auto mt-16 flex flex-col gap-6 px-3">
        <div class="flex flex-col xl:flex-row justify-center gap-6">
            <div class=" bg-white border border-gray-200 rounded-lg shadow flex flex-col w-full">
                <div class="border-b-2 py-6 px-10">
                    <h5 class="text-xl">Total Customer</h5>
                    <h3 class="text-2xl font-bold">{{ number_format($pie_semua['total']) }}</h3>
                    <h5 class="text-xl">Jamaah</h5>
                </div>
                <div>
                    <canvas id="totalCustomerChart"></canvas>
                </div>
            </div>

            <div class=" bg-white border border-gray-200 rounded-lg shadow flex flex-col w-full">
                <div class="border-b-2 py-6 px-10">
                    <h5 class="text-xl">Total Customer Laki-Laki</h5>
                    <h3 class="text-2xl font-bold">{{ number_format($pie_laki['total']) }}</h3>
                    <h5 class="text-xl">Jamaah</h5>
                </div>
                <div>
                    <canvas id="totalManCustomerChart"></canvas>
                </div>
            </div>

            <div class=" bg-white border border-gray-200 rounded-lg shadow flex flex-col w-full">
                <div class="border-b-2 py-6 px-10">
                    <h5 class="text-xl">Total Customer Perempuan</h5>
                    <h3 class="text-2xl font-bold">{{ number_format($pie_perempuan['total']) }}</h3>
                    <h5 class="text-xl">Jamaah</h5>
                </div>
                <div>
                    <canvas id="totalWomanCustomerChart"></canvas>
                </div>
            </div>
        </div>

        <div class=" bg-white border border-gray-200 rounded-lg shadow flex flex-col w-full">
            <div class="border-b-2 py-6 px-10">
                <h5 class="text-xl">Total Berangkat per tahun ini</h5>
                <h3 class="text-2xl font-bold">{{ number_format($bar_month['total']) }}</h3>
                <h5 class="text-xl">Jamaah</h5>
            </div>
            <div>
                <canvas id="totalCustomerPerYear" style="width: 100%"></canvas>
            </div>
        </div>

    </section>

    {{-- parallax --}}

    <section class="h-[400px] mt-16">
        <div class="h-full bg-cover bg-fixed flex justify-center items-center"
            style="background-image:url('https://images.unsplash.com/photo-1549575483-14686a641c28?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
            <h1 class="text-center text-5xl font-bold text-white">الحياة كالبحر، فإما أن تركبها أمواجها أو تغرق فيها
            </h1>
        </div>
    </section>

    {{-- mengapa memilih kami --}}

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
                {{-- <!-- @for ($i = 0; $i < 8; $i++)
--> --}}
                <div
                    class=" bg-white border border-gray-200 rounded-lg shadow w-full hover:bg-[#318448] hover:text-white transition ease-in-out duration-300">
                    <div class="py-6 px-6 flex flex-col justify-center items-center text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-14 h-14">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                        </svg>

                        <h3 class="text-2xl font-semibold">Terpercaya</h3>
                        <p class="text-lg">
                            Agen perjalanan terpercaya dalam menyediakan paket umroh dengan pelayanan terbaik dan harga
                            terjangkau
                        </p>
                    </div>
                </div>
                <div
                    class=" bg-white border border-gray-200 rounded-lg shadow w-full hover:bg-[#318448] hover:text-white transition ease-in-out duration-300">
                    <div class="py-6 px-6 flex flex-col justify-center items-center text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-14 h-14">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                        </svg>

                        <h3 class="text-2xl font-semibold">Sesuai Syariat Islam</h3>
                        <p class="text-lg">
                            Semua kegiatan yang dilakukan mulai dari Manasik hingga Ibadah Umrah atau Haji InsyaAllah
                            sesuai Al-Quran dan As-sunnah
                        </p>
                    </div>
                </div>
                <div
                    class=" bg-white border border-gray-200 rounded-lg shadow w-full hover:bg-[#318448] hover:text-white transition ease-in-out duration-300">
                    <div class="py-6 px-6 flex flex-col justify-center items-center text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-14 h-14">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                        </svg>

                        <h3 class="text-2xl font-semibold">Pembimbing Travel yang Berpengalaman</h3>
                        <p class="text-lg">
                            InsyaAllah akan dibimbing dengan Pembimbing sesuai Sunnah yang amanah, berkompeten dan
                            berpengalaman di bidangnya selama bertahun-tahun
                        </p>
                    </div>
                </div>
                <div
                    class=" bg-white border border-gray-200 rounded-lg shadow w-full hover:bg-[#318448] hover:text-white transition ease-in-out duration-300">
                    <div class="py-6 px-6 flex flex-col justify-center items-center text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-14 h-14">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                        </svg>

                        <h3 class="text-2xl font-semibold">Fasilitas Nyaman dan Baik</h3>
                        <p class="text-lg">
                            Menggunakan Fasilitas yang terbaik untuk para Jamaah kami : penerbangan berstandar IATA,
                            Transportasi BUS Full AC & Nyaman, Hotel yang dekat dengan Masjidil Haram &
                            Masjid Nabawi
                        </p>
                    </div>
                </div>
                {{-- <!--
@endfor --> --}}
            </div>
        </div>
    </section>

    {{-- Galeri Foto --}}

    <section class="py-14">
        <div class="max-w-screen-xl mx-auto flex flex-col gap-6 px-3">
            <div class="flex flex-col gap-2">
                <h1 class="text-5xl font-bold">Galeri Foto</h1>
                <p class="text-xl font-semibold max-w-xl">
                    Beberapa kegiatan jama'ah ketika dalam perjalanan bersama Namira Travel
                </p>
            </div>

            <div id="gallery-owl" class="owl-carousel owl-theme h-full">

                @foreach ($galeris as $galeri)
                    <div class="item  h-full">
                        <img src="{{ asset('storage/' . $galeri->image_photo) }}"
                            class="img-responsive object-cover w-[400px] h-[500px]">
                    </div>
                @endforeach

            </div>
        </div>
    </section>


    {{-- Artikel --}}

    <section class="py-14">
        <div class="max-w-screen-xl mx-auto flex flex-col gap-6 px-3">
            <div class="flex flex-col gap-2">
                <h1 class="text-5xl font-bold">Artikel</h1>
                <p class="text-xl font-semibold max-w-xl">

                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                @foreach ($artikels as $artikel)
                    <div
                        class=" bg-white border border-gray-200 rounded-lg shadow w-full transition ease-in-out duration-300">
                        <a href="{{ $artikel->article_link }}" target="_blank">
                            <img class="rounded-t-lg object-cover w-full h-[220px]"
                                src="{{ asset('storage/' . $artikel->image_article) }}" alt="" />
                        </a>
                        <div class="py-6 px-6">

                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                    {{ $artikel->name }}
                                </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700">
                                {{ $artikel->description }}
                            </p>
                            <a href="{{ $artikel->article_link }}" target="_blank"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#F7CE46] hover:bg-[#f7a746]  rounded-md  focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>

                        </div>
                    </div>
                @endforeach
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
                    labels: {!! json_encode($pie_semua['labels']) !!},
                    datasets: [{
                        label: 'My First Dataset',
                        data: {!! json_encode($pie_semua['data']) !!},
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
                    labels: {!! json_encode($pie_laki['labels']) !!},
                    datasets: [{
                        label: 'My First Dataset',
                        data: {!! json_encode($pie_laki['data']) !!},
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
                    labels: {!! json_encode($pie_perempuan['labels']) !!},
                    datasets: [{
                        label: 'My First Dataset',
                        data: {!! json_encode($pie_perempuan['data']) !!},
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

                const labelsCustomerPerYearData = {!! json_encode($bar_month['labels']) !!};
                const totalCustomerPerYearData = {
                    labels: labelsCustomerPerYearData,
                    datasets: {!! json_encode($bar_month['datasets']) !!}
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
