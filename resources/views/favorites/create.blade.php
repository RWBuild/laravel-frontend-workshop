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
        <div class="center">
            <h1>Add your favorite</h1>
            <form action="/favorite/assign-to-person" method="post">
                @csrf
                <div class="txt_field">
                    <select name="person_id" id="person_id" required class="personselect">
                        <option value="">Select a name</option>
                        @foreach ($people as $person)
                            <option value="{{ $person->id }}">{{ $person->first_name }} {{ $person->last_name }}
                            </option>
                        @endforeach
                    </select><br>
                </div>
                <div class="txt_field">
                    <input type="text" name="name" placeholder="favorite thing." required>
                </div>
                <div class="txt_field">
                    <textarea name="text" id="" cols="55" rows="5" placeholder="Describe your favorites.."></textarea>
                </div>
                <div class="txt_field">
                    <input type="submit" value="Add">
                </div>
            </form>
        </div>
    @endsection
</body>

</html>
