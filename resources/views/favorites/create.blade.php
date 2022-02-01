<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Favorites</title>
</head>

<body>
    {{-- NavBar --}}
    @extends('components.navbar')
    {{-- End of Navbar --}}
    @section('content')
        <div class="absolute top-auto left-1/3  w-4/12 rounded bg-white h-4/5 translate-y-9 ">
            <h1 class="text-center px-0.5 border-b-2 border-solid silver text-6xl mt-2 py-6">Add your favorite</h1>
            <form action="/favorite/assign-to-person" method="post" class="px-8 box-border mt-2">
                @csrf
                <div class="relative mx-5 mt-12">
                    <select name="person_id" id="person_id" required
                        class="w-full bg-none border solid black rounded py-2 px-4 box-border mb-5 text-xl">
                        <option value="">Select a name</option>
                        @foreach ($people as $person)
                            <option value="{{ $person->id }}">{{ $person->first_name }} {{ $person->last_name }}
                            </option>
                        @endforeach
                    </select><br>
                </div>
                <div class="relative mx-5">
                    <input type="text" name="name" placeholder="favorite thing." required
                        class="w-full bg-none border solid to-black py-2 px-4 box-border mb-5 text-xl">
                </div>
                <div class="relative mx-5">
                    <textarea name="text" id="" cols="55" rows="3" placeholder="Describe your favorites.."
                        class="w-full bg-none border solid black rounded py-2 px-4 box-border mb-5 text-xl"></textarea>
                </div>
                <div class="relative mx-5">
                    <input type="submit" value="Add"
                        class="w-full h-14 border solid bg-fuchsia-300 rounded text-2xl cursor-pointer outline-0 mt-3 hover:bg-fuchsia-100 transition-all">
                </div>
            </form>
        </div>
    @endsection
</body>

</html>
