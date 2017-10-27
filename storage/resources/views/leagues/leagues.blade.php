@extends('layout')

@section('content')


<ul class="breadcrumb">
    <li><a href="#/">Home</a></li>
    <li href="#leagues">League</li>
    <li class="active">League Info</li>
</ul>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h2>{{ league }}</h2>
    </div>
    <div class="panel-body">
       <table class="table table-striped table-hover">
                    <thead>
                        <tr class="info">
                            <th>Team Name</th>
                            <th>Team Owner</th>
                        </tr>
                    </thead>
                        <tr ng-repeat="x in leagues">
                            <td>{{ x.team }}</td>
                            <td>{{ x.first_name }} {{ x.last_name }}</td>
                        </tr>
                </table>
        <a href="#createleague"><button type="button" class="btn btn-info">Create League</button></a>
    </div>
</div>

@stop