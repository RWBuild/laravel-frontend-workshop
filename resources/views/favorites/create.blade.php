<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Favorite</title>
</head>
<body>
    
    <p>people favorite</p>
    <form method="POST" action="/favorite/assign-to-person">
        @csrf
        <select name="person_id" id="person_id">
            @foreach ($people as $person)
         <option>
             
             {{$person->first_name}} - {{$person->last_name}}
                 
            
         </option>
         @endforeach
        </select>
        <input type="text" placeholder="add favorite" name=""/>
        <input type="text" placeholder="Description" />


      
        <button type="submit">Submit</button>
    </form>
</body>
</html>