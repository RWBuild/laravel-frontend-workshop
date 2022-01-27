<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Favorites</title>
</head>

<body>
    
    <!--Favorites-->
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
</body>
</html>
