<div>

    <form action="{{ route('badges.assign-to-user') }}" method="POST">
        @csrf

        <button type="submit">assign</button>
    </form>
</div>
