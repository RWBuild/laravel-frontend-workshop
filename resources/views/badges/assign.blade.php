@extends('layout.layout')
@section('content')
<div>

    <form action="/badges/assign-to-person" method="POST">
        @csrf
        <select name="badge_id" id="badge_id">
            
            @foreach ($badges as $badge)
            <option value="{{ $badge->id }}">  
                {{ $badge->name }}
            <option>
            @endforeach

        </select>
        <select name="person_id" id="person_id">
            
            @foreach ($people as $person)
            <option value="{{ $badge->id }}">  
                {{ $person->first_name }}
            <option>
            @endforeach

        </select>

        <button type="submit">assign</button>
    </form>
</div>
@endsection