<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>

<body>
    <h2> Welcome to Dashboard</h2>
    <div class="dashboard">

        {{-- division for left block of dashboard --}}
        <div class="dashboard-left">
            <a href="#">Dashboard</a>
            <a href="#">People</a>
            <a href="#">Favorites</a>
            <a href="#">Badges</a>
        </div>

        {{-- division for right block of dasboard --}}
        <div class="dashboard-right">
            <a href="/people" class="total">
                <div>
                    <p>{{ $totalPeople }}</p>
                    <h2>People</h2>


                </div>
            </a>
            <a href="/favorites" class="total">
                <div>
                    <p> {{ $totalFavorites }}</p>
                    <h2>Favorites</h2>

                </div>
            </a>
            <a href="badges" class="total">
                <div>
                    <p> {{ $badges }}</p>
                    <h2>Dadge</h2>

                </div>
            </a>
        </div>
    </div>
</body>

</html>
