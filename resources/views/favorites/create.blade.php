@extends('layout.app')

@section('content')
<div class="form_container">
    <form action="/favorite/assign-to-person" method="POST" class="shadow_card form_card">
        @csrf
        <h1 class="shodow_text text-3xl mb-5">Add favorite</h1>
        <span>
            @error('person_id')
            {{$message}}
            @enderror
        </span>
        <select name="person_id" id="">
            <option value="">----Select person----</option>
            @foreach ($people as $people)
                <option value="{{$people->id}}">{{$people->first_name}} {{$people->last_name}}</option>
            @endforeach
        </select>
        <span>
            @error('name')
                {{$message}}
            @enderror
        </span>
        <input type="text" name="name" placeholder="name">
        <span>
            @error('type')
                {{$message}}
            @enderror
        </span>
        <input type="text" name="type" placeholder="type">
        <span>
            @error('description')
                {{$message}}
            @enderror
        </span>
        <textarea name="description" placeholder="Description"></textarea>
        
        <button class="simple_button">Submit</button>
    </form>
</div>
@endsection