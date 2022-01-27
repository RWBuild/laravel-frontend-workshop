@extends('layout.app')
@section('content')
    <div class="main-wrapper">
        <div class="card card-center">
            <img src="{{ $badge->graphic }}" alt="" width="200">
            <h3>{{ $badge->name }}</h3>
            <pre>{{ $badge->type }}</pre>
            <hr>
            <p>
              {{ $badge->description }}
            </p>
            <a href="/badges" class="btn btn-sm">Back</a>
        </div>
    </div>
@endsection