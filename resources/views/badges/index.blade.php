@extends('layout.app')
@section('content')
    <div class="w-3/5 max-w-full my-0 mx-auto py-8">
      <h2 class="text-2xl font-bold ">Total : {{ count($badges) }}</h2>
      <div class="flex flex-wrap">
        @foreach ($badges as $badge)
            <a href="/badges/{{ $badge->id }}">
              <div class="card">
                <img src="{{ $badge->graphic }}" alt="" width="80">
                <h4 class="text-lg font-bold">{{ $badge->name }}</h4>
                <pre>{{ $badge->type }}</pre>
              </div>
            </a>
        @endforeach
      </div>
    </div>
@endsection