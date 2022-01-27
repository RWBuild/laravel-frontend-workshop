@extends('layout.layout')
@section('content')

    <div class="antialiased">
        <h1> List of Favorites !</h1>
        @foreach ($favorites as $favorite)
        <ul>
            <li>
        {{$favorite->name}}
            </li>
        <ul> 
        @endforeach
    </div>
@endsection
