@extends('layout.app')

@section('content')
<div class="login_form">

    <form action="{{ route('badges.assign-to-user') }}" method="POST">
        <h1>Assign badge</h1>
        @csrf
        <span>
            @error('person_id')
            {{$message}}
            @enderror
        </span>
        <select name="person_id" id="">
            <option value="">--- Select person ---</option>
            @foreach ($people as $people)
                <option value="{{$people->id}}">{{$people->first_name}} {{$people->last_name}}</option>
            @endforeach
        </select>

        <span>
            @error('badge_id')
                {{$message}}
            @enderror
        </span>
        <select name="badge_id" id="">
            <option value="">--- Select badge ---</option>
            @foreach ($badges as $badge)
                <option value="{{$badge->id}}">{{$badge->name}}</option>
            @endforeach
        </select>
        <button type="submit">assign</button>
    </form>
</div>
@endsection
