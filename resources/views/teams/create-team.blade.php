@extends('layout')

@section('content')

<ul class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li><a href="/leagues">Leagues</a></li>
    <li class="active">Create Team</li>
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
        <h2>Create New Team</h2>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" method="post" action="/teams/create">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <fieldset>
                <div class="form-group">
                    <label for="league_name" class="col-lg-2 control-label">League</label>
                    <div class="col-lg-10">
                        <select class="form-control" id="league_name" name="league">
                            @foreach($leagues as $league)

                                <option value="{{ $league->id }}">{{ $league->name }}</option>

                                @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="team_name" class="col-lg-2 control-label">Team Name</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="team_name" id="team_name" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="submit" class="btn btn-success">Create Team</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>

@stop
