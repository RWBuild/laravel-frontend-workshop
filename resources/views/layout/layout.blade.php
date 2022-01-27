<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RwBuild WorkShop</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    <nav>
        <div class="nav-bar background">
            <a id="logo">
                Laetitia
            </a>
            <div class="topnav">
                <a href="/">Home</a>
                <a href="#">About Us</a>
                <a href="#">Contact us</a>

            </div>
            <div>
                <a href="#">Login</a>
                <a href="#">Sign Up</a>
            </div>
        </div>
    </nav>

    {{-- content will be displayed here --}}
    <div class="content-childreen">

    @yield('content')

    </div>
    {{-- content will be displayed here --}}



    {{-- footer start here --}}
    <footer>
        <div class="footer background">
            

        </div>
        <div class="footer-bottom">
            <p>&copy copyright RWBuild Workshop 2022</p>
        </div>
    </footer>
</body>

</html>
