@extends('layout.layout')
@section('content')

    <div class="content-childreen">
        {{-- <h1> Person Added succesfully !</h1/> --}}
        <h2>List of People</h2>
        @foreach ($people as $person)
            <ul>
                <li>
                    {{ $person->first_name }} - {{ $person->last_name }}

                    <a href="/people/{{$person->id}}" class="action-view">view</a>
                    <form method="POST" action="{{route('people.destroy', $person->id)}}">
                       @csrf
                       @method('DELETE')
                        <button type="submit" class="action-delete">Delete</button>
                    </form>

                </li>
                <ul>
        @endforeach
       
    </div>
@endsection
