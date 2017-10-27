@extends('layout')

@section('content')

        <div class="container">
        <ul class="breadcrumb">
            <li class="active">Home</li>
        </ul>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="">What is Community Leagues?</h2>
            </div>
            <div class="panel-body"> 
                <p>Community Leagues is a place for anyone to create and manage leagues for a multitude of sports. We are currently developing the application for hockey. We plan to add more sports to those availiable in the future.</p>
            </div>
        </div>
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h2 class="">Our Current Users</h2>
                </div>
            <div class="panel-body"> 
                <table class="table table-striped table-hover">
                    <thead>
                        <tr class="info">
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                     @foreach($users as $user)
                        <tr>
                            <td><a href="users/user/{{ $users->id }}">{{ $user->first_name }}</a></td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->username }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
</div>

@stop
