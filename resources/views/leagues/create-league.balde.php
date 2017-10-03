@extends('layout')

@section('content')

<ul class="breadcrumb">
    <li><a href="#/">Home</a></li>
    <li><a href="#leagues">Leagues</a></li>
    <li class="active">Create League</li>
</ul>
<div class="alert alert-danger" id="msgError" ng-show="msgError.show">
    <p>{{ errorText }}</p>
</div>
<div class="alert alert-success" id="msgSuccess" ng-show="msgSuccess.show">
    <p>{{ successText }}</p>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h2>Create New League</h2>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" action="/">
            <fieldset>
                <div class="form-group">
                    <label for="name" class="col-lg-2 control-label">League Name</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="name" ng-model="name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="sport" class="col-lg-2 control-label">Sport</label>
                    <div class="col-lg-10">
                        <select class="form-control" id="sport" ng-model="sportList" ng-options="sport as sport.sport for sport in sports"></select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        
                        <button type="button" ng-click="createleague()" class="btn btn-success">Create League</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>

@stop