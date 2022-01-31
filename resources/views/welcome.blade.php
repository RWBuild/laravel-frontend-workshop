@extends('layout.app')

@section('content')    
    <div class="flex flex-col w-full h-height items-center justify-center">
        {{-- Link --}}
            <a class="w-1/5 p-2 mb-2 border border-gray-400 hover:bg-gray-200 rounded" href="/people/create">
                1. Add person
            </a>
            <a class="w-1/5 p-2 mb-2 border border-gray-400 hover:bg-gray-200 rounded" href="/favorites/create">
                2. Add Favorites
            </a>
            <a class="w-1/5 p-2 mb-2 border border-gray-400 hover:bg-gray-200 rounded" href="/dashboard">
                3. Dashboard
            </a>
            <a class="w-1/5 p-2 mb-2 border border-gray-400 hover:bg-gray-200 rounded" href="/badges/assign">
                4. Assign badges
            </a>
    </div>
@endsection

