@extends('layout.app')

@section('content')
<div class="form_container">

    <form action="{{ route('badges.assign-to-user') }}" method="POST" class="shadow_card form_card">
        <h1 class="shodow_text text-3xl mb-5">Assign badge</h1>
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
        <button type="submit" class="simple_button">assign</button>
    </form>
</div>
@endsection
