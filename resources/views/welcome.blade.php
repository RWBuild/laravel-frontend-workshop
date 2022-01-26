<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RWBuild frontend</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            
        </style>
        <link rel="stylesheet" href="{{mix('/css/app.css')}}">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="homePage">
            {{-- header --}}
            <div class="homePage_header">
                <h1>Home page</h1>
            </div>
            {{-- Link --}}
            <div class="homePage_links">
                <a href="/people/create">1. Add person</a>
                <a href="/favorites/create">2. Add Favorites</a>
                <a href="#">3. Dashboard</a>
                <a href="#">4. Assign badges</a>
            </div>
        </div>
    </body>
</html>
