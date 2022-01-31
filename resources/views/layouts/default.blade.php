<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="{{ mix('css/app.css') }}" rel=stylesheet" />

        <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    </head>
    <body class="antialiased min-h-screen bg-gray-50">
        {{-- Header --}}
        <div class="bg-white flex h-14 w-full items-center justify-between px-5 shadow-sm">

            {{-- Primary Menus --}}
            <div class="flex justify-between space-x-16 items-center">
                {{-- Logo --}}
                <div>
                    <a href="/" class="font-bold text-primary" />Wefriends</a>
                </div>
                {{-- Menus --}}
                <div class="flex space-x-4">
                    <a href="/people/create" class="btn">Add Person</a>
                    <a href="/favorites/create" class="btn">Add Favorites</a>
                    <a href="/dashboard" class="btn">Dashboard</a>
                    <a href="/badges/assign" class="btn">Assign Badges</a>
                </div>
            </div>

            {{-- Secondary menus --}}
            <div>
                <button class="bg-primary px-6 py-2 text-white rounded-full">
                    <a href="#">Sign in</a>
                </button>
            </div>

        </div>

        <div>
            @yield('content')
        </div>

    </body>
</html>
