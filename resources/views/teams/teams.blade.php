@extends('layout')

@section('content')

<ul class="breadcrumb">
    <li><a href="#/">Home</a></li>
    <li class="active">Teams</li>
</ul>
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
                    <td>{{ $team['team_name'] }}</td>
                    <td>{{ $team['user']['first_name'] }} {{ $team['user']['last_name'] }}</td>
                    <td>{{ $team['league']['name'] }}
                  </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/teams/create-team"><button type="button" class="btn btn-info">Create Team</button></a>
    </div>
</div>

@stop
