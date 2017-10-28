@extends('layout')

@section('content')

<ul class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li class="active">Login</li>
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
        <h2>Log In</h2>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" action="/signIn" method="post">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <fieldset>
                <div class="form-group">
                    <label for="username" class="col-lg-2 control-label">Username</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="username" id="username">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                         <button type="submit" class="btn btn-success">Log In</button>
                        <a href="/users/create-user"><button type="button" class="btn btn-info">Sign Up</button></a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>

@stop
