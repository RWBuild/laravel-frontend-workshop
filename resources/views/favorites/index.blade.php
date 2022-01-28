@extends('layout.layout')
@section('content')

    <div class="all-favorites">
        <h2> List of Favorites !</h2>
        <table>
            <th>No</th>
            <th>Favorites</th>
            <tbody>
                @foreach ($favorites as $favorite)
                    <tr>
                       
                        <td>
                            {{ $favorite->id }}
                        </td>
                        <td>
                            {{ $favorite->name }}
                        </td>
                    </tr>


                @endforeach
            </tbody>
        </table>
    </div>
@endsection
