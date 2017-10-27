@extends('layout')

@section('content')

<ul class="breadcrumb">
    <li><a href="#/">Home</a></li>
    <li class="active">Weather</li>
</ul>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h2>Weather</h2>
    </div>
    <div class="panel-body">
        <p> lat: {{ lat }} </p>
        <p> lon: {{ lon }} </p>
        <p>Location: {{ location }}</p>
        <p>description: {{ description }} </p>
        <p>temp: {{ ftemp }}</p>
    </div>
</div>

@stop