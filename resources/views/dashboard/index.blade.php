@extends('layout.app')
@section('content')
    <div>
        <div class="w-3/5 max-w-full my-0 mx-auto py-8">
            <h2 class="text-2xl font-bold ">Dashboard</h2>
            <div class="flex flex-wrap">
              <a href="/people">
                <div class="card card-center">
                  <h3 class="text-lg font-bold">People ({{ $totalPeople }})</h3>
                </div>
              </a>
             <a href="/favorites">
              <div class="card card-center">
                <h3 class="text-lg font-bold">Favorites ({{ $totalFavorites }}) </h3>
              </div>
            </a>
             <a href="/badges">
              <div class="card card-center">
                <h3 class="text-lg font-bold">Badges ({{ $badges }})</h3>
              </div>
            </a>
            </div>
        </div>
    </div>
@endsection