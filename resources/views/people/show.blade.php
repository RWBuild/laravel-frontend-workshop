@extends('layout.app')

@section('content')
<div class="one_people_page">
    <div class="one_people">

        Name: {{ $person->first_name }}  <br />
        Last name : {{ $person->last_name }} <br/>
        DOB: {{ $person->dob }} <br />
        
        @foreach ($person->favorites as $item)
            <div class="one_people_fav">
                {{$item->name}}
            </div>
        @endforeach

    </div>

    <div class="one_people">
        @foreach ($person->assignedBadges as $item)
        <h3>{{$item->name}}</h3>
            <div class="one_people_fav">
                <img src="{{$item->graphic}}" alt="">
                <div>
                    {{$item->type}}
                </div>
            </div>
        @endforeach
    </div>

</div>
@endsection
