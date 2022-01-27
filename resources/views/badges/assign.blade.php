@extends('layout.app')
@section('content')
 <div class="wrapper">
     <div class="center-box">
         <h3>Assign a badge</h3>
        <div>
            <form action="{{ route('badges.assign-to-user') }}" method="POST">
                @csrf
                <div class="form-group">
                    <select name="person_id">
                        <option>select person</option>
                        @forelse ($people as $person)
                            <option value="{{ $person->id }}">{{ $person->first_name }}-
                            {{ $person->last_name }}
                            </option>
                        @empty
                            <option>no person</option>
                        @endforelse
                    </select>
                </div>
                <div class="form-group">
                    <select name="badge_id">
                        <option>select badge</option>
                        @forelse ($badges as $badge)
                            <option value="{{ $badge->id }}">{{ $badge->name }}</option>
                        @empty
                            <option>No badges</option>
                        @endforelse
                    </select>
                </div>
                <button type="submit" class="btn">assign</button>
            </form>
        </div>
     </div>
 </div>
@endsection
