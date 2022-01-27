
<!DOCTYPE html>
<html>
    <head>

        <link rel="stylesheet" href={{ mix('css/app.css')}}>
    </head>
<body>

     <div class="person">
       
       
        <form method="POST" action="/favorite/assign-to-person">
            @csrf
            <h2>Add Favourite</h2>
        <select name="person_id" id="person_id">
            @foreach ($people as $person)
                <option value="{{$person-> id}}">
                {{$person-> first_name}} - {{$person-> last_name}}                
                </option>
            @endforeach
        </select><br>
        <input type="text" id="nameoffavourite" name="name"placeholder="Name of favourite"><br>
        <input type="text" id="type" name="description"placeholder="Description"><br>
        <button type="submit">SUBMIT</button>
    </form>
    </div>
  
</body>
</html>

