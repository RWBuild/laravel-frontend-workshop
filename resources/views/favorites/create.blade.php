@extends('layout.app')
@section('content')
<div class="w-2/5 max-w-full my-0 mx-auto py-5">
  <div class="text-center my-20">
    <div>
      <h3 class="text-xl font-bold uppercase">Add Favorites</h3>
      {{-- assign favorite to person form --}}
      <form action="/favorite/assign-to-person" method="POST">
        @csrf
        <div class="py-4">
          <select name="person_id" id="person_id">
            @forelse ($people as $person)
                <option value="{{ $person->id }}">
                  {{ $person->first_name}} {{ $person->last_name }} 
                </option>
            @empty
                <option>no person</option>
            @endforelse
          </select>
        </div>
        <div class="py-4">
          <x-input name='type' placeholder='Type' />
        </div>
        <div class="py-4">
          <x-input name='name' placeholder='Name of Favorite' />
        </div>
        <div class="py-4">
          <textarea name="description" id="" cols="30" rows="10"
          class="@error('description')
          invalid
          @enderror"
          ></textarea>
          @error('description')
          <p class="error">{{ $message }}</p>   
         @enderror
        </div>
        <button type="submit" class="btn">Create</button>
        <a href="/" class="btn">Back home</a>
      </form>
      {{-- end assign to person form --}}
    </div>
  </div>
</div>
@endsection