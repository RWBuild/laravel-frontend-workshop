@extends('layout.layout')
@section('content')

    <div class="antialiased">
        <h1> Person Added succesfully !</h1>
        @foreach ($people as $person)
        <ul>
            <li>
        {{$person->first_name}} - {{$person->last_name}}
            </li>
        <ul> 
        @endforeach
    </div>
@endsection
