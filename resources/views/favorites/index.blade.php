@extends('layout.app')

@section('content')
<div class="people_grid">
    @foreach ($favorites as $fv)
        {{-- <div class="people_grid_temp">
            <h3>{{$fv->name}}</h3>
            <h4>{{$fv->person_id}}</h4>
            <p>{{$fv->description}}</p>
        </div> --}}

        @component('components.card')    
   
            @slot('class')
                
            @endslot
    
            @slot('title')
            {{$fv->name}}
            @endslot
            @slot('name')
            {{$fv->name}}
            @endslot
            @slot('slot')
            {{$fv->description}}
            @endslot
            @slot('action')
            @endslot
    
        @endcomponent
    @endforeach
</div>
@endsection