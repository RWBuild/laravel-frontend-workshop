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
    <div class="bg-gray-700 text-white font-bold flex justify-around p-4 sticky top-0 z-50">
        
        <div class="logo">Benjamin</div>

        <div class="navlink"> 
        <a href="#"class="m-2" >Home</a>
        <a href="#" class="m-2" >Contact Us</a>
        <a href="#" class="m-2" >About us</a>

        </div>
        
    </div>
    
    {{-- end header --}}
 @yield('content')
 {{-- footer --}}

    <!-- footer -->
    <footer class=" bg-gray-700   pt-1 border-b-2  border-white  bottom-0 ">
        <div class="">
          <div class="sm:flex sm:mt-8">
            <div class=" sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between">
              <div class="flex flex-col">
                <span class="font-bold text-white uppercase ">
                  office
                </span>

                <span class="flex ">
                  
                  <h3 class="text-sm font-bold  text-white">
                    street kg 45st
                  </h3>
                </span>
                <span class="">
                  <a
                    href="#"
                    class="text-white  text-md hover:text-white"
                  >
                    gisozi
                  </a>
                </span>
              </div>

             

              <div class="flex flex-col">
                <span class="font-bold text-white uppercase md:mt-0 ">
                  contact
                </span>
                <span class="flex  ">
                  

                  <h3 class="text-sm font-bold text-white  ">
                    +250-787438701
                  </h3>
                </span>
                <span class="flex ">
                 

                  <h3 class="text-sm font-bold  text-white">
                    tbenpollyl@gmail.com
                  </h3>
                </span>
              </div>

              
              <div class="flex flex-col">
                <span class="font-bold text-white uppercase  md:mt-0 ">
                  contact
                </span>
                <span class="flex  ">
                 

                  <h3 class="text-sm font-bold text-white  ">
                    +250-787438701
                  </h3>
                </span>
                <span class="flex ">
                 

                  <h3 class="text-sm font-bold  text-white">
                    tbenpollyl@gmail.com
                  </h3>
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="container mx-auto ">
          <div class="mt-16 border-t-2 border-white flex flex-col items-center">
            <div class="sm:w-2/3 flex space-x-20 items-center text-center ">
              <p class="text-sm text-white font-bold py-2 ">
                © 2021 by tuyisingize benjamin
              </p>

              
            </div>
          </div>
        </div>
      </footer>
   
{{-- end footer --}}
</body>
</html>