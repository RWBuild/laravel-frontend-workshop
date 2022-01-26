<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <title>Add Person</title>
</head>
<body>
    <!--Add Person Form-->
    <div class="form">
        <div class="header">Add a person</div>
        <form action="/people" method="post">
            @csrf
            <label for="firstname">FirstName:</label><br>
            <input type="text" name="first_name" placeholder="Enter your First-name"><br>
            <label for="lastname">Lastname:</label><br>
            <input type="text" name="last_name" placeholder="Enter your Last-name"><br>
            <label for="email">Email:</label><br>
            <input type="text" name="email" placeholder="Add your email"><br>
            <label for="date">Date of Birth:</label><br>

            <input type="date" name="dob"><br>
            <button type="submit">Add</button>
        </form>
    </div>
</body>
</html>