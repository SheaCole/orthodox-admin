@extends('layout')


@section('content')

    <h1 class="text-center">Add a Saint to the database</h1>

    <form class="col-md-6 col-md-offset-3" method="post" action="" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input name="data[saint_name]" type="text" class="form-control" id="exampleInputEmail1" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Feast Day</label>
            <input name="data[saint_feast_day]" type="date" class="form-control" id="datepicker exampleInputPassword1" placeholder="feast day">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <textarea name="data[saint_description]" type="date" class="form-control" id="datepicker exampleInputPassword1" placeholder="Description"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Hymns</label>
            <textarea name="data[saint_hymn]" type="date" class="form-control" id="datepicker exampleInputPassword1" placeholder="Troparia & Kontakia"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Upload an image</label>
            <p class="help-block">Add an image of the saint here if available.</p>
            <input name="data[saint_img]" type="file" id="exampleInputFile">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>

    <div class="clearfix"></div>

@stop
