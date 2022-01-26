@extends('layout.app')
@section('content')
<div class="wrapper">
    <div class="center-box">
     <div>
         <h1>CRM</h1>
     </div>
    <div>
     <a href="/people/create" class="btn">Add Person</a>
     <a href="/favorites/create" class="btn">Add Favorites</a>
     <a href="#" class="btn">Dashboard</a>
     <a href="#" class="btn">Assign Badges</a>
    </div>
    </div>
</div>
@endsection
