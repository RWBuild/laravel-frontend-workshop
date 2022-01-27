@extends('layout.app')
@section('content')
    <div class="main-wrapper">
      <h2>Total : {{ count($badges) }}</h2>
      <div class="card-container">
        @foreach ($badges as $badge)
            <a href="/badges/{{ $badge->id }}">
              <div class="card">
                <img src="{{ $badge->graphic }}" alt="" width="80">
                <h4>{{ $badge->name }}</h4>
                <pre>{{ $badge->type }}</pre>
              </div>
            </a>
        @endforeach
      </div>
    </div>
@endsection