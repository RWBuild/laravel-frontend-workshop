@extends('layout.layout')
@section('content')

    <div class="create-person-container">
        <h2> Add a Person </h2>
        <form method="POST" action="/people">
            @csrf
            <div class="form">
                <input type="text" placeholder="First Name" name="first_name" />
                @error('first_name')
                    {{-- to get the error message --}}
                    <div class="message-color">
                        {{ $message }}
                    </div>
                @enderror
                <input type="text" placeholder="Last Name" name="last_name" />
                @error('last_name')
                    <div class="message-color">
                        {{ $message }}
                    </div>
                @enderror

                <input type="email" placeholder="Email" name="email" />
                @error('email')
                    <div class="message-color">
                        {{ $message }}
                    </div>
                @enderror

                <input type="date" placeholder="DoB" name="dob" />
                @error('dob')
                    <div class="message-color">
                        {{ $message }}
                    </div>
                @enderror
                <div class="button">

                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
