<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <!--css link--> --}}
    <link rel="stylesheet" href={{ mix('css/app.css') }}>
    <title>Add Person</title>
</head>

<body class="background">
    {{-- NavBar --}}
    @extends('components.navbar')
    {{-- End of Navbar --}}
    @section('content')
        <!--Add Person Form-->
        <div class="absolute top-auto left-1/3  w-4/12 rounded bg-white h-4/5 translate-y-9 ">
            <h1 class="text-center px-0.5 border-b-2 border-solid silver text-6xl mt-2 py-6">Add a person</h1>
            <form action="/people" method="post" class="px-8 box-border mt-2">
                @csrf
                <div class="relative mx-5 mt-12">
                    <input type="text" name="first_name" placeholder="Enter your FirstName.." required
                        class="w-full bg-none border solid to-black py-2 px-4 box-border mb-5 text-xl">
                </div>
                <div class="relative mx-5">
                    <input type="text" name="last_name" placeholder="Enter your LastName.." required
                        class="w-full bg-none border solid to-black py-2 px-4 box-border mb-5 text-xl">
                </div>
                <div class="relative mx-5">
                    <input type="text" name="email" placeholder="Add your email.." required
                        class="w-full bg-none border solid to-black py-2 px-4 box-border mb-5 text-xl">
                </div>
                <div class="relative mx-5">
                    <input type="date" name="dob" required
                        class="w-full bg-none border solid to-black py-2 px-4 box-border mb-5 text-xl">
                    <input type="submit" value="Add"
                        class="w-full h-14 border solid bg-fuchsia-300 rounded text-2xl cursor-pointer outline-0 mt-3 hover:bg-fuchsia-100 transition-all">
                </div>
            </form>
        </div>
    @endsection
</body>

</html>
