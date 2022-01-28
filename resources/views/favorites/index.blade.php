<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Favorites</title>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
    <!--css link-->
    <link rel="stylesheet" href={{ mix('css/app.css') }}>
</head>

<body>
    {{-- NavBar --}}
    @extends('components.navbar')
    {{-- End of Navbar --}}
    @section('content')
    <table class="fav_table">
        <tr class="header">
            <th>favorite name</th>
            <th>description</th>
        </tr>
        @foreach ($favorites as $fav)
            <tr class="fav_title">
                <td>{{ $fav->name }}</td>
                <td>{{ $fav->description }}</td>
            </tr>
        @endforeach
    </table>
    @endsection
</body>

</html>
