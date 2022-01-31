@extends('layout.app')
@section('content')
    <div class="main-wrapper">
        {{-- <div class="popup">
            <div class="card-body">
                <h3>Are sure you want to delete?</h3>
            </div>
            <div>
                <a href="#" id="close" class="btn">Close</a>
                <button class="btn btn-danger">Delete</button>
            </div>
        </div> --}}
        <h2>Total : {{ count($people) }}</h2>
        <div class="card-container">
            @foreach ($people as $person)
            <div class="card">
                <div class="card-body">
                    <h4>{{ $person->first_name  }}</h4>
                    <p>{{ $person->email }}</p>
                    <a href="/people/{{ $person->id }}" class="btn btn-sm">view</a>
                </div>
                
                <form action="{{ route('people.destroy',$person) }}" method="post"
                onsubmit="return confirm('are you sure you want to delete?')"
                >
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
                
            </div>
            @endforeach
            {!! $people->links() !!}
        </div>
    </div>
@endsection