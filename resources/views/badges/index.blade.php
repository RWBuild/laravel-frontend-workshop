@extends('layout.layout')
@section('content')

    <div class="antialiased">
        <h1>List of Badges</h1>
        @foreach ($badges as $badge)
        <ul>
            <li>
        {{$badge->name}} 
            </li>
        <ul> 
        @endforeach
    </div>
@endsection