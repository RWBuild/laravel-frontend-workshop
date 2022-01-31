@extends('layout.app')

@section('content')
<div class="flex flex-wrap w-11/12 mx-auto">
    @foreach ($people as $people)

        @component('components.card')    
            @slot('content')
                
                <h3>{{$people->first_name}} {{$people->last_name}}</h3>
            
                <p>{{$people->email}}</p>
                <div class="flex mt-3">
                    <a href="/people/{{ $people->id }}" class="bg-primaryColor py-1 px-5 mr-2 text-white rounded">
                        View
                    </a>
                    <form action="{{route('people.destroy', $people)}}" method="POST">
                        @method("DELETE")
                        @csrf
                        <button onclick="return confirm('Are u sure u want to delete')" type="submit" class="bg-red-800 text-white py-1 px-5 rounded">
                            Delete
                        </button>
                    </form>
                </div>  
            @endslot
        @endcomponent

    @endforeach
</div>
@endsection