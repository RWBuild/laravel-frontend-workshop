



@extends('layout.app')
@section('content')

<div class="badge-container">

   
    @foreach ($badges as $badge)
             
 


    <div  class="bg-white transition duration-150 ease-in-out rounded shadow border p-6 w-64 
    transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110  duration-300">
               
           
    <span className=" bg-educ h-4 mt-0 flex ">
        
        <img src="   {{ $badge->graphic }}" alt="Random photo" class="card-img">
    
    </span>
    <h5 class="text-xs font-bold my-1 mt-2">{{ $badge->name}} </h5>
    
    <span className="flex  	flex-row ">
     
      <p>  {{ $badge->description }}</p>
    
    </span>
    
    
    
    
    </div>


@endforeach

</div>




@endsection

