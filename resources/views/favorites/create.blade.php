@extends('layout.app')


@section('content')

<div class="container">
       
    <header>Add Favorites </header>
            
    <form class="loginform" name="form" method="POST" action="/favorite/assign-to-person">
       

        @csrf
       
        <select class="input-field"  name="person_id">
            
        @foreach ($people as $user)
        
             <option value="{{ $user->id }}"> {{ $user->first_name }} {{ $user->last_name}}</option>
            
        


         @endforeach
        </select>
   

        <div class="input-field">
            <label>Name </label>
            <input type="text" id="email" name="name" >
            <div class="error">
                @error('name')
                {{ $message }}
            @enderror
            </div>
            
        </div>

        <div class="input-field">
            <label>Type </label>
            <input type="text" id="email" name="type" >
            <div class="error">
                @error('type')
                {{ $message }}
            @enderror
            </div>
            
        </div>

        <div class="input-field">
            <label> description</label>
            <textarea class="pswrd" type="text" id="pass"  name="description"  ></textarea>
            <div class="error">
                @error('description')
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



    