<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100 dark:bg-gray-900">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full">
    <nav class="bg-white dark:bg-gray-800 shadow py-6">
        <div class="container mx-auto px-6 md:px-0 flex items-center justify-between">
            <div class="text-lg font-semibold">
                <a href="{{ url('/') }}" class="text-gray-800 dark:text-white">Metro Football Pick'em</a>
            </div>
            {{-- nav links in the middle --}}
            <div class="flex items-center">
                <div class="flex space-x-4">
                    <a href="/"
                        class="py-2 px-4 text-gray-700 rounded hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none focus:bg-gray-200 dark:focus:bg-gray-700 text-sm">Home</a>
                    {{-- about --}}
                    <a href="about"
                        class="py-2 px-4 text-gray-700 rounded hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none focus:bg-gray-200 dark:focus:bg-gray-700 text-sm">About</a>
                    {{-- registration --}}
                    <a href="registration"
                        class="py-2 px-4 text-gray-700 rounded hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none focus:bg-gray-200 dark:focus:bg-gray-700 text-sm">Registration</a>
                        <a href="rules"
                        class="py-2 px-4 text-gray-700 rounded hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none focus:bg-gray-200 dark:focus:bg-gray-700 text-sm">Rules</a>
                        {{-- teams --}}
                    <a href="teams"
                        class="py-2 px-4 text-gray-700 rounded hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none focus:bg-gray-200 dark:focus:bg-gray-700 text-sm">NFL Teams</a>
                        {{-- schedule --}}
                    {{-- standings --}}
                    <a href="picks"
                        class="py-2 px-4 text-gray-700 rounded hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none focus:bg-gray-200 dark:focus:bg-gray-700 text-sm">Picks</a>
                    <a href="#"
                        class="py-2 px-4 text-gray-700 rounded hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none focus:bg-gray-200 dark:focus:bg-gray-700 text-sm">Main Standings</a>
                        <a href="#"
                        class="py-2 px-4 text-gray-700 rounded hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none focus:bg-gray-200 dark:focus:bg-gray-700 text-sm">Hot Tub Standings</a>
                        <a href="payouts"
                        class="py-2 px-4 text-gray-700 rounded hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none focus:bg-gray-200 dark:focus:bg-gray-700 text-sm">Payouts</a>
                        <a href="#"
                        class="py-2 px-4 text-gray-700 rounded hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none focus:bg-gray-200 dark:focus:bg-gray-700 text-sm">Hall of Fame</a>
                </div>
            </div>
            {{-- if auth logged in --}}
            @if (Auth::check())
                <div class="flex items-center">
                    <div x-data="{ open: false }" @mouseleave="open = false" class="relative">
                        <!-- User dropdown -->
                        <button @click="open = !open"
                            class="relative z-10 block h-8 w-8 rounded-full overflow-hidden border-2 border-gray-600 focus:outline-none">
                            {{-- random avatar --}}
                            <img src="https://i.pravatar.cc/150?img={{ rand(1, 70) }}"" alt="Your avatar"
                                class="h-full w-full object-cover">
                        </button>
                        <div x-show="open"
                            class="absolute right-0 mt-2 py-2 w-48 bg-white dark:bg-gray-700 shadow-xl rounded-md overflow-hidden z-20">
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-800 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600">Settings</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-800 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600">Logout</a>
                        </div>
                    </div>

                    {{-- <div x-data="{ darkMode: false }" @click="darkMode = !darkMode; document.documentElement.classList.toggle('dark')" class="cursor-pointer">
                        <span x-show="!darkMode">🌞</span> <!-- Light mode icon -->
                        <span x-show="darkMode">🌜</span> <!-- Dark mode icon -->
                    </div> --}}
                </div>
            @else
                {{-- Register and login buttons with tailwind.  --}}
                <div
                    class="flex items-center justify-between text-base text-gray-700 dark:text-gray-200 md:ml-10">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-5">
                        <a href="{{ route('register') }}">Register</a>
                    </button>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        <a href="{{ route('login') }}">Login</a>
                    </button>
                </div>
            @endif
        </div>
    </nav>

    <div class="container mx-auto py-8">
        <main>
            {{ $slot }}
        </main>
    </div>
    {{-- <livewire:layout.navigation />

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
             --}}
    </div>
</body>

</html>
