<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="pt-4 max-w-screen-md pb-3 border-b border-gray-300">
        <h2 class="text-3xl tracking-tight font-bold mb-4">{{ $post['title'] }}</h2>

        <div class="mb-2 font-semibold text-gray-500 text-sm">
            <a href="#">{{ $post['author'] }}</a> | 1 August 2001
        </div>

        <div>
            <p>{{ $post['body'] }}</p>
        </div>

        <div class="mt-4 mb-2">
            <a href="/posts" class=" font-bold text-blue-500 hover:underline hover:text-blue-900">&laquo; Back to menu
            </a>
        </div>
    </article>
</x-layout>
