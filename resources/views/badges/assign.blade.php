

@extends('layout.app')


@section('content')



<div class="bg-gray-100 flex flex-col justify-center items-center min-h-screen">
       
    <header class="font-bold text-4xl text-center text-gray-700 m-2">Assign Badges To Person </header>

    <form  class="loginform" action="{{ route('badges.assign-to-user') }}" method="POST">
        @csrf
        <select class="input-field" placeholder="" name="person_id">
            <option> select people</option>
        @foreach ($people as $user)
             
             <option value="{{ $user->id }}"> {{ $user->first_name }} {{ $user->last_name}}</option>
            
        


         @endforeach
        </select>
        <div class="error">
            @error('person_id')
            {{ $message }}
        @enderror
        </div>

        <select class="input-field" placeholder="" name="badge_id">
            <option> select bagde</option>
        @foreach ($badges as $bagde)
             
             <option value="{{ $bagde->id }}"> {{ $bagde->name }} </option>
            
        


         @endforeach
        </select>
        <div class="error">
            @error('badge_id')
            {{ $message }}
        @enderror
        </div>

   
        <div class="flex justify-center items-center">
            <button class="button" >assign</button>
        </div>
    </form>
</div>
@endsection