@extends('frontend.layouts.layout')

@section('content')

<!-- Hero Start -->
<section class="py-36 lg:py-56 w-full table relative bg-[url('../../assets/images/bg/bg.jpg')] bg-top bg-no-repeat" id="home">
    <div class="absolute inset-0 bg-gradient-to-t to-black/50 via-black/75 from-black"></div>

    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <a href="#!" data-type="youtube" data-id="dEQGUuQ_9-k" class="lightbox lg:h-20 h-16 lg:w-20 w-16 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white hover:bg-violet-600 text-violet-600 hover:text-white duration-500 ease-in-out mx-auto">
                <i class="mdi mdi-play inline-flex items-center justify-center text-3xl"></i>
            </a>


            <h3 class="font-medium leading-normal text-4xl mb-5 mt-10 text-white">Mendukung Upaya Konservasi Laut dan Pesisir</h3>
            <p class="text-slate-400 text-lg max-w-xl mx-auto">Bergabung bersama kami sebagai kelompok masyarakat penggerak konservasi maupun sebagai kontributor upaya konservasi.</p>

            <div class="mt-8">
                <a href="" class="btn bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white rounded-md"><i class="uil uil-notebooks"></i> Register</a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- Hero End -->

<!-- Start -->
<section class="relative md:py-24 py-16" id="about">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 md:grid-cols-2 gap-10 items-center">
            <div class="lg:col-span-5">
                <img src="assets/images/about.jpg" class="rounded-lg shadow-lg relative" alt="">
            </div><!--end col-->

            <div class="lg:col-span-7">
                <div class="lg:ml-7">
                    <h3 class="mb-4 md:text-2xl text-xl font-medium">Tentang kami: Jawara Kompak</h3>

                    <p class="text-slate-400 dark:text-slate-300 max-w-2xl mx-auto">Media pelaporan pemanfaatan bantuan pemerintah untuk masyarakat penggerak konservasi, media promosi eko-wisata bertema konservasi, dan penggalangan dana konservasi langsung kepada masyarakat. <br> <br>
                    Jawara Kompak dibangun mandiri oleh Tim IT LPSPL Serang, Direktorat Jenderal Pengelolaan Kelautan dan Ruang Laut, Kementerian Kelautan dan Perikanan.
                    </p>

                    <div class="relative mt-8">
                        <a href="aboutus.html" class="btn bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white rounded-md">Read More <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800" id="features">
    <div class="container lg mx-auto">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-2xl text-xl font-medium">Layanan Kami</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Bergabung dengan Jawara Kompak, dukung Kompak dengan membeli layanan paket-paket wisata konservasi</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-4 gap-[30px]">
            <!-- Content -->
            <div class="group relative lg:px-6 mt-4 transition duration-500 ease-in-out rounded-xl overflow-hidden text-center">
                <div class="relative overflow-hidden text-transparent -m-3">
                    <i data-feather="hexagon" class="h-28 w-28 fill-violet-600/5 mx-auto rotate-[30deg]"></i>
                    <div class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-violet-600 rounded-xl transition duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                        <i class="uil uil-adjust-circle"></i>
                    </div>
                </div>

                <div class="mt-6">
                    <a href="services.html" class="text-lg h5 transition duration-500 ease-in-out hover:text-violet-600">Laporan Mandiri</a>
                    <p class="text-slate-400 transition duration-500 ease-in-out mt-3">Bagi kelompok penerima bantuan pemerintah, laporkan pemanfaatan bantuan di media Jawara Kompak</p>
                </div>
            </div>
            <!-- Content -->

            <!-- Content -->
            <div class="group relative lg:px-6 mt-4 transition duration-500 ease-in-out rounded-xl overflow-hidden text-center">
                <div class="relative overflow-hidden text-transparent -m-3">
                    <i data-feather="hexagon" class="h-28 w-28 fill-violet-600/5 mx-auto rotate-[30deg]"></i>
                    <div class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-violet-600 rounded-xl transition duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                        <i class="uil uil-circuit"></i>
                    </div>
                </div>

                <div class="mt-6">
                    <a href="services.html" class="text-lg h5 transition duration-500 ease-in-out hover:text-violet-600">Bangun Portofolio</a>
                    <p class="text-slate-400 transition duration-500 ease-in-out mt-3">Bagi Kompak terdaftar, publikasikan kegiatan konservasimu di sini. Biarkan dunia tahu dan ikut berpartisipasi.</p>
                </div>
            </div>
            <!-- Content -->

            <!-- Content -->
            <div class="group relative lg:px-6 mt-4 transition duration-500 ease-in-out rounded-xl overflow-hidden text-center">
                <div class="relative overflow-hidden text-transparent -m-3">
                    <i data-feather="hexagon" class="h-28 w-28 fill-violet-600/5 mx-auto rotate-[30deg]"></i>
                    <div class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-violet-600 rounded-xl transition duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                        <i class="uil uil-fire"></i>
                    </div>
                </div>

                <div class="mt-6">
                    <a href="services.html" class="text-lg h5 transition duration-500 ease-in-out hover:text-violet-600">Promosikan Paket Wisata</a>
                    <p class="text-slate-400 transition duration-500 ease-in-out mt-3">Bagi Kompak terverifikasi, dapat menawarkan berbagai produk layanan paket eko/edu-wisata.</p>
                </div>
            </div>
            <!-- Content -->

            <!-- Content -->
            <div class="group relative lg:px-6 mt-4 transition duration-500 ease-in-out rounded-xl overflow-hidden text-center">
                <div class="relative overflow-hidden text-transparent -m-3">
                    <i data-feather="hexagon" class="h-28 w-28 fill-violet-600/5 mx-auto rotate-[30deg]"></i>
                    <div class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-violet-600 rounded-xl transition duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                        <i class="uil uil-flower"></i>
                    </div>
                </div>

                <div class="mt-6">
                    <a href="services.html" class="text-lg h5 transition duration-500 ease-in-out hover:text-violet-600">Kelas Konservasi Online</a>
                    <p class="text-slate-400 transition duration-500 ease-in-out mt-3">Register sebagai user dan ikuti kelas konservasi Jawara Kompak dan dapatkan sertifikatnya, Gratis!!</p>
                </div>
            </div>
            <!-- Content -->

            <!-- Content -->
            <div class="group relative lg:px-6 mt-4 transition duration-500 ease-in-out rounded-xl overflow-hidden text-center">
                <div class="relative overflow-hidden text-transparent -m-3">
                    <i data-feather="hexagon" class="h-28 w-28 fill-violet-600/5 mx-auto rotate-[30deg]"></i>
                    <div class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-violet-600 rounded-xl transition duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                        <i class="uil uil-shopping-basket"></i>
                    </div>
                </div>

                <div class="mt-6">
                    <a href="services.html" class="text-lg h5 transition duration-500 ease-in-out hover:text-violet-600">Dukung Upaya Konservasi</a>
                    <p class="text-slate-400 transition duration-500 ease-in-out mt-3">Dukung upaya konservasi pesisir dan laut oleh masyarakat dengan membeli produk Kompak terverifikasi.</p>
                </div>
            </div>
            <!-- Content -->

            <!-- Content -->
            <div class="group relative lg:px-6 mt-4 transition duration-500 ease-in-out rounded-xl overflow-hidden text-center">
                <div class="relative overflow-hidden text-transparent -m-3">
                    <i data-feather="hexagon" class="h-28 w-28 fill-violet-600/5 mx-auto rotate-[30deg]"></i>
                    <div class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-violet-600 rounded-xl transition duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                        <i class="uil uil-flip-h"></i>
                    </div>
                </div>

                <div class="mt-6">
                    <a href="services.html" class="text-lg h5 transition duration-500 ease-in-out hover:text-violet-600">Tinggalkan Jejak Konservasimu</a>
                    <p class="text-slate-400 transition duration-500 ease-in-out mt-3">Partisipasimu dalam upaya konservasi, akan tercatat dan terpublikasi di sistem Jawara Kompak.</p>
                </div>
            </div>
            <!-- Content -->
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End  -->

<!-- Start -->
<section class="relative md:py-24 py-16 md:pt-0 pt-0 bg-gray-50 dark:bg-slate-800">
    <div class="container">
        <div class="grid grid-cols-1 justify-center">
            <div class="relative z-1">
                <div class="grid lg:grid-cols-12 grid-cols-1 md:text-left text-center justify-center">
                    <div class="lg:col-start-2 lg:col-span-10">
                        <div class="relative">
                            <img src="assets/images/cta.jpg" class="rounded-md shadow-lg" alt="">
                            <div class="absolute bottom-2/4 translate-y-2/4 right-0 left-0 text-center">
                                <a href="#!" data-type="youtube" data-id="T1gsm-dqtBY" class="lightbox lg:h-20 h-16 lg:w-20 w-16 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white hover:bg-violet-600 text-violet-600 hover:text-white duration-500 ease-in-out mx-auto">
                                    <i class="mdi mdi-play inline-flex items-center justify-center text-3xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content md:mt-8">
                    <div class="grid lg:grid-cols-12 grid-cols-1 md:text-left text-center justify-center">
                        <div class="lg:col-start-2 lg:col-span-10">
                            <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
                                <div class="mt-8">
                                    <div class="section-title text-md-start">
                                        <h6 class="text-white/50">Kebutuhan konservasi</h6>
                                        <h3 class="md:text-2xl text-xl font-medium text-white mt-2">Setiap insan berkewajiban <br> turut serta menjaga konservasi.</h3>
                                    </div>
                                </div>

                                <div class="section-title text-md-start">
                                    <p class="text-white/50 max-w-xl mx-auto mb-2">Turut serta dalam upaya konservasi dengan bergabung sebagai Kompak (Kelompok Masyarakat Penggerak Konservasi) maupun partisipan dalam kegiatan konservasi.</p>
                                    <a href="" class="text-white">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row -->
    </div>
    <!--end container-->

    <div class="absolute bottom-0 right-0 left-0 h-4/5 md:h-2/3 bg-violet-600"></div>
</section>
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16" id="pricing">
    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-2xl text-xl font-medium">Pengguna Jawara Kompak</h3>

            <p class="text-slate-400 dark:text-slate-300 max-w-xl mx-auto">Pengguna Jawara Kompak terdiri dari tiga jenis pengguna, semua dapat berkolaborasi dalam upaya konservasi.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-3 grid-cols-1 mt-8 gap-[30px] items-center">
            <div class="shadow rounded-md p-6 bg-gradient-to-t bg-violet-600">
                <div class="pb-8">
                    <h3 class="mb-6 text-xl font-medium text-white">Kompak terverifikasi</h3>
{{--                    <div class="mb-6 text-white/50">--}}
{{--                        <span class="relative h6 -top-5 text-xl">Rp</span>--}}
{{--                        <span class="text-5xl h6 font-bold text-white">00</span>--}}
{{--                        <span class="inline-block h6 ml-1">/ bulan</span>--}}
{{--                    </div>--}}
                    <p class="mb-6 text-white">Kelompok yang telah terverifikasi oleh Tim LPSPL Serang</p>
                    <a href="" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white rounded-md w-full">Daftar</a>
                </div>
                <div class="border-b border-slate-200/10"></div>
                <ul class="self-start pt-8">
                    <li class="flex items-center mb-1 text-white/80">
                        <i class="uil uil-check-circle text-xl text-orange-600 mr-2"></i>
                        <span>User tidak terbatas</span>
                    </li>
                    <li class="flex items-center my-1 text-white/80">
                        <i class="uil uil-check-circle text-xl text-orange-600 mr-2"></i>
                        <span>Menulis kegiatan konservasi</span>
                    </li>
                    <li class="flex items-center my-1 text-white/80">
                        <i class="uil uil-check-circle text-xl text-orange-600 mr-2"></i>
                        <span>e-Learning konservasi</span>
                    </li>
                    <li class="flex items-center my-1 text-white/80">
                        <i class="uil uil-check-circle text-xl text-orange-600 mr-2"></i>
                        <span>Laporan pemanfaatan banper</span>
                    </li>
                    <li class="flex items-center my-1 text-white/80">
                        <i class="uil uil-check-circle text-xl text-orange-600 mr-2"></i>
                        <span>Promosi wisata konservasi</span>
                    </li>
                    <li class="flex items-center my-1 text-white/80">
                        <i class="uil uil-check-circle text-xl text-orange-600 mr-2"></i>
                        <span>Penggalangan CSR</span>
                    </li>
                </ul>
            </div>

            <div class="p-6">
                <div class="pb-8">
                    <h3 class="mb-6 text-xl font-medium dark:text-white">Kompak belum terverifikasi</h3>
{{--                    <div class="mb-6 dark:text-white/50">--}}
{{--                        <span class="relative h6 -top-5 text-xl">$</span>--}}
{{--                        <span class="text-5xl h6 font-medium dark:text-white">00</span>--}}
{{--                        <span class="inline-block h6 ml-1">/ month</span>--}}
{{--                    </div>--}}
                    <p class="mb-6 text-slate-400">Kelompok Kompak yang belum terverifikasi oleh tim LPSPL Serang.</p>
                    <a href="" class="btn bg-violet-600/5 hover:bg-violet-600 border-violet-600/10 hover:border-violet-600 text-violet-600 hover:text-white rounded-md w-full">Daftar</a>
                </div>
                <div class="border-b border-slate-200 dark:border-slate-200/5"></div>
                <ul class="self-start pt-8">
                    <li class="flex items-center mb-1 text-slate-400">
                        <i class="uil uil-check-circle text-xl text-green-600 mr-2"></i>
                        <span>User tidak terbatas</span>
                    </li>
                    <li class="flex items-center my-1 text-slate-400">
                        <i class="uil uil-check-circle text-xl text-green-600 mr-2"></i>
                        <span>Menulis kegiatan konservasi</span>
                    </li>
                    <li class="flex items-center my-1 text-slate-400">
                        <i class="uil uil-check-circle text-xl text-green-600 mr-2"></i>
                        <span>e-Learning konservasi</span>
                    </li>
                </ul>
            </div>

            <div class="p-6">
                <div class="pb-8">
                    <h3 class="mb-6 text-xl font-medium dark:text-white">Pengguna Biasa</h3>
{{--                    <div class="mb-6 dark:text-white/50">--}}
{{--                        <span class="relative h6 -top-5 text-xl">$</span>--}}
{{--                        <span class="text-5xl h6 font-medium dark:text-white">49</span>--}}
{{--                        <span class="inline-block h6 ml-1">/ month</span>--}}
{{--                    </div>--}}
                    <p class="mb-6 text-slate-400">Masyarakat pada umumnya.</p>
                    <a href="" class="btn bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white rounded-md w-full">Daftar</a>
                </div>
                <div class="border-b border-slate-200 dark:border-slate-200/5"></div>
                <ul class="self-start pt-8">
                    <li class="flex items-center mb-1 text-slate-400">
                        <i class="uil uil-check-circle text-xl text-green-600 mr-2"></i>
                        <span>Memesan paket wisata</span>
                    </li>
                    <li class="flex items-center my-1 text-slate-400">
                        <i class="uil uil-check-circle text-xl text-green-600 mr-2"></i>
                        <span>Partisipasi upaya konservasi</span>
                    </li>
                    <li class="flex items-center my-1 text-slate-400">
                        <i class="uil uil-check-circle text-xl text-green-600 mr-2"></i>
                        <span>Komentar atas artikel</span>
                    </li>
                    <li class="flex items-center my-1 text-slate-400">
                        <i class="uil uil-check-circle text-xl text-green-600 mr-2"></i>
                        <span>Komentar atas produk</span>
                    </li>
                </ul>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800" id="testi">
    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-2xl text-xl font-medium">Testimoni</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Apa harapan dan tanggapan mereka tentang Jawara Kompak.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            <ul class="space-y-8">
                <li class="rounded-lg shadow-lg dark:shadow-gray-800 p-6 bg-white dark:bg-slate-900">
                    <div class="flex items-center pb-6 border-b border-gray-100 dark:border-gray-800">
                        <img src="{{asset('assets/images/client/01-santoso.jpg')}}" class="h-16 w-16 rounded-full shadow dark:shadow-gray-800" alt="">

                        <div class="pl-4">
                            <a href="" class="text-lg h5 hover:text-violet-600 duration-500 ease-in-out">Santoso Budi Widiarto</a>
                            <p class="text-slate-400">Kepala LPSPL Serang</p>
                        </div>
                    </div>

                    <div class="mt-6">
                        <p class="text-slate-400">Jawara Kompak diharapkan mampu mendorong upaya konservasi pesisir dan laut dengan melibatkan kelompok masyarakat.</p>
                        <ul class="list-none mb-0 text-amber-400 mt-2">
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                        </ul>
                    </div>
                </li>
            </ul>

            <ul class="space-y-8 hidden sm:block">
                <li class="rounded-lg shadow-lg dark:shadow-gray-800 p-6 bg-white dark:bg-slate-900">
                    <div class="flex items-center pb-6 border-b border-gray-100 dark:border-gray-800">
                        <img src="{{asset('assets/images/client/02-wiara.jpg')}}" class="h-16 w-16 rounded-full shadow dark:shadow-gray-800" alt="">

                        <div class="pl-4">
                            <a href="" class="text-lg h5 hover:text-violet-600 duration-500 ease-in-out">Wiara Marup</a>
                            <p class="text-slate-400">Kepala Urusan Umum</p>
                        </div>
                    </div>

                    <div class="mt-6">
                        <p class="text-slate-400">Jawara Kompak dibuat untuk meningkatkan partisipasi dan kolaborasi dalam upaya konservasi pesisir dan laut.</p>
                        <ul class="list-none mb-0 text-amber-400 mt-2">
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                        </ul>
                    </div>
                </li>
            </ul>

            <ul class="space-y-8 hidden lg:block">
                <li class="rounded-lg shadow-lg dark:shadow-gray-800 p-6 bg-white dark:bg-slate-900">
                    <div class="flex items-center pb-6 border-b border-gray-100 dark:border-gray-800">
                        <img src="{{asset('assets/images/client/03-hani.jpg')}}" class="h-16 w-16 rounded-full shadow dark:shadow-gray-800" alt="">

                        <div class="pl-4">
                            <a href="" class="text-lg h5 hover:text-violet-600 duration-500 ease-in-out">Hani Ramadhan</a>
                            <p class="text-slate-400">Analis Pengusahaan Jasa Kelautan Ahli Pertama</p>
                        </div>
                    </div>

                    <div class="mt-6">
                        <p class="text-slate-400">Jawara Kompak diharapkan dapat terus dikembangkan hingga menjadi platform yang memberikan manfaat seluas-luasnya bagi masyarakat.</p>
                        <ul class="list-none mb-0 text-amber-400 mt-2">
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div><!--end container-->
</section>
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16" id="blog">
    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-2xl text-xl font-medium">Blog</h3>

            <p class="text-slate-400 dark:text-slate-300 max-w-xl mx-auto">Kegiatan konservasi dan berita terakhir terkait kegiatan Kelompok Masyarakat Penggerak Konservasi (KOMPAK).</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px] mt-8">
            @foreach($posts as $post)
            <div class="blog relative rounded-md shadow shadow-slate-200 dark:shadow-gray-800 overflow-hidden">
                <a href="{{ route('post', $post->slug) }}">
                    <img src="{{ $post->getFirstMedia('featured_image')->getUrl() }}" alt="">
                </a>


                <div class="content p-6">
                    <a href="{{ route('post', $post->slug) }}" class="text-lg text-black hover:text-violet-600 dark:text-white dark:hover:text-violet-600 transition duration-500 ease-in-out font-medium h5">{{ $post->title }}</a>
                    <p class="text-slate-400 mt-3">{!! $post->excerpt !!}</p>

                    <div class="mt-5">
                        <a href="{{ route('post', $post->slug) }}" class="hover:text-violet-600 dark:hover:text-violet-600 after:bg-violet-600 dark:text-white transition duration-500">Read More <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<livewire:contactform />
<!-- End -->

@endsection
