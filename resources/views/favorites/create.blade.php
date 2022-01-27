<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Favorites</title>
    <style>
        body {
            background: #ecf1f4;
        }

        .form-wrap {
            width: 476px;
            padding: 70px 70px;
            background-color: white;
            box-sizing: border-box;
            position: fixed;
            left: 33%;
            top: 11%;
            translate: (-50% -50%);

        }

        h1 {
            text-align: center;
            color: black;
            font-weight: normal;
            margin-bottom: 40px;
        }

        input {
            width: 100%;
            background: none;
            border: 1px solid black;
            border-radius: 3px;
            padding: 6px 15px;
            box-sizing: border-box;
            margin-bottom: 20px;
            font-size: 16px;
        }

        select {
            width: 100%;
            background: none;
            border: 1px solid black;
            border-radius: 3px;
            padding: 6px 15px;
            box-sizing: border-box;
            margin-bottom: 20px;
            font-size: 16px;
        }

        button {
            width: 100%;
            background: none;
            border-radius: 3px;
            padding: 6px 15px;
            font-size: 16px;
        }

        button:hover {
            background-color: rgb(155, 155, 204);
            cursor: pointer;
        }

    </style>
</head>

<body>
    <!--navbar-->
    @extends('components.layout')
    <!--End of navbar-->
    <!--Favorites-->
    @section('content')
        <div class="form-wrap">
            <div class="header">
                <h1>Add your favorites</h1>
            </div>
            <form action="/favorite/assign-to-person" method="post">
                @csrf
                <select name="person_id" id="person_id" required>
                    @foreach ($people as $person)
                        <option value="{{ $person->id }}">{{ $person->first_name }} {{ $person->last_name }}</option>
                    @endforeach
                </select><br>
                <input type="text" name="name" placeholder="favorite thing." required>
                <input type="text" name="description" placeholder="description" required>


                <button type="submit">Add favorite</button>
            </form>
        </div>
        <!--End of favorites-->
    @endsection
</body>

</html>
