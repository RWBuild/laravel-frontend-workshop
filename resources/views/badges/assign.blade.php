<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assign Badges</title>
    {{-- <!--css link--> --}}
    <link rel="stylesheet" href={{ mix('css/app.css') }}>
</head>
<body>
    {{-- NavBar --}}
@extends('components.navbar')
{{-- End of Navbar --}}
@section('content')
{{-- <div>

    <form action="{{ route('badges.assign-to-user') }}" method="POST">
        @csrf
        <select name="person_id" id="person_id" required>
            @foreach ($people as $person)
                <option value="{{ $person->id }}">{{ $person->first_name }} {{ $person->last_name }}</option>
            @endforeach
        </select><br>
        <select name="badge_id" id="badge_id" required>
            @foreach ($badges as $badge)
                <option value="{{ $badge->id }}"> 
                {{$badge -> name}}
                </option>
            @endforeach
        </select><br>
        <button type="submit">assign</button>
    </form>
</div> --}}
<div class="center">
    <h1>Assign a badge</h1>
    <form action="{{ route('badges.assign-to-user') }}" method="post">
        @csrf
        <div class="txt_field">
            <select name="person_id" id="person_id" required class="peoplenames">
                @foreach ($people as $person)
                    <option value="{{ $person->id }}">{{ $person->first_name }} {{ $person->last_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="txt_field">
            <select name="badge_id" id="badge_id" required class="badgesnames">
                @foreach ($badges as $badge)
                    <option value="{{ $badge->id }}"> 
                    {{$badge -> name}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="txt_field">
            <input type="submit" value="Assign">
        </div>
    </form>
</div>
@endsection

</body>
</html>
