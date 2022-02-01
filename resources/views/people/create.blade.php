@extends('layout.app')
@section('content')
<div class="w-2/5 max-w-full my-0 mx-auto py-5">
  <div class="text-center my-20">
    <h3 class="text-xl font-bold uppercase">Add Person</h3>
    <form action="/people" method="POST">
      @csrf
      <div class="py-4">
        <x-input name='first_name' placeholder='Firstname goes here...' />
      </div>
      <div class="py-4">
        <x-input name='last_name' placeholder="Lastname goes here..." />
      </div>
      <div class="py-4">
        <x-input type='email' name='email' placeholder="Email goes here..." />
      </div>
      <div class="py-4">
        <x-input type='date' name='dob' placeholder='your date of birth' />
      </div>
      <button type="submit" class="btn">Create</button>
      <a href="/" class="btn">Back home</a>
    </form>
  </div>
</div>
@endsection