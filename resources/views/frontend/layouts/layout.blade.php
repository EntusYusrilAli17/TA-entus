<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jawara Kompak - Portal Konservasi Laut Indonesia</title>
    <meta name="description" content="Portal konservasi laut Indonesia">
    <meta name="keywords" content="Kompak, Jawara, Portal, Konservasi, Wisata, Laporan">
    <meta name="author" content="Hani Ramadhan">
    <meta name="website" content="https://devapp.center">
    <meta name="email" content="hani.ramadhan@kkp.go.id">
    <meta name="version" content="1.0.0">
    <!-- favicon -->
    <link href="{{asset('assets/images/favicon.png')}}" rel="shortcut icon">

    <!-- Css -->
    <link href="{{asset('assets/libs/tobii/css/tobii.min.css')}}" rel="stylesheet">
    <!-- Main Css -->
    <link href="{{asset('assets/libs/@iconscout/unicons/css/line.css')}}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/icons.css')}}">
    <!-- Scripts -->
    @vite(['resources/css/app.css'])

    <link rel="stylesheet" href="{{asset('assets/css/tailwind.css')}}">
    @livewireStyles
</head>

<body class="font-inter text-base text-black dark:text-white dark:bg-slate-900">

<!-- Loader Start -->
<!-- <div id="preloader">
    <div id="status">
        <div class="logo">
            <img src="assets/images/logo-icon-64.png" class="d-block mx-auto animate-[spin_10s_linear_infinite]" alt="">
        </div>
        <div class="justify-content-center">
            <div class="text-center">
                <h4 class="mb-0 mt-2 text-lg font-semibold">Ovaxo</h4>
            </div>
        </div>
    </div>
</div> -->
<!-- Loader End -->

<!-- Navbar Start -->
<nav class="navbar" id="navbar">
    <div class="container flex flex-wrap items-center justify-end">
        <a class="navbar-brand md:mr-16" href="{{route('home')}}">
                    <span class="inline-block dark:hidden">
                        <img src="{{asset('assets/images/logo-dark.png')}}" class="l-dark" alt="">
                        <img src="{{asset('assets/images/logo-light.png')}}" class="l-light" alt="">
                    </span>
            <img src="{{asset('assets/images/logo-light.png')}}" class="hidden dark:inline-block" alt="">
        </a>

        <div class="nav-icons flex items-center lg_992:order-2 ml-auto md:ml-8">
            <!-- Navbar Button -->
            <ul class="list-none menu-social mb-0 ps-lg-4">
                <li class="inline">
                    <a href="{{ route('login') }}" class="btn btn-icon rounded-full bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white"><i class="uil uil-user"></i></a>
                </li>
            </ul>
            <!-- Navbar Collapse Manu Button -->
            <button data-collapse="menu-collapse" type="button" class="collapse-btn inline-flex items-center ml-3 text-dark dark:text-white lg_992:hidden" aria-controls="menu-collapse" aria-expanded="false">
                <span class="sr-only">Navigation Menu</span>
                <i class="mdi mdi-menu text-[24px]"></i>
            </button>
        </div>

        <!-- Navbar Manu -->
        @include('frontend.partials.navbar')
        <!-- Navbar End -->

        @yield('content')

<!-- Footer Start -->
        @include('frontend.partials.footer')
<!-- Footer End -->

<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 right-5 h-9 w-9 text-center bg-violet-600 text-white leading-9"><i class="uil uil-arrow-up"></i></a>
<!-- Back to top -->

<!-- Switcher -->
<div class="fixed top-1/4 -right-1 z-3">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk">
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                    <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
                </label>
            </span>
</div>
<!-- Switcher -->

<!-- JAVASCRIPTS -->
<script src="{{asset('assets/libs/gumshoejs/gumshoe.polyfills.min.js')}}"></script>
<script src="{{asset('assets/libs/tobii/js/tobii.min.js')}}"></script>
<script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('assets/js/plugins.init.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
@livewireScripts
<!-- JAVASCRIPTS -->
</body>
</html>
