@extends('layout.app')

@section('content')

<div class="flex w-full justify-center">

    @component('components.card')
        @slot('content')
            Name: {{ $person->first_name }}  <br />
            Last name : {{ $person->last_name }} <br/>
            DOB: {{ $person->dob }} <br />

            @foreach ($person->favorites as $item)
                <div class="one_people_fav">
                    {{$item->name}}
                </div>
            @endforeach
        @endslot
    @endcomponent

    @component('components.card')
        @slot('content')
                @foreach ($person->assignedBadges as $item)
                    <h3>{{$item->name}}</h3>
                    <div>
                        <img src="{{$item->graphic}}" alt="">
                        <div>
                            {{$item->type}}
                        </div>
                    </div>
                @endforeach
        @endslot
    @endcomponent

</div>

@endsection
