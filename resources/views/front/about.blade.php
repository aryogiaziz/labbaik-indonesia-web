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
                    Labbaik Indonesia
                </p>
            </div>
        </div>
    </section>

    <section class="py-14">
        <div class="max-w-screen-xl mx-auto grid md:grid-cols-2 justify-items-center items-center gap-6 px-3">
            <div>
                <img src="{{ asset('/logo2.jpg') }}" class="h-25" alt="Flowbite Logo">

            </div>
            <div class="flex flex-col gap-2 text-xl">
                <h1 class="text-5xl mb-3">Tentang Labbaik Indonesia</h1>
                <p class="font-semibold">
                    Labbaik Indonesia berdiri sejak 2008
                </p>
                <p class="font-semibold">
                    Labbaik Indonesia adalah perusahaan Travel yang bergerak di bidang :
                </p>
                <div class="mb-3">
                    <ul class="space-y-1 list-disc list-inside">

                        <li>Penyelenggara Perjalanan Ibadah Umrah</li>

                    </ul>
                </div>
            </div>
            <div class="col-span-full text-xl max-w-2xl">
                <p>Telah berpengalaman dalam melayani Jamaah Umrah di Indonesia yang menggunakan Jasa Kami.</p>
            </div>
        </div>


    </section>


    @push('script')
    @endpush

</x-front.layout>
