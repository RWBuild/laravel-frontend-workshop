@extends('layout.app')

@section('content')
<div class="flex flex-wrap w-11/12 mx-auto">
    @foreach ($badges as $items)
    <a href="/badges/{{ $items->id }}">
            @component('components.card')
                @slot('content')
                    <img src="{{$items->graphic}}" alt="">
                    <h4>{{$items->name}}</h4>
                    <p class="truncate">{{$items->description}}</p>
                @endslot
            @endcomponent
        </a>
        @endforeach
</div>
@endsection