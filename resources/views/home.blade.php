    <x-layout>
        <x-slot:title>{{ $title }}</x-slot:title>
        <div class=" w-full py-1">
            <div class="mx-auto max-w-7xl py-24 sm:px-6 sm:py-0 lg:px-8">
                <div
                    class="relative isolate overflow-hidden bg-gray-900 px-6 scroll-pt-1 shadow-2xl sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
                    <div class="shadow-slate-100 relative mt-32 h-80 lg:flex-none lg:w-1/2 lg:order-first">
                        <img class="images1 absolute inset-0 w-full h-full object-cover rounded-md bg-white/5 ring-1 ring-white/10"
                            src="images/ashada.JPG" alt="App screenshot" width="1824" height="1080">
                    </div>
                    <svg viewBox="0 0 1024 1024"
                        class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] sm:left-full sm:-ml-80 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2 lg:translate-y-0"
                        aria-hidden="true">
                        <circle cx="512" cy="512" r="512" fill="url(#759c1415-0410-454c-8f7c-9a820de03641)"
                            fill-opacity="0.7" />
                        <defs>
                            <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641">
                                <stop stop-color="#7775D6" />
                                <stop offset="1" stop-color="#E935C1" />
                            </radialGradient>
                        </defs>
                    </svg>
                    <div class="mx-auto max-w-md pb-12 text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
                        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-3/5xl">Aspiring Software
                            Engineer<br> with a Passion for Innovation.</h2>
                        <p class="mt-6 text-lg leading-8 text-gray-300">Rizki Ashada is an Information Systems graduate
                            specializing in software engineering, passionate about innovation and problem-solving in
                            technology.</p>
                        <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
                            <a href="#"
                                class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Get
                                started</a>
                            <a href="#" class="text-sm font-semibold leading-6 text-white">Learn more <span
                                    aria-hidden="true">→</span></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <x-slider></x-slider>

    </x-layout>
