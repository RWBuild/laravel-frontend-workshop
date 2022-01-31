@extends('layout.app')

@section('content')

<div class="flex w-full justify-center">

    @component('components.card')
        @slot('content')
                <img src="{{$badge->graphic}}" alt="">
                <h2 class="text-2xl"><strong>Name: </strong>{{$badge->name}}</h2>
                <p><strong>Type: </strong>{{$badge->type}}</p>
                <p><strong>Description: </strong>{{$badge->description}}</p>
        @endslot
    @endcomponent

</div>

@endsection
