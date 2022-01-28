@extends('layout.app')

@section('content')
<div class="people_grid">
    @foreach ($badges as $bg)
        <div class="people_grid_temp">
            <img src="{{$bg->graphic}}" alt="">
            <h4>{{$bg->name}}</h4>
            <p>{{$bg->description}}</p>
        </div>
    @endforeach
</div>
@endsection