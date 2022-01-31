@extends('layout.app')
@section('content')
<div class="w-2/5 max-w-full my-0 mx-auto py-5">
  <div class="text-center my-20">
    <h3 class="text-xl font-bold uppercase">Add Person</h3>
    <form action="/people" method="POST">
      @csrf
      <div class="py-4">
        <input type="text" class="w-full px-1 bg-gray-200 py-3 rounded" name="first_name" id="first_name" placeholder="first name"
        class="@error('first_name')
          invalid
        @enderror"
        >
        @error('first_name')
         <p class="error">{{ $message }}</p>   
        @enderror

      </div>
      <div class="py-4">
        <input class="w-full px-1 bg-gray-200 py-3 rounded" type="text" name="last name" id="last_name" placeholder="last_name"
        class="@error('last_name')
        invalid
        @enderror"
        >
        @error('last_name')
        <p class="error">{{ $message }}</p>   
       @enderror
      </div>
      <div class="py-4">
        <input class="w-full px-1 bg-gray-200 py-3 rounded" type="email" name="email" id="email" placeholder="email"
        class="@error('email')
        invalid
        @enderror"
        >
        @error('email')
        <p class="error">{{ $message }}</p>   
       @enderror
      </div>
      <div class="py-4">
        <input  class="w-full px-1 bg-gray-200 py-3 rounded" type="date" name="dob" id="dob" placeholder="dob" 
        class="@error('dob')
        invalid
        @enderror"
        >
        @error('dob')
        <p class="error">{{ $message }}</p>   
       @enderror
      </div>
      <button type="submit" class="btn">Create</button>
      <a href="/" class="btn">Back home</a>
    </form>
  </div>
</div>
@endsection