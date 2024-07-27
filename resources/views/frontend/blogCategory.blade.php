@extends('frontend.layouts.layout')
@section('content')
    <!-- Hero Start -->
        <section class="py-28 w-full table relative bg-[url('../../assets/images/bg/bg-5.jpg')] bg-bottom bg-no-repeat" id="home">
            <div class="absolute inset-0 bg-black/80"></div>

            <div class="container">
                <div class="grid grid-cols-1 pb-8 text-center mt-10">
                    <h3 class="font-medium leading-normal text-3xl mt-10 text-white">Blogs or News</h3>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Hero End -->

        <!-- Start -->
        <section class="relative md:py-24 py-16" id="blog">
            <div class="container">
                <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
                    @foreach($posts as $post)
                    <div class="blog relative rounded-md shadow shadow-slate-200 dark:shadow-gray-800 overflow-hidden">
                        <a href="{{ route('post', $post->slug) }}"><img src="{{ $post->getFirstMedia('featured_image')->getUrl() }}" alt=""></a>


                        <div class="content p-6">
                            <a href="{{ route('post', $post->slug) }}" class="text-lg hover:text-violet-600 dark:text-white dark:hover:text-violet-600 transition duration-500 ease-in-out font-medium h5">{{ $post->title }}</a>
                            <p class="text-slate-400 mt-3">{{ $post->excerpt }}</p>

                            <div class="mt-5">
                                <a href="" class="hover:text-violet-600 dark:hover:text-violet-600 after:bg-violet-600 dark:text-white transition duration-500">Read More <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

@endsection
