@extends('layout.app')
@section('content')
    <div>
        <div class="main-wrapper">
            <h2>Dashboard</h2>
            <div class="card-container">
              <a href="/people">
                <div class="card card-center">
                  <h3>People ({{ $totalPeople }})</h3>
                </div>
              </a>
             <a href="/favorites">
              <div class="card card-center">
                <h3>Favorites ({{ $totalFavorites }}) </h3>
              </div>
            </a>
             <a href="/badges">
              <div class="card card-center">
                <h3>Badges ({{ $badges }})</h3>
              </div>
            </a>
            </div>
        </div>
    </div>
@endsection