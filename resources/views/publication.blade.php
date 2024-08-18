<x-layout>
    <x-slot:title>Publications</x-slot:title>

    <!-- Carousel Section -->
    <div x-data="{ currentSlide: 0, slides: ['images/hehehe.jpg', 'images/ashada.jpg', 'images/putri.jpg'] }" class="relative w-full py-1">
        <div class="mx-auto max-w-7xl py-24 sm:px-6 sm:py-0 lg:px-8">
            <div class="relative isolate overflow-hidden bg-gray-900 px-6 scroll-pt-1 shadow-2xl sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">

                <!-- Image Carousel -->
                <div class="relative h-80 lg:flex-none lg:w-1/2 lg:order-first">
                    <template x-for="(slide, index) in slides" :key="index">
                        <img :src="slide" x-show="currentSlide === index" class="absolute inset-0 w-full h-full object-cover rounded-md bg-white/5 ring-1 ring-white/10 transition-opacity duration-700 ease-in-out" alt="Publication Slide">
                    </template>

                    <!-- Previous and Next Buttons -->
                    <button @click="currentSlide = (currentSlide === 0) ? slides.length - 1 : currentSlide - 1" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-lg hover:bg-gray-100">
                        &#8592;
                    </button>
                    <button @click="currentSlide = (currentSlide === slides.length - 1) ? 0 : currentSlide + 1" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-lg hover:bg-gray-100">
                        &#8594;
                    </button>
                </div>

                <!-- Content Section -->
                <div class="mx-auto max-w-md pb-12 text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
                    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-3/5xl">Our Latest Publications</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-300">Explore our extensive collection of publications, offering in-depth insights into the latest advancements in research, technology, and industry trends.</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
                        <a href="#featured" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Explore Publications</a>
                        <a href="#categories" class="text-sm font-semibold leading-6 text-white">Browse Categories <span aria-hidden="true">→</span></a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Carousel Indicators -->
        <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 flex space-x-3">
            <template x-for="(slide, index) in slides" :key="index">
                <button @click="currentSlide = index" :class="{'bg-white': currentSlide === index, 'bg-gray-400': currentSlide !== index}" class="w-3 h-3 rounded-full"></button>
            </template>
        </div>
    </div>

    <!-- Categories Section -->
    <section id="categories" class="bg-gray-100 py-16 sm:py-24 lg:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <h3 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Browse by Categories</h3>
            <div class="mt-10 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Repeat this block for each category -->
                <div class="flex items-center justify-between p-6 bg-white rounded-lg shadow-md">
                    <h4 class="text-lg font-semibold text-gray-900">Category Name</h4>
                    <a href="#" class="text-indigo-600 hover:text-indigo-500">View Articles</a>
                </div>
                <!-- End of Category Block -->
            </div>
        </div>
    </section>

    <!-- Recent Articles Section -->
    <section id="recent-articles" class="bg-white py-16 sm:py-24 lg:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <h3 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Recent Articles</h3>
            <div class="mt-10 grid gap-16 lg:grid-cols-3 lg:gap-x-12 lg:gap-y-16">
                <!-- Repeat this block for each recent article -->
                <article class="flex flex-col items-start">
                    <h4 class="mt-6 text-lg font-semibold leading-6 text-gray-900">Title of the Recent Article</h4>
                    <p class="mt-2 text-base leading-7 text-gray-600">A brief description of the article content.</p>
                    <a href="#" class="mt-4 text-sm font-semibold text-indigo-600 hover:text-indigo-500">Read More <span aria-hidden="true">→</span></a>
                </article>
                <!-- End of Article Block -->
            </div>
        </div>
    </section>

</x-layout>
