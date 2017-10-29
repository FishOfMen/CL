@extends('layout')

@section('content')

<ul class="breadcrumb">
    <li><a href="#/">Home</a></li>
    <li><a href="#login">Log In</a></li>
    <li class="active">Log Out</li>
</ul>
@if(Session::has('success'))
    <div class="alert alert-success" id="msgSuccess">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success: </strong>{{ Session::get('success') }}
    </div>
@endif
@if(Session::has('error'))
    <div class="alert alert-danger" id="msgError">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Error: </strong>{{ Session::get('error') }}
    </div>
@endif
<div class="panel panel-primary">
    <div class="panel-heading">
        <h2>Sign Up</h2>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" method="post" action="/users/create" id="SignUp">
            <fieldset>
                <legend>General Info</legend>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="first_name" class="col-lg-2 control-label">First Name</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="first_name" placeholder="John">
                    </div>
                </div>
                <div class="form-group">
                    <label for="last_name" class="col-lg-2 control-label">Last Name</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="last_name" placeholder="Smith">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                        <input type="email" class="form-control" name="email" placeholder="something@gmail.com">
                    </div>
                </div>
                <div class="form-group">
                    <label for="username" class="col-lg-2 control-label">Username</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="username" placeholder="jSmith">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Birthday</legend>
                <div class="form-group">
                    <label for="year" class="col-lg-2 control-label">Birthday</label>
                    <div class="col-lg-5">
                        <input type="date" class="form-control" name="birthday" placeholder="1999-03-12">
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Address</legend>
                <div class="form-group">
                    <label for="address" class="col-lg-2 control-label">Street</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="address" placeholder="123 Willow Drive">
                    </div>
                </div>
                <div class="form-group">
                    <label for="city" class="col-lg-2 control-label">City</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="city" placeholder="Pittsburgh">
                    </div>
                </div>
                <div class="form-group">
                    <label for="state" class="col-lg-2 control-label">State</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="state" placeholder="Pennsylvania">
                    </div>
                </div>
                <div class="form-group">
                    <label for="zip" class="col-lg-2 control-label">Zip-Code</label>
                    <div class="col-lg-10">
                        <input type="number" class="form-control" name="zip" placeholder="15010">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="submit" class="btn btn-success">Create User</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>

@stop
