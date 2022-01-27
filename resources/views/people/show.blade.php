

@extends('layout.app')
@section('content')
<div class="container">
    <div>

        Name: {{ $person->first_name }}  <br />
        Last name : {{ $person->last_name }} <br/>
        DOB: {{ $person->dob }} <br />
        {{-- $person->favorites --}}
    
    </div>

    <div> i know you  me</div>
</div>




@endsection
