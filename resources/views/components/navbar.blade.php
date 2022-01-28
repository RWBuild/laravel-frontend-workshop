<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--css link-->
    <link rel="stylesheet" href={{ mix('css/app.css') }}>
    <title>Nabar</title>
</head>
<body>
    <nav class="navbar">
        <!-- LOGO -->
        <div class="logo">Alice</div>
        <!-- NAVIGATION MENU -->
        <ul class="nav-links">
          <!-- NAVIGATION MENUS -->
          <div class="menu">
            <li><a href="/people/create">Add a person</a></li>
            <li><a href="/favorites/create">Add a favorite</a></li>
            <li><a href="/badges/assign">Assign badges</a></li>
            <li><a href="/dashboard">Dashboard</a></li>
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