@extends('layout')

@section('content')

    <h3><a href="{{action('Pages@people')}}">Back to People</a></h3>

    <h1 class="text-center">Profile for {{ $person->first_name }} {{ $person->last_name }}</h1>

    <h3>Age: {{ $person->age }}</h3>

@stop
