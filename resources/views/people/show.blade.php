@extends('layout.app')
@section('content')
<div class="container">
    <div class="center-box">
      <div class="card">
        Name: {{ $person->first_name }}  <br />
        Last name : {{ $person->last_name }} <br/>
        DOB: {{ $person->dob }} <br />
        {{-- $person->favorites --}}
      </div>
    </div>
</div>

@endsection