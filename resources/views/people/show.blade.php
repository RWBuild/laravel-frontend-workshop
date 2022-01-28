@extends('layout.layout')
@section('content')
<div class="content-childreen">
    <h2>{{ $person->first_name }} Informations</h2>

    <p>First Name: {{ $person->first_name }} {{ $person->last_name }}</p>
    Last Name : {{ $person->last_name }} <br/>
    DOB: {{ $person->dob }} <br />
    {{-- $person->favorites --}}
    @foreach($person->favorites as $favorite)
     Favorite:{{$favorite->name}}
        
    @endforeach
    {{-- @foreach($badge->badges as $badge)
    <img src="{{$badge->graphic}}" width="50"/>
    {{$badge->name}}
    {{$badge->Description}}
    

        
    @endforeach --}}


    

</div>
@endsection
