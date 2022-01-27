@extends('layout.layout')
@section('content')
<div class="content-childreen">
    <h2> Favorites Added Sussessfully </h2>

    Name: {{ $person->first_name }}  <br />
    Last name : {{ $person->last_name }} <br/>
    DOB: {{ $person->dob }} <br />
    {{-- $person->favorites --}}


    

</div>
@endsection
