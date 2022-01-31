@extends('layout.app')
@section('content')
<div class="main-wrapper">
    <div class="card-container">
      @component('components.card')
          @slot('content')
          <h3>{{ $person->first_name }} {{ $person->last_name }} </h3>
          <pre>{{ $person->email }}</pre>
          <p>{{ $person->dob }}</p>
          {{-- $person->favorites --}}
          <h4>Person Favorites</h4>
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
        <div class="card-body">
            <h3>Assigned badges</h3>
            <hr>
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
                  <h3>No Assigned Badges</h3>  
              </div>               
           @endforelse
        </div>
    </div>
    {{-- end assigned badges --}}
    </div>
    <a href="/dashboard" class="btn btn-sm">Back</a>
</div>

@endsection