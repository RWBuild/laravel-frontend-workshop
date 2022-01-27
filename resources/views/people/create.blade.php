<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People</title>
</head>
<body>
    <div>
        <form action="/people" method="POST">
            @csrf
            <div>
                <input type="text" name="first name" placeolder="first name"> 
            </div>
            <div>
            <input type="text"  name="last name" placeolder="last name"> 
            </div>

            <div>
            <input type="email" name="email" placeolder="email "> 
            </div>

            <div>
            <input type="date"  name="dob" placeolder="dob"> 
            </div>
                
            <div>
            <button type="submit" class="btn"> create  
            </div>
</form>
    </diV>

</body>
</html>