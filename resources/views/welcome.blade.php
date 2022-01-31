
    @extends('layout.app')


    @section('content')

    <section class="flex flex-col bg-gray-100  justify-center items-center h-screen">
    <!-- body -->
    <div class=" ">
       
        <h1 class="font-bold text-4xl text-center text-gray-700">welcome </h1>
 <div class=" flex  ">
    <div class=" bg-gray-700 m-4 transition duration-700 ease-in-out rounded-lg p-4 text-white">
        <a href="/people/create" >Add Person</a>
   </div>

<div class=" bg-gray-700 m-4 transition duration-700 ease-in-out rounded-lg p-4 text-white">
       <a href="/favorites/create" >Add Favorite</a>
   </div>
<div class=" bg-gray-700 m-4 transition duration-700 ease-in-out rounded-lg p-4 text-white">
       <a href="/badges/assign" >Assign  Badge</a>
   </div>
<div class=" bg-gray-700 m-4 transition duration-700 ease-in-out rounded-lg p-4 text-white">
       <a href="/dashboard" >Dashboard</a>
   </div>
  
 </div>
</div>

 {{-- contact us  --}}
{{-- <div class="home-card">
                    <h1> About Us</h1>
                    <div class="about-card">
                        <div class="image">
                            <img 
                            src="{{ asset('assets/images/about.jpg') }}"
                                alt="profile_picture">

                        </div>

                        <div class="cardbody">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci rerum officiis nostrum
                                a
                                lias voluptatibus corporis voluptate, eveniet quos optio? Et a
                                liquam odio quam autem eaque voluptates sapiente laudantium delectus consequatur.</p>
                        </div>
                    </div>
                </div> --}}
        
        
    {{-- about us --}}
{{--        
    <div class="home-card">
        <h1> Contact us</h1>
        <div class="about-card">

            <div class="cardbody">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci rerum officiis nostrum</p>
                    a
                    <p>  lias voluptatibus corporis voluptate, eveniet quos optio? Et a
                    liquam odio quam autem eaque voluptates sapiente laudantium delectus consequatur.</p>
            </div>
            <div class="image">
                

                    <img 
                            src="{{ asset('./assets/images/goal.jpg') }}"
                                alt="profile_picture">

            </div>


        </div>
    </div> --}}
     
       

    
       

    


    
</section>

    <!-- body ends here -->
    @endsection