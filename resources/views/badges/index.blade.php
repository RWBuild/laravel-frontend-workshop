@extends('layout.layout')
@section('content')

    
        <h1>List of Badges</h1>
        <div class="allbadge">
        @foreach ($badges as $badge)
        <div class="badge-card">
            <img src="{{ $badge->graphic }}" width="100" />
            <h2>{{ $badge->name }}</h2>
            <p>{{ $badge->description }}</p>
        </div>


        @endforeach
        
    </div>
@endsection
