@extends('layout.app')
@section('content')
    <div class="w-3/5 max-w-full my-0 mx-auto py-8">
      <h1 class="text-3xl font-bold">Favorites</h1>
      <h2 class="text-2xl font-bold ">Total : {{ count($favorites) }}</h2>
      <div class="flex flex-wrap">
        @foreach ($favorites as $favorite)
            <a href="/favorites/{{ $favorite->id }}">
              <div class="card divide-y-2">
                <pre>{{ $favorite->name }} - {{ $favorite->type }}</pre>
                <p class="py-1">
                  {{ $favorite->description }}
                </p>
              </div>
            </a>
        @endforeach
        
      </div>
    </div>
@endsection