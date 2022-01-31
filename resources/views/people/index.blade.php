









@extends('layout.app')
@section('content')

<h1 class="title">People</h1>
<div class="person-container">

   
    @foreach ($people as $person)
             
  
             
 


        <div class="card-person">
          
            <div class="card-body">
                <h3> {{ $person->first_name }}  {{ $person->last_name}} </h3>
            
          
              
                

            </div>
            <div class="cardbutton">
                <a href="/people/{{$person->id }}">View</a> 
            
                <form  action="{{route('people.destroy',$person)}}" method="POST">
                    @method('Delete')

                    @csrf 

                    <button type="submit" name="delete"  onclick="return confirm('Confirm delete')" > Delete</button>
                </form>
           
              
            </div>


        </div>
   



@endforeach

</div>




@endsection