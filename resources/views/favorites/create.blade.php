<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Favorites</title>
</head>
<body>
    <div class="favform">
        <div class="header">
            <h1>Add your favorites</h1>
        </div>
        <form action="/favorite/assign-to-person" method="post">
            @csrf
            <label for="person">Person:</label>
            <select name="person_id" id="person_id">
                @foreach ($people as $person)
                    <option>{{ $person->first_name }} {{ $person->last_name }}</option>
                @endforeach
            </select><br>
            <label for="favname">Favorite thing:</label><br>
            <input type="text" name="name" placeholder="favorite thing."><br>
            <label for="description">Description:</label><br>
            <input type="text" name="description" placeholder="description"><br>

            <button type="submit">Add favorite</button>
        </form>
    </div>
</body>
</html>