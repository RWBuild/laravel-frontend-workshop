@extends('layout.app')

@section('content')
    <div class="flex flex-col w-full h-height items-center justify-center">
        <a class="w-1/5 p-2 mb-2 border border-gray-400 hover:bg-gray-200 rounded"  href="/people">
            People: {{$totalPeople}}
        </a>
        <a class="w-1/5 p-2 mb-2 border border-gray-400 hover:bg-gray-200 rounded"  href="/favorites">
            Favorites: {{$totalFavorites}}
        </a>
        <a class="w-1/5 p-2 mb-2 border border-gray-400 hover:bg-gray-200 rounded"  href="/badges">
            Badge: {{$badges}}
        </a>
    </div>
@endsection