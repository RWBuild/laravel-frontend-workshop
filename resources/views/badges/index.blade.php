@extends('layout.layout')
@section('content')

    <div class="antialiased">
        <h1>List of Badges</h1>
        @foreach ($badges as $badge)
        <ul>
            <li>
        {{$$badge->graphic}}        
        {{$badge->name}} 
        {{$badge->description}}

            </li>
        <ul> 
        @endforeach
    </div>
@endsection