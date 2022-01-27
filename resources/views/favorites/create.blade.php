@extends('layout.layout')
@section('content')

    <div class="create-person-container">
        <h2> Add Favorite</h2>
        <form method="POST" action="/favorite/assign-to-person">
            @csrf
            <div class="form">

                <select name="person_id" id="person_id">
                    @foreach ($people as $person)
                        <option value="{{ $person->id }}">

                            {{ $person->first_name }} - {{ $person->last_name }}
                        </option>
                    @endforeach
                </select>
                <input type="text" placeholder="Add favorite" name="name" />
                @error('name')
                    <div class="message-color">
                        {{ $message }}
                    </div>
                @enderror
              
                <textarea type="text" placeholder="Description" name="description" rows='4' cols="50"></textarea>
                @error('description')
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
