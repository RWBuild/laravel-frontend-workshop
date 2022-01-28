@extends('layout.app')

@section('content')
<div class="people_grid">
    @foreach ($people as $people)
        {{-- <div class="people_grid_temp">
            <h4>{{$people->first_name}} {{$people->last_name}}</h4>
            <p>{{$people->email}}</p>
            <div>
                <a href="/people/{{ $people->id }}">View</a>
                <form action="{{route('people.destroy', $people)}}" method="POST">
                    @method("DELETE")
                    @csrf
                    <button onclick="confirm('Are u sure u want to delete')" type="submit">Delete</button>
                </form>
            </div>
        </div> --}}

        @component('components.card')    
   
            @slot('class')
                
            @endslot
    
            @slot('title')
            {{$people->first_name}} {{$people->last_name}}
            @endslot
            @slot('name')
            @endslot
            @slot('slot')
            {{$people->email}}
            @endslot
            @slot('action')    
                <a href="/people/{{ $people->id }}">View</a>
                <form action="{{route('people.destroy', $people)}}" method="POST">
                    @method("DELETE")
                    @csrf
                    <button onclick="return confirm('Are u sure u want to delete')" type="submit">Delete</button>
                </form>
            @endslot
            
        @endcomponent

        
    @endforeach
</div>
@endsection