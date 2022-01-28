@extends('layout.layout')
@section('content')

    <div class="content-childreen">
        {{-- <h1> Person Added succesfully !</h1/> --}}
        <h2>List of People</h2>
        <table>
            <tr>
                <th>No</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Action</th>

            <tr>
                <tbody>
                    @foreach ($people as $person)
                        <tr>
                            <td>
                                {{ $person->id }}
                            </td>
                            <td>
                                {{ $person->first_name }}
                            </td>

                            <td>
                                {{ $person->last_name }}
                            </td>

                            <td>
                                {{ $person->email }}
                            </td>
                            <td class="action">
                                <a href="/people/{{ $person->id }}" class="action-view">view</a>

                                <form method="POST" action="{{ route('people.destroy', $person->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="action-delete">Delete</button>
                                </form>
                            </td>
                        </tr>
                </tbody>





                @endforeach
        </table>

    </div>
@endsection
