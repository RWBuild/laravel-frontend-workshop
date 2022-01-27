<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite</title>
</head>
<body>
    

<form action="/favorite/assign-to-person" method="POST">
        @csrf
        <select name="person_id" id="">
            @foreach($people as $person)
                <option value="{{ $person->id }}">{{ $person->first_name }} {{ $person->last_name }}</option>
            @endforeach
        </select>
        <div>
            <input type="text" name="type"  placeholder="type"> 
        </div>
        <div>
            <input type="text" name="name" placeholder="name">
        </div>
        <diV>
            <input type="text" name="description" placeholder="description">
        </div>
        <button type="submit">assign</button>
</form>

</body>
</html>