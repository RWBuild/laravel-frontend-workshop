<div>

    <form action="{{ route('badges.assign-to-user') }}" method="POST">
        @csrf
        <select name="person_id" id="person_id" required>
            @foreach ($people as $person)
                <option value="{{ $person->id }}">{{ $person->first_name }} {{ $person->last_name }}</option>
            @endforeach
        </select><br>
        <select name="badge_id" id="badge_id" required>
            @foreach ($badges as $badge)
                <option value="{{ $badge->id }}"> 
                {{$badge -> name}}
                </option>
            @endforeach
        </select><br>
        <button type="submit">assign</button>
    </form>
</div>
