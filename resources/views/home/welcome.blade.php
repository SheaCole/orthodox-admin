@extends('layout')

@extends('header')

@section('content')
    <h1 class="text-center">Welcome to Orthodox Admin</h1>
    <i><p class="text-center">A place organize your Orthodox life.</p></i>

    <h3 class="text-center">Login for current users</h3>

    <form class="col-md-6 col-md-offset-3" method="post" action="" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input name="username" type="text" class="form-control" id="" placeholder="username">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" type="password" class="form-control" id="" placeholder="password">
        </div>

        <a href="">Reset my password by email.</a>

        <div class="clearfix"></div>

        <br>

        <button type="submit" class="btn btn-primary">Login</button>

        <a href=""><h3 class="text-center">Create an account</h3></a>
    </form>
@stop
