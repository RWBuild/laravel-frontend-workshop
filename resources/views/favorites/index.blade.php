@extends('layout.app')

@section('content')
<div class="flex flex-wrap w-11/12 mx-auto">
    @foreach ($favorites as $items)
        {{-- <div class="people_grid_temp">
            <h3>{{$items->name}}</h3>
            <h4>{{$items->person_id}}</h4>
            <p>{{$items->description}}</p>
        </div> --}}

        @component('components.card')    
   
            @slot('content')    
                <h2 class="text-2xl">{{$items->name}}</h2>
                <p>{{$items->description}}</p>
            @endslot
    
        @endcomponent
    @endforeach
</div>
@endsection