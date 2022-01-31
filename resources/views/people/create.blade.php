
@extends('layout.app')

@section('content')


     <!-- body -->
     <div class=" bg-gray-100 flex flex-col justify-center items-center min-h-screen">
       
        <header class="font-bold text-4xl text-center text-gray-700"> Add People </header>
       
        
        <form class="" name="form" method="POST" action="/people">
            @csrf 
            <div class=" ">
              
                <input type="text" id="email" name="  first_name"  placeholder="firstname">
                <div class="error">
                    @error('first_name')
                    {{ $message }}
                @enderror
                </div>
              

                
            </div>

            <div class=" ">
               
                <input class="" type="text" id="pass"  name="last_name" placeholder="lastname">
                <div class="error">
                    @error('last_name')
                    {{ $message }}
                @enderror
                </div>
             
                
            </div>
            <div class=" ">
          
                <input class="" type="text" id="email" name="email" placeholder="Email">
                <div class="error">
                    @error('email')
                    {{ $message }}
                @enderror
                </div>
             
                
            </div>
            <div class=" ">
              
                <input class="" type="date" id="email" name="dob" placeholder="Date">
                <div class="error">
                    @error('dob')
                    {{ $message }}
                @enderror

                </div>
              
                
            </div>

            <div class=" flex justify-center items-center" >
                <button class="bg-gray-700 m-4 transition duration-700 ease-in-out rounded-lg p-4 text-white" >Add</button>
            </div>
        </form>

    </div>
    @endsection