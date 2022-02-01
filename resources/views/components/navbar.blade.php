<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar</title>
    <!--css link-->
    <link rel="stylesheet" href={{ mix('css/app.css') }}>
</head>

<body class="background">
    <nav class="flex items-center justify-between p-5 ">
        <!-- LOGO -->
        <div class="text-2xl decoration">Alice</div>
        <!-- NAVIGATION MENU -->
        <ul class="text-xl">
            <!-- NAVIGATION MENUS -->
            <div class="flex gap-0 ">
                <li class="decoration hover:bg-fuchsia-300 px-5 py-2 rounded transition-all"><a href="/people/create">Add a
                        person</a></li>
                <li class="decoration hover:bg-fuchsia-300 px-5 py-2 rounded transition-all"><a href="/favorites/create">Add a
                        favorite</a></li>
                <li class="decoration hover:bg-fuchsia-300 px-5 py-2 rounded transition-all"><a href="/badges/assign">Assign
                        badges</a></li>
                <li class="decoration hover:bg-fuchsia-300 px-5 py-2 rounded transition-all"><a href="/dashboard">Dashboard</a></li>
            </div>
        </ul>

    </nav>
    {{-- End of nav bar --}}
    {{-- content --}}
    <div class="content">
        @yield('content')
    </div>

</body>

</html>
