@extends('layout')

@section('content')

<ul class="breadcrumb">
    <li><a href="#/">Home</a></li>
    <li class="active">Login</li>
</ul>
<div class="alert alert-danger" id="msgError">
    
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h2>Log In</h2>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" action="/">
            <fieldset>
                <div class="form-group">
                    <label for="username" class="col-lg-2 control-label">Username</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="username" ng-model="username">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                        <input type="password" class="form-control" id="password" ng-model="password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="button" class="btn btn-success">Log In</button>
                        <a href=""><button type="button" class="btn btn-info">Sign Up</button></a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>

@stop