@extends('layout.app')
@section('content')
<div class="flex justify-center items-center h-screen">
    <div class="text-center">
     <div class="my-4">
         <h1 class="text-3xl font-bold">CRM</h1>
     </div>
    <div>
     <a href="/people/create" class="btn">Add Person</a>
     <a href="/favorites/create" class="btn">Add Favorites</a>
     <a href="/dashboard" class="btn">Dashboard</a>
     <a href="/badges/assign" class="btn">Assign Badges</a>
    </div>
    </div>
</div>
@endsection
