<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <title>CREATE FAVORITES</title>
</head>
<body>
  <div class="center-box">
    <div>
      <h3>Add Favorites</h3>
      <form action="/favorite/assign-to-person" method="POST">
        @csrf
        <div class="form-group">
          <select name="person_id" id="person_id">
            @forelse ($people as $person)
                <option value="{{ $person->id }}">
                  {{ $person->first_name}} {{ $person->last_name }} 
                </option>
            @empty
                <option>no person</option>
            @endforelse
          </select>
        </div>
        <div class="form-group">
          <input type="text" name="type" id="type" placeholder="type">
        </div>
        <div class="form-group">
          <input type="text" name="name" id="name" placeholder="name of favorite">
        </div>
        <div class="form-group">
          <textarea name="description" id="" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn">Create</button>
      </form>
    </div>
  </div>
</body>
</html>