<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add</title>
</head>
<body>
    <p>add people</p>
    <form method="POST" action="/people">
        @csrf
        <input type="text" placeholder="First Name" name="first_name"/>
        <input type="text" placeholder="Last Name" name="last_name"/>
        <input type="email" placeholder="Email" name="email"/>
        <input type="date" placeholder="DoB" name="dob"/>
        <button type="submit">Submit</button>
    </form>
    
</body>
</html>