<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>

<body>
    <div class="card">
        <p>{{ $totalPeople }} People here</p>

        <a href="/people">List of People</a>
    </div>
    <div class="card">
        <p>{{$badges}} badges here</p>
        <a href="/badges">List of badges</a>
    </div>
    <div class="card">
        <p>{{ $totalFavorites }} Favorites</p>
        <a href="/favorites">List of favorite</a>
    </div>
</body>

</html>
