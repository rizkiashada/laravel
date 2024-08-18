<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        <article class="pt-4 max-w-screen-md pb-3 border-b border-gray-300 mobile-padding">
            <a href="/posts/{{ $post['slug'] }}" class="hover:text-blue-900 hover:underline">
                <h2 class="text-3xl tracking-tight font-bold mb-4">{{ $post['title'] }}</h2>
            </a>
            <div class="mb-2 font-semibold text-gray-500 text-sm">
                <a href="#">{{ $post['author'] }}</a> | 1 August 2001
            </div>

            <div>
                <p>{{ Str::limit($post['body'],200) }}</p>
            </div>

            <div class="mt-4 mb-2">
                <a href="/posts/{{ $post['slug'] }}" class=" font-bold text-blue-500 hover:underline hover:text-blue-900">Read More
                    &raquo;</a>
            </div>
        </article>
    @endforeach

</x-layout>
