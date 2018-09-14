@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Content Page</h1>
    <br>
    <p>This is the list of the people who does not pay their rent yet:</p>
    <br>
        @if (count($people))

        <ul>
            @foreach($people as $person)

                <li>{{$person}}<br></li>

            @endforeach()

        </ul>

        @endif()

</div>

@endsection