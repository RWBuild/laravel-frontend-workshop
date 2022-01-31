@extends('layout.app')


@section('content')
<div class="form_container">
    <form action="/people" method="POST" class="shadow_card form_card">
        @csrf
        <h1 class="shodow_text text-3xl mb-5">Add people</h1>
        <input type="text" name="first_name" placeholder="First name" >
        <span>
            @error('first_name')
            {{$message}}
            @enderror
        </span>
        <input type="text" name="last_name" placeholder="Last name">
        <span>
            @error('last_name')
            {{$message}}
            @enderror
        </span>
        <input type="email" name="email" placeholder="Email">
        <span>
            @error('email')
            {{$message}}
            @enderror
        </span>
        <input type="date" name="dob">
        <span>
            @error('dob')
            {{$message}}
            @enderror
        </span>
        <button class="simple_button">Submit</button>
    </form>
</div>
@endsection