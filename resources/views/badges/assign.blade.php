<div>

    <form action="{{ route('badges.assign-to-user') }}" method="POST">
        @csrf
        <select name="person_id" id="">
            @foreach($people as $person)
                <option value="{{ $person->id }}">{{ $person->first_name }} {{ $person->last_name }}</option>
            @endforeach
        </select>

        <select name="badge_id" id="">
            @foreach($badges as $badge)
              <option value="{{ $badge->id }}">{{$badge->name}}</option>
            @endforeach

        </select>

        <button type="submit">assign</button>
    </form>
</div>



