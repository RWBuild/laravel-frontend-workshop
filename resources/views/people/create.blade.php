<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
</head>
<body>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <div>
        <div class="homePage_header">
            <h1>Add person</h1>
        </div>

        <div class="login_form">
            <form action="/people" method="POST">
                @csrf
                <h1>Add</h1>
                <input type="text" name="first_name" placeholder="First name" required>
                <input type="text" name="last_name" placeholder="Last name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="date" name="dob">
                <button>Submit</button>
            </form>
        </div>
    </div>
</body>
</html>