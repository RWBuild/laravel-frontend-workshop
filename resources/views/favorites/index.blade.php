@extends('layout.app')
@section('content')
    <div class="main-wrapper">
      <h1>Favorites</h1>
      <h2>Total : {{ count($favorites) }}</h2>
      <div class="card-container">
        @foreach ($favorites as $favorite)
            <a href="/favorites/{{ $favorite->id }}">
              <div class="card">
                <pre>{{ $favorite->name }} - {{ $favorite->type }}</pre>
                <hr>
                <p>
                  {{ $favorite->description }}
                </p>
              </div>
            </a>
        @endforeach
        
      </div>
    </div>
@endsection