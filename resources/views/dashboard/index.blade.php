@extends('layout.app')


@section('content')
<section class="flex justify-center items-center h-screen bg-gray-100 ">


    <div class="flex w-full ">
       
            <div class="w-2/5  flex justify-center items-center">

               
                <div class=" bg-gray-700 text-white h-full w-1/2 flex justify-center items-center ">
                  <h2 class="font-bold text-4xl text-center text-white">Dashboard</h2> 
                   
                    
                    
                </div>

               
               
          
        </div>

        <div class="w-3/5  flex flex-col justify-center items-center bg-white p-4 shadow-md -ml-20">
            <h1 class="font-bold text-4xl text-center text-gray-700 border-b-4 mb-4 p-2  border-gray-700 ">Summary</h1>


            <div class="flex" id="dashbordCard">
              
           
   
   
            

                <div class="md:h-32 md:w-32 sm:h-16 sm:w-16  m-2 rounded-full bg-gray-700 flex justify-center items-center ">

                    <div class=" md:w-16 md:h-16 sm:h-8 sm:w-8  rounded-full bg-blue-200 flex justify-center items-center">
                        <span class=" text-center  sm:text-xs md:text-sm "> <a href="/people" > people</a> 
                            <h1> {{$totalPeople}}</h1>
                        </span>
                      
                       

                   

                    </div>


                </div>
                <div class=" md:h-32 md:w-32 sm:h-16 sm:w-16  m-2 rounded-full bg-gray-700 flex justify-center items-center ">

                    <div class=" md:w-16 md:h-16 sm:h-8 sm:w-8  rounded-full bg-blue-200 flex justify-center items-center">
                        <span class="text-center sm:text-xs md:text-sm"> 
                            <a href="/badges" class="text-center"> badges</a> 
                            <h1>  {{$badges}}</h1>
                        </span>
                       


                    </div>

                </div>
                <div class=" md:h-32 md:w-32 sm:h-16 sm:w-16  m-2 rounded-full bg-gray-700 flex justify-center items-center ">

                    <div class="md:w-16 md:h-16 sm:h-8 sm:w-8  rounded-full bg-blue-200 flex justify-center items-center">
                        <span class="text-center"> <a href="/favorites" > favorites </a>
                        
                        
                            <h1> {{$totalFavorites}}</h1>
                        </span>
                     
                        

                    </div>

                </div>

                </div>
            

            </div>
        </div>


            

</section>




    @endsection