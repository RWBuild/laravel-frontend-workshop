



@extends('layout.app')
@section('content')


<h1 class="title">Favorites</h1>

<div class="badge-container">
         
   
    @foreach ($favorites as $favorite)
             
 


        <div class="card">
            
            <div class="card-body">
                <h3>   {{$favorite->type}}</h3>
            
                <h2>{{$favorite->name}}</h2>   
              
                

            </div>
            <div class="card-button">
                <button></button>
                <button></button>
            </div>


        </div>
   



@endforeach

</div>



{{--  --}}






@endsection