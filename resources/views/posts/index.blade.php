<x-layout>
    @include('partials.header')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if ($posts->count())
            <x-post-featured-card :post="$posts[0]" />

            <x-posts-grid :posts="$posts" />
        @else
            <p class="text-center">No posts yet. Please come back later.</p>
        @endif

        {{ $posts->links() }}

    </main>
</x-layout>
