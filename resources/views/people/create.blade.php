
<!DOCTYPE html>
<html>
    <head>

        <link rel="stylesheet" href={{ mix('css/app.css')}}>
    </head>
<body>


    <div class="container">
        <form method="POST" action="/people">
            @csrf
            <h2>Add person</h2>
            <input type="text" id="fname" name="first_name" placeholder="First name" required><br>
            <input type="text" id="lname" name="last_name"placeholder="Last name" required><br>
            <input type="text" id="email" name="email"placeholder="Email" required><br>
            <input type="date" id="dob" name="dob"placeholder="Dob"><br>
            <button type="submit">SUBMIT</button>
        </form>
    </div>

</body>
</html>

