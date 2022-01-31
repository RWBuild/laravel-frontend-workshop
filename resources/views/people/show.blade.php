@extends('layout.app')
@section('content')
<div class="w-3/5 max-w-full my-0 mx-auto py-8">
    <div class="flex flex-wrap">
      @component('components.card')
          @slot('content')
          <h3 class="text-lg font-semibold">{{ $person->first_name }} {{ $person->last_name }} </h3>
          <pre>{{ $person->email }}</pre>
          <p class="py-1">{{ $person->dob }}</p>
          {{-- $person->favorites --}}
          <h4 class="text-lg font-semibold">Person Favorites</h4>
          @foreach ($person->favorites as $favorite)
            <div>
              {{ $favorite->name }}</div>
          @endforeach
          @endslot
      @endcomponent
      <div class="card card-center">
       
    </div>
    {{-- assigned badges --}}
    <div class="card">
        <div class="card-body divide-y-2">
            <h3 class="text-lg font-bold py-1">Assigned badges</h3>
           @forelse ($person->assignedBadges as $badge)
           <div class="flex items-center">
            <div>
              <img src="{{ $badge->graphic }}" width="40" alt="">
            </div>
            <div>
               <pre>{{ $badge->name }}</pre>
            </div>
        </div>
           @empty
              <div>
                  <h3 class="text-lg font-bold">No Assigned Badges</h3>  
              </div>               
           @endforelse
        </div>
    </div>
    {{-- end assigned badges --}}
    </div>
    <a href="/dashboard" class="btn btn-sm">Back</a>
</div>

@endsection