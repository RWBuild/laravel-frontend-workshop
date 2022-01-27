@extends('layout.layout')
@section('content')
<div class="content-childreen">
    <h2> Favorites Added Sussessfully </h2>

    Name: {{ $person->first_name }}  <br />
    Last name : {{ $person->last_name }} <br/>
    DOB: {{ $person->dob }} <br />
    {{-- $person->favorites --}}
    @foreach($person->favorites as $favorite)
    {{$favorite->name}}
        
    @endforeach
    {{-- @foreach($person->badges as $badge)
    <img src="{{$badge->graphic}}" width="50"/>
    {{$badge->name}}
    {{$badge->Description}}
    

        
    @endforeach --}}


    

</div>
@endsection
