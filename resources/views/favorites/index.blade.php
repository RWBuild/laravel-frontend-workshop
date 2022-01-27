<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorites</title>
</head>
    
<body class="antialiased">
        <h1>Favorite</h1>
        @foreach ($favorites as $favorite)
                <div>
                    <h3>{{ $favorite->type}}  </h3>
                    <p> {{ $favorite->name}}</p>
                    <p>{{$favorite-> description}}</p>
                    
                </div>
        @endforeach
</body>
</html>