<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    {{-- header --}}
    <div class="header">
        
        <div class="logo">Benjamin</div>

        <div class="navlink"> 
        <a href="#" >Home</a>
        <a href="#" >Contact Us</a>
        <a href="#" >About us</a>

        </div>
        
    </div>
    
    {{-- end header --}}
 @yield('content')
 {{-- footer --}}

    <!-- footer -->
    <div class="footer">
        <div class="footer-top">
            <span>
                <h1>OFFICE</h1>
                <h3>street kg 45st</h3>
           
                
               </span>
            <span>
                <h1>OFFICE</h1>
                <h3>street kg 45st</h3>
            
            </span>
            <span>
                <h1>OFFICE</h1>
                <h3>street kg 45st</h3>
            
            </span>
        </div>
        <div class="footer-bottom">
            <span>© 2021 by tuyisingize benjamin</span>
           
        
        </div>
    </div>
   
{{-- end footer --}}
</body>
</html>