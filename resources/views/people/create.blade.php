<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <title>CREATE PERSON</title>
</head>
<body>
  <div class="center-box">
    <div>
      <h3>Add Person</h3>
      <form action="/people" method="POST">
        @csrf
        <div class="form-group">
          <input type="text" name="first_name" id="first_name" placeholder="first name">
        </div>
        <div class="form-group">
          <input type="text" name="last_name" id="last_name" placeholder="last_name">
        </div>
        <div class="form-group">
          <input type="email" name="email" id="email" placeholder="email">
        </div>
        <div class="form-group">
          <input type="date" name="dob" id="dob" placeholder="dob">
        </div>
        <button type="submit" class="btn">Create</button>
      </form>
    </div>
  </div>
</body>
</html>