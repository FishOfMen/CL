@extends('layout')

@section('content')

<ul class="breadcrumb">
    <li><a href="#/">Home</a></li>
    <li class="active">Sports</li>
</ul>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h2>Sports</h2>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-hover">
          <tr ng-repeat="x in sports">
            <td>{{ x.Name }}</td>
          </tr>
        </table>
    </div>
</div>

@stop