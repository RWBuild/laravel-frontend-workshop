@extends('layout.layout')
@section('content')
    <div>
        {{-- <h2>Welcome to the Bashboard</h2> --}}
    </div>
    <div class="dashboard">
        {{-- division for left block of dashboard --}}
        <div class="dashboard-left">
           <a href="#">Dashboard</a>
           <a href="#">Dashboard</a>
           <a href="#">Dashboard</a>
           <a href="#">Dashboard</a>

           


        </div>

        {{-- division for right block of dasboard --}}
        <div class="dashboard-right">
            <div class="total-people">
                {{ $totalPeople }}<br>
                <a href="/people">People</a>

                
            </div>
            <div class="favorites">
                {{ $totalFavorites }}
                <a href="/favorites">Favorites</a>
                
            </div>
            <div class="badges">
                {{ $badges }}
                <a href="badges">Dadges</a>
               
            </div>
        </div>
    </div>
@endsection
