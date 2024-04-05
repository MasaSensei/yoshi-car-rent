<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> -->
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex min-h-screen flex-col bg-gray-100 transition-colors duration-150">
        <div class="flex flex-1">
            <div class="fixed bottom-0 z-10 hidden h-full w-72 bg-slate-800 shadow transition-[width] duration-300 left-0 right-auto lg:block pt-20 lg:w-72">
                @include('layouts.sidebar')
            </div>
            <main class="relative flex w-full flex-col justify-start transition-[padding] duration-300 pt-[72px] lg:pt-20 lg:pl-72 lg:pl-0">
                <div class="h-full p-5 md:p-8">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
</body>

</html>