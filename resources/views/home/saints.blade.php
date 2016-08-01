@extends('layout')

@section('content')

    <h1 class="text-center">All Saints</h1>

    {{--<a href="{{action('Pages@add_saints')}}"><button class="btn btn-default center-block">Add a saint</button></a>--}}


    <div class=" col-md-6 col-md-offset-3"><h2 class="title">Saints</h2>

        <hr/>

        <ol>
            @foreach ($saints as $saint)
                <li>{{ $saint->saint_name }} | {{ $saint->saint_img }}</li>
            @endforeach
        </ol>
    </div>
@stop
