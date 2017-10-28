@extends('layout')

@section('content')

<ul class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li class="active">Profile</li>
</ul>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h2>{{$user_info->first_name}} {{$user_info->last_name}}</h2>
    </div>
    <div class="panel-body">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3>Personal Information</h3>
            </div>
            <div class="panel-body">
                <p>First Name: {{$user_info->first_name}}</p>
                <p>Last Name: {{$user_info->last_name}}</p>
                <p>Username: {{$user_info->username}}</p>
                <p>Email: {{$user_info->email}}</p>
            </div>
        </div>
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3>Address</h3>
            </div>
            <div class="col-lg-10 panel-body">
                <p>Address: {{$user_info->address}}</p>
                <p>City: {{$user_info->city}}</p>
                <p>State: {{$user_info->state}}</p>
                <p>Zip: {{$user_info->zip}}</p>
            </div>
        </div>
    </div>
</div>

@stop
