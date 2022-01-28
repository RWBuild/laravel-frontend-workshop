@extends('layout.layout')
@section('content')
    <div>
        <h2>Assign Badges </h2>
        <form action="/badges/assign-to-person" method="POST">
            @csrf
            <div class="all-form">
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
                            {{ $person->first_name }} - {{ $person->last_name }}
                        <option>
                    @endforeach

                </select>

                <button type="submit">assign</button>
            </div>
        </form>
    </div>
@endsection
