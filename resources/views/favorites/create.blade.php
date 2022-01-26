
<!DOCTYPE html>
<html>
<body>

<h2>Add person</h2>
<form method="POST" action="/favorite/assign-to-person">
    @csrf
    <div class="person">
        <select name="person_id" id="person_id">
            @foreach ($people as $person)
                <option value="{{$person-> id}}">
                {{$person-> first_name}} - {{$person-> last_name}}                
                </option>
            @endforeach
        </select><br>
        <label for="nameoffavourite">Name of Favourite:</label><br>
        <input type="text" id="nameoffavourite" name="name"><br>
        <label for="type">Description:</label><br>
        <input type="text" id="type" name="description"><br>
        <button type="submit">SUBMIT</button>
    </div>
  </form>
</body>
</html>

