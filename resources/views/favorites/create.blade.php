@extends('layout.app')


@section('content')

<div class="bg-gray-100 flex flex-col justify-center items-center min-h-screen">
       
    <header class="font-bold text-4xl text-center text-gray-700" >Add Favorites </header>
            
    <form class="" name="form" method="POST" action="/favorite/assign-to-person">
       

        @csrf
       
        <select class="input-field" placeholder="" name="person_id">
            <option> select----</option>
        @foreach ($people as $user)
             
             <option value="{{ $user->id }}"> {{ $user->first_name }} {{ $user->last_name}}</option>
            
        


         @endforeach
        </select>
   

        <div class="input-field">
           
            <input type="text" id="email"placeholder="email" name="name" >
            <div class="error">
                @error('name')
                {{ $message }}
            @enderror
            </div>
            
        </div>

        <div class="input-field">
            
            <input type="text" id="email" placeholder="type"name="type" >
            <div class="error">
                @error('type')
                {{ $message }}
            @enderror
            </div>
            
        </div>

        <div class="input-field">
           
            <textarea class="pswrd" type="text" placeholder="description"id="pass"  name="description"  ></textarea>
            <div class="error">
                @error('description')
                {{ $message }}
            @enderror
            </div>

            
        </div>
       
     
        <div class="flex justify-center items-center">
            <button class="button" >Add</button>
        </div>
       

    </form>

</div>

@endsection



    