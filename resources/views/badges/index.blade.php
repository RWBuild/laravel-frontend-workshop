@extends('layout.layout')
@section('content')

    
        <h2>List of Badges</h2>
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
