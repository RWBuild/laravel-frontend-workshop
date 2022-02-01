@extends('layout.app')
@section('content')
    <div class="w-3/5 max-w-full my-0 mx-auto py-8">
        <div class="card flex flex-col items-center justify-center">
            <img src="{{ $badge->graphic }}" alt="" width="200">
            <h3>{{ $badge->name }}</h3>
            <pre>{{ $badge->type }}</pre>
            <hr>
            <p class="py-3">
              {{ $badge->description }}
            </p>
            <a href="/badges" class="btn">Back</a>
        </div>
    </div>
@endsection