@extends('layout')

@section('content')

<ul class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li class="active">Teams</li>
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
        <h2>Teams</h2>
    </div>
    <div class="panel-body">
       <table class="table table-striped table-hover">
            <thead>
                <tr class="info">
                    <th>Team Name</th>
                    <th>Team Captain</th>
                    <th>League</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $team)
                  <tr>
                    <td>{{ $team->team_name }}</td>
                    <td>{{ $team->user->first_name }} {{ $team->user->last_name }}</td>
                    <td>{{ $team->league->name }}
                  </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/teams/create-team"><button type="button" class="btn btn-info">Create Team</button></a>
    </div>
</div>

@stop
