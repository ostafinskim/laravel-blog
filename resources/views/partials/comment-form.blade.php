@auth
    <x-panel>
        <form action="/posts/{{ $post->slug }}/comments" method="POST">

            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/40?u={{ auth()->id() }}" alt="User">
                <h2 class="ml-4 text-xl font-bold">Say something!</h2>
            </header>

            <div class="mt-6">
                <textarea name="body" id="body" rows="5" class="w-full text-sm border" required></textarea>
            </div>

            @error('body')
                <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror

            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                <button type="submit"
                    class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-xl hover:bg-blue-600">Post</button>
            </div>

        </form>
    </x-panel>
@else
    <x-panel class="text-center">
        <h2 class="text-xl">Something to say?</h2>
        <a class="inline-block mt-5 bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-xl"
            href="/login">Login here</a>
    </x-panel>
@endauth
