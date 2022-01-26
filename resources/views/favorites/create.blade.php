<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
</head>
<body>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <div>
        <div class="homePage_header">
            <h1>Add person</h1>
        </div>

        <div class="login_form">
            <form action="/favorite/assign-to-person" method="POST">
                @csrf
                <h1>Add favorite</h1>
                <select name="person_id" id="">
                    @foreach ($people as $people)
                        <option value="{{$people->id}}">{{$people->first_name}} {{$people->last_name}}</option>
                    @endforeach
                </select>
                <input type="text" name="name" placeholder="name" required>
                <input type="text" name="type" placeholder="type" required>
                <textarea name="description" placeholder="Description"></textarea>
                
                <button>Submit</button>
            </form>
        </div>
    </div>
</body>
</html>