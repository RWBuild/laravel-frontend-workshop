@extends('layout.app')
@section('content')
    <div class="w-3/5 max-w-full my-0 mx-auto py-8">
        <h2 class="text-2xl font-bold ">Total : {{ count($people) }}</h2>
        <div class="flex flex-wrap">
            @foreach ($people as $person)
            <div class="card">
                <div class="card-body">
                    <h4 class="text-lg font-semibold">{{ $person->first_name  }}</h4>
                    <p class="py-1">{{ $person->email }}</p>
                    <a href="/people/{{ $person->id }}" class="btn btn-sm">view</a>
                </div>
                
                <form action="{{ route('people.destroy',$person) }}" method="post"
                onsubmit="return confirm('are you sure you want to delete?')"
                >
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn bg-red-500 btn-sm">Delete</button>
                </form>
                
            </div>
            @endforeach
            {!! $people->links() !!}
        </div>
    </div>
@endsection