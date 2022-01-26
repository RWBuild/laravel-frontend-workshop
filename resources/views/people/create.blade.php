
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <!-- body -->
     <div class="container">
        <!-- <div class="circle"></div> -->
    
       
        <div class="inner-container">

            <div class="image">
             <img src="./assets/login.png"/>
            </div>
        <form class="loginform" name="form" method="POST" action="/people">
                  @csrf
            <div class="input-field">
                <label>firstname </label>
                <input type="text" id="email" name="  first_name" required>

                
            </div>

            <div class="input-field">
                <label> lastname</label>
                <input class="pswrd" type="text" id="pass"  name="last_name" required>

                
            </div>
            <div class="input-field">
                <label>Email </label>
                <input type="text" id="email" name="email" required>

                
            </div>
            <div class="input-field">
                <label>Date </label>
                <input type="date" id="email" name="dob" required>

                
            </div>

            <div class="button">

                <button type="submit"  name=""  >Add</button>
            </div>
        </form>

    </div>
</body>
</html>