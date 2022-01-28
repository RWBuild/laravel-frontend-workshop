@extends('layout.app')

@section('content')
    <div class="homePage_links">
        <a href="/people">People: {{$totalPeople}}</a>
        <a href="/favorites">Favorites: {{$totalFavorites}}</a>
        <a href="/badges">Badge: {{$badges}}</a>
    </div>
@endsection