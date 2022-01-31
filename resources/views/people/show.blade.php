

@extends('layout.app')
@section('content')
<div class="view-container">

 


            
            




     
      

        <div class="card-person">

            <h1> single person</h1>
    <h2>   {{ $person->first_name }}  </h2>
            <div class="card-body">
    
                <h3>   
                    {{ $person->last_name }}  </h3>
                    <p> {{ $person->dob }}  </p>
         

            
        </div>
          
    
    
        </div>

        {{-- $person->favorites --}}

       
        <div class="card-person">
            <h1> favorites</h1>
            @foreach ($person->favorites as $favorite)

          
    
            <div class="card-body">
              
              <h3>  {{$favorite->name}}</h3>
                
         
            
        </div>
          
    
        @endforeach
        </div>
     


  

    <div class="card-person">
        <h1> favorites</h1>
        @foreach ($person->assignedBadges as $badge)
        <img src="{{ $badge->graphic }}" alt="Random photo" class="card-img">

        <div class="card-body">

         <h2>{{$badge->name}}</h2>   

      
        
    </div>
      
    @endforeach

    </div>
  

  

   
</div>




@endsection
