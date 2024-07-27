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
    <link href="assets/images/favicon.png" rel="shortcut icon">

    <!-- Css -->
    <!-- Main Css -->
    <link href="assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/icons.css">
    <!-- Scripts -->
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="assets/css/tailwind.css">

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

<!-- Hero Start -->
<section class="position-relative bg-[url('../../assets/images/bg/bg.jpg')] bg-center bg-no-repeat">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="container-fluid relative">
        <div class="grid grid-cols-1">
            <div class="lg:col-span-4">
                <div class="flex flex-col min-h-screen md:px-12 py-12 px-3">
                    <!-- Start Logo -->
                    <div class="text-center mx-auto">
                        <a href="{{route('home')}}"><img src="assets/images/logo-light.png" alt=""></a>
                    </div>
                    <!-- End Logo -->

                    <!-- Start Content -->
                    <div class="text-center my-auto">
                        <div class="w-full max-w-sm m-auto px-6 py-8 bg-white dark:bg-slate-900 rounded-md shadow-lg shadow-slate-500 dark:shadow-gray-800">
                            <div class="grid grid-cols-1">
                                <h5 class="mb-8 text-xl dark:text-white font-medium">Reset Your Password</h5>
                                <p class="text-slate-400 mb-6">Please enter your email address. You will receive a link to create a new password via email.</p>
                                <form method="POST" action="{{ route('password.email') }}" class="text-left">
                                @csrf
                                    <div class="grid grid-cols-1">
                                        <div class="mb-4">
                                            <label class="dark:text-white" for="LoginEmail">Email Address:</label>
                                            <input id="LoginEmail" type="email" class="form-input mt-3" placeholder="name@example.com" name="email">
                                            @error('email')
                                            <span class="text-sm text-red-600 dark:text-red-400 space-y-1">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-4">
                                            <button type="submit" class="btn bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white rounded-md w-full">Send</button>
                                        </div>

                                        <div class="text-center">
                                            <span class="text-slate-400 mr-2">Remember your password ? </span><a href="{{route('login')}}" class="text-black dark:text-white font-bold"> Sign in</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Content -->

                    <!-- Start Footer -->
                    <div class="text-center">
                        <p class="text-white/80">© <script>document.write(new Date().getFullYear())</script> Jawara Kompak. Design with <i class="mdi mdi-heart text-red-700"></i> by <a href="https://ejawara.id/" target="_blank" class="text-reset">Tim IT LPSPL Serang</a>.</p>
                    </div>
                    <!-- End Footer -->
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Hero End -->

<!-- Back Button -->
<div class="fixed bottom-3 right-3">
    <a href="" class="back-button btn btn-icon bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white rounded-full"><i data-feather="arrow-left" class="h-4 w-4"></i></a>
</div>
<!-- Back Button -->

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
<script src="assets/libs/feather-icons/feather.min.js"></script>
<script src="assets/js/plugins.init.js"></script>
<script src="assets/js/app.js"></script>
<!-- JAVASCRIPTS -->
</body>
</html>
