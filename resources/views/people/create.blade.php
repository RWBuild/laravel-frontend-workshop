@extends('layout.app')
@section('content')
<div class="wrapper">
  <div class="center-box">
    <h3>Add Person</h3>
    <form action="/people" method="POST">
      @csrf
      <div class="form-group">
        <input type="text" name="first_name" id="first_name" placeholder="first name"
        class="@error('first_name')
          invalid
        @enderror"
        >
        @error('first_name')
         <p class="error">{{ $message }}</p>   
        @enderror

      </div>
      <div class="form-group">
        <input type="text" name="last name" id="last_name" placeholder="last_name"
        class="@error('last_name')
        invalid
        @enderror"
        >
        @error('last_name')
        <p class="error">{{ $message }}</p>   
       @enderror
      </div>
      <div class="form-group">
        <input type="email" name="email" id="email" placeholder="email"
        class="@error('email')
        invalid
        @enderror"
        >
        @error('email')
        <p class="error">{{ $message }}</p>   
       @enderror
      </div>
      <div class="form-group">
        <input type="date" name="dob" id="dob" placeholder="dob" 
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