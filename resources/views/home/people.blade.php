@extends('layout')

@section('content')
<div class="people">
    <h1 class="title">People</h1>

    <hr/>

    <ol>
        @foreach ($people as $person)
            <li><a href="{{ action('Pages@profile', [$person->slug]) }}">{{ $person->first_name }} {{ $person->last_name }}</a> is {{ $person->age }} years old.</li>
        @endforeach
    </ol>

</div>
@stop
