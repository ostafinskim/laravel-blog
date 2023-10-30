<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laravel From Scratch Blog</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
                </a>
            </div>

            <div class="mt-8 md:mt-0 flex items-center">

                @auth
                    <span class='text-xs font-bold uppercase'>Welcome, {{ auth()->user()->name }}</span>

                    <form action="/logout" method="POST" class="text-sm font-semibold text-blue-500 ml-6">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>

                @else
                    <a href="/register" class='text-xs font-bold uppercase'>Register</a>
                    <a href="/login" class='mx-8 text-xs font-bold uppercase'>Login</a>
                @endauth



                <a href="#"
                    class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Subscribe for Updates
                </a>
            </div>
        </nav>



        {{ $slot }}

    </section>

    <x-flash />

    @include('partials.footer')

</body>

</html>
