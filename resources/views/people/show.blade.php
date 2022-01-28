<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Person</title>
    {{-- <!--css link--> --}}
    <link rel="stylesheet" href={{ mix('css/app.css') }}>
</head>
<body>
    {{-- NavBar --}}
    @extends('components.navbar')
    {{-- End of Navbar --}}
    @section('content')
    <div class="success_message">
        <h1>Successfully added!!</h1>
    </div>
    <div class="content_added">

        First Name: {{ $person->first_name }} <br />
        Last name : {{ $person->last_name }} <br />
        DOB: {{ $person->dob }} <br />
        {{-- $person->favorites --}}
    
    </div>
    @endsection
</body>
</html>

