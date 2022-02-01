<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!--css link-->
    <link rel="stylesheet" href={{ mix('css/app.css') }}>
</head>

<body class="background">
    {{-- NavBar --}}
    @extends('components.navbar')
    {{-- End of Navbar --}}
    @section('content')
    <table>
        <tr class="header">
          <th>FirstName</th>
          <th>Lastname</th>
          <th>Assigned badges</th>
          <th>delete option</th>
        </tr>
        @foreach ($people as $person)
            <tr>
                <td>{{ $person->first_name }}</td>
                <td>{{ $person->last_name }}</td>
                <td>
                    @foreach($person->assignedBadges as $badge)
                        <div>{{$badge->name}}</div>
                    @endforeach
                </td>
                <td><form action="{{route('people.destroy',$person->id)}}" method="POST">
                @csrf
            @method('DELETE')<button type="submit" class="delButton">Delete</button></form></td>
            </tr>
        @endforeach
      </table>
      @endsection
</body>

</html>
