@extends('layout')

@section('content')

<ul class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li><a href="/leagues">Leagues</a></li>
    <li class="active">Create Team</li>
</ul>
<div class="alert alert-danger" id="msgError" hidden="true">
    <p></p>
</div>
<div class="alert alert-success" id="msgSuccess" hidden="true">
    <p></p>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h2>Create New Team</h2>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" action="/">
            <fieldset>
                <div class="form-group">
                    <label for="league_name" class="col-lg-2 control-label">League</label>
                    <div class="col-lg-10">
                        <select class="form-control" id="league_name"></select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="team_name" class="col-lg-2 control-label">Team Name</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="team_name" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="button" class="btn btn-success">Create Team</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>

@stop
