@extends('layout.layout')
@section('content')
    <div>
        <h2>Welcome to the Bashboard</h2>
    </div>
    <div class="total-people">
        <a href="/people">People</a>
        <ul>
            {{$totalPeople}}
            
        </select>

    </div>
    <div class="favorites">
        <a href="/favorites">Favorites</a>
        {{$totalFavorites}}
    </div>
    <div class="badges">
        <a href="badges">Dadges</a>
        {{$badges}}
    </div>
@endsection
