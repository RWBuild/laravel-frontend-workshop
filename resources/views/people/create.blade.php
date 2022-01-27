
@extends('layout.app')

@section('content')


     <!-- body -->
     <div class="container">
       
        <header> Add Peaple </header>
       
        
        <form class="loginform" name="form" method="POST" action="/people">
            @csrf 
            <div class="input-field">
                {{-- <label>firstname </label> --}}
                <input type="text" id="email" name="  first_name"  placeholder="firstname">
                <div class="error">
                    @error('first_name')
                    {{ $message }}
                @enderror
                </div>
              

                
            </div>

            <div class="input-field">
                {{-- <label> lastname</label> --}}
                <input class="pswrd" type="text" id="pass"  name="last_name" placeholder="lastname">
                <div class="error">
                    @error('last_name')
                    {{ $message }}
                @enderror
                </div>
             
                
            </div>
            <div class="input-field">
                {{-- <label>Email </label> --}}
                <input type="text" id="email" name="email" placeholder="Email">
                <div class="error">
                    @error('email')
                    {{ $message }}
                @enderror
                </div>
             
                
            </div>
            <div class="input-field">
                {{-- <label>Date </label> --}}
                <input type="date" id="email" name="dob" placeholder="Date">
                <div class="error">
                    @error('dob')
                    {{ $message }}
                @enderror

                </div>
              
                
            </div>

            <div class="button">
                <button class="button" >Add</button>
            </div>
        </form>

    </div>
    @endsection