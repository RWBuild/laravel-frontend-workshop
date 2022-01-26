<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
       

            
        <form class="loginform" name="form" method="POST" action="/favorite/assign-to-person">

            @csrf
            <div class="">

                <button type="submit"  name="" >Add</button>
            </div>
            <select>
            @foreach ($people as $user)
            
                 <option value="{{ $user->id }}"> {{ $user->first_name }} {{ $user->last_name}}</option>
                
            


             @endforeach
            </select>

            <div class="input-field">
                <label>Name </label>
                <input type="text" id="email" name="  first_name" required>

                
            </div>

            <div class="input-field">
                <label> description</label>
                <textarea class="pswrd" type="text" id="pass"  name="last_name" required >

                
            </div>
           
            
          
           

        </form>

    </div>
</body>
</html>