@php use Carbon\Carbon; @endphp
@extends('frontend.layouts.layout')
@section('content')
<!-- Hero Start -->
        <section class="py-28 w-full table relative bg-[url('../../assets/images/bg/bg.jpg')] bg-bottom bg-no-repeat" id="home">
            <div class="absolute inset-0 bg-black/80"></div>

            <div class="container">
                <div class="grid grid-cols-1 pb-8 text-center mt-10">
                    <h3 class="mb-3 font-medium leading-normal text-3xl mt-10 text-white">{{$post->title}}</h3>

                    <ul class="list-none mt-6">
                        <li class="inline-block text-white/50 mx-5"> <span class="text-white block">Publikasi :</span> <span class="block">{{ Carbon::parse($post->published_at)->format('D, d M Y') }}</span></li>
                    </ul>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Hero End -->

        <section class="relative md:py-24 py-16">
            <div class="container">
                <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                    <div class="lg:col-span-8 md:col-span-6">
                        <div class="p-6 rounded-md shadow dark:shadow-gray-800">

                            <img src="{{ $post->getFirstMedia('featured_image')->getUrl() }}" class="rounded-md" alt="">

                            <div class="mt-6">
                                {!! $post->content !!}
                            </div>
                        </div>

                        <div class="p-6 rounded-md shadow dark:shadow-gray-800 mt-8">
                            <h5 class="text-lg font-semibold">Leave A Comment:</h5>

                            <form class="mt-8">
                                <div class="grid lg:grid-cols-12 lg:gap-6">
                                    <div class="lg:col-span-6 mb-5">
                                        <div class="text-left">
                                            <label for="name" class="font-semibold">Your Name:</label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="user" class="w-4 h-4 absolute top-3 left-4"></i>
                                                <input name="name" id="name" type="text" class="form-input pl-11" placeholder="Name :">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="lg:col-span-6 mb-5">
                                        <div class="text-left">
                                            <label for="email" class="font-semibold">Your Email:</label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="mail" class="w-4 h-4 absolute top-3 left-4"></i>
                                                <input name="email" id="email" type="email" class="form-input pl-11" placeholder="Email :">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1">
                                    <div class="mb-5">
                                        <div class="text-left">
                                            <label for="comments" class="font-semibold">Your Comment:</label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="message-circle" class="w-4 h-4 absolute top-3 left-4"></i>
                                                <textarea name="comments" id="comments" class="form-input pl-11 h-28" placeholder="Message :"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" id="submit" name="send" class="btn bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white rounded-md w-full">Send Message</button>
                            </form>
                        </div>
                    </div>

                    <div class="lg:col-span-4 md:col-span-6">
                        <div class="sticky top-20">
                            <h5 class="text-lg font-medium bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center">Author</h5>
                            <div class="text-center mt-8">
{{--                                <img src="assets/images/client/05.jpg" class="h-24 w-24 mx-auto rounded-full shadow mb-4" alt="">--}}

                                <a href="" class="text-lg font-medium hover:text-violet-600 transition-all duration-500 ease-in-out h5">{{$post->author->name}}</a>
                                <p class="text-slate-400">Content Writer</p>
                            </div>

                            <h5 class="text-lg font-medium bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center mt-8">Social sites</h5>
                            <ul class="list-none text-center mt-8">
                                <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-violet-600 hover:text-white hover:bg-violet-600"><i data-feather="facebook" class="h-4 w-4"></i></a></li>
                                <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-violet-600 hover:text-white hover:bg-violet-600"><i data-feather="instagram" class="h-4 w-4"></i></a></li>
                                <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-violet-600 hover:text-white hover:bg-violet-600"><i data-feather="twitter" class="h-4 w-4"></i></a></li>
                                <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-violet-600 hover:text-white hover:bg-violet-600"><i data-feather="linkedin" class="h-4 w-4"></i></a></li>
                                <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-violet-600 hover:text-white hover:bg-violet-600"><i data-feather="github" class="h-4 w-4"></i></a></li>
                                <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-violet-600 hover:text-white hover:bg-violet-600"><i data-feather="youtube" class="h-4 w-4"></i></a></li>
                                <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-violet-600 hover:text-white hover:bg-violet-600"><i data-feather="gitlab" class="h-4 w-4"></i></a></li>
                            </ul><!--end icon-->
                        </div>
                    </div>
                </div>
            </div>

@endsection
