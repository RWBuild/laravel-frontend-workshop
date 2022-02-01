<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap');

    </style>


    <!--css link-->
    <link rel="stylesheet" href={{ mix('css/app.css') }}>
</head>

<body class="background">


    {{-- NavBar --}}
    @extends('components.navbar')
    {{-- End of Navbar --}}
    @section('content')
    @endsection
</body>

</html>
