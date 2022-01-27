@extends('layout.app')


@section('content')
<div class="login_form">
    <form action="/people" method="POST">
        @csrf
        <h1>Add people</h1>
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
        <button>Submit</button>
    </form>
</div>
@endsection