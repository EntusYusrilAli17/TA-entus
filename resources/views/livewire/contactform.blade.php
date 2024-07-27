<div>
    <section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800" id="contact">
    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-2xl text-xl font-medium">Hubungi kami !</h3>

            <p class="text-slate-400 dark:text-slate-300 max-w-xl mx-auto">Kirimkan pertanyaanmu, kami akan menghubungimu via email atau nomor WhatsApp terlampir.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-12 md:grid-cols-2 mt-8 items-center gap-[30px]">
            <div class="lg:col-span-8">
                <div class="p-6 rounded-md shadow bg-white dark:bg-slate-900">
                    <form wire:submit="save">
                        @if ($messageText)
                        <div class="px-4 py-3 mb-4 leading-normal text-blue-700 bg-blue-100 rounded-lg" role="alert">
                            {{ $messageText }}
                        </div>
                        @endif
                        <div id="simple-msg"></div>
                        <div class="grid lg:grid-cols-12 lg:gap-[30px]">
                            <div class="lg:col-span-6 mb-5">
                                <input wire:model="name" name="name" id="name" type="text" class="form-input" placeholder="Name :">
                                @error('name')
                                <div class="text-sm text-red-500 mt-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="lg:col-span-6 mb-5">
                                <input wire:model="email" name="email" id="email" type="email" class="form-input" placeholder="Email :">
                                @error('email')
                                <div class="text-sm text-red-500 mt-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div><!--end col-->
                        </div>

                        <div class="grid grid-cols-1">
                            <div class="mb-5">
                                <input wire:model="subject" name="subject" id="subject" class="form-input" placeholder="Subject :">
                                @error('subject')
                                <div class="text-sm text-red-500 mt-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-5">
                                <textarea wire:model="message" name="message" id="comments" class="form-input textarea h-28" placeholder="Message :"></textarea>
                                @error('message')
                                <div class="text-sm text-red-500 mt-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white rounded-md h-11 justify-center flex items-center">Send Message</button>
                    </form>
                </div>
            </div>

            <div class="lg:col-span-4">
                <div class="lg:ml-8">
                    <div class="flex">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-phone block rounded text-2xl text-black dark:text-white mb-0"></i>
                        </div>

                        <div class="flex-1 ml-6">
                            <h5 class="text-lg text-black dark:text-white mb-2 font-medium">Telepon</h5>
                            <a href="tel:+152534-468-854" class="text-slate-400">(0253) 802626</a>
                        </div>
                    </div>

                    <div class="flex mt-4">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-envelope block rounded text-2xl text-black dark:text-white mb-0"></i>
                        </div>

                        <div class="flex-1 ml-6">
                            <h5 class="text-lg text-black dark:text-white mb-2 font-medium">Email</h5>
                            <a href="mailto:contact@example.com" class="text-slate-400">lpsplserang@kkp.go.id</a>
                        </div>
                    </div>

                    <div class="flex mt-4">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-map-marker block rounded text-2xl text-black dark:text-white mb-0"></i>
                        </div>

                        <div class="flex-1 ml-6">
                            <h5 class="text-lg text-black dark:text-white mb-2 font-medium">Alamat</h5>
                            <p class="text-slate-400 mb-2">Jl. Raya Carita KM 4,5, Desa Caringin, Labuan, Pandeglang, Banten</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
</div>
