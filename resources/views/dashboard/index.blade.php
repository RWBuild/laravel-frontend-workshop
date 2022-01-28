<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <!--css link-->
    <link rel="stylesheet" href={{ mix('css/app.css') }}>
</head>

<body>
    {{-- NavBar --}}
    @extends('components.navbar')
    {{-- End of Navbar --}}
    @section('content')
    <div class="card_set">

        <!--card1 -->

        <div class="card">
            <div class="title">
                <h1>People</h1>
            </div>
            <div class="description">
                <p>There are {{ $totalPeople }} People here..</p>
            </div>
            <div class="descbutton">
                <a href="/people">List of People</a>
            </div>
        </div>
        <!--card2 -->


        <div class="card">
            <div class="title">
                <h1>Badges</h1>
            </div>
            <div class="description">
                <p>There are {{$badges}} badges here</p>
            </div>
            <div class="descbutton">
                <a href="/badges">List of badges</a>
            </div>
        </div>
        <!--card3 -->
        <div class="card">
            <div class="title">
                <h1>Favorites</h1>
            </div>
            <div class="description">
                <p>There are {{ $totalFavorites }} Favorites</p>
            </div>
            <div class="descbutton">
                <a href="/favorites">List of favorite</a>
            </div>
        </div>
        <!--cards -->



    </div>
    @endsection
</body>

</html>
