@extends('layout')

@section('content')

<ul class="breadcrumb">
    <li><a href="#/">Home</a></li>
    <li><a href="#login">Log In</a></li>
    <li class="active">Log Out</li>
</ul>
<div class="alert alert-success" id="msgSuccess">
    <p></p>
</div>
<div class="alert alert-danger" id="msgError">
    <p></p>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h2>Sign Up</h2>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" method="post" action="/users/create" id="SignUp">
            <fieldset>
                <legend>General Info</legend>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="first_name" class="col-lg-2 control-label">First Name</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="first_name" placeholder="John">
                    </div>
                </div>
                <div class="form-group">
                    <label for="last_name" class="col-lg-2 control-label">Last Name</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="last_name" placeholder="Smith">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                        <input type="email" class="form-control" name="email" placeholder="something@gmail.com">
                    </div>
                </div>
                <div class="form-group">
                    <label for="username" class="col-lg-2 control-label">Username</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="username" placeholder="jSmith">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Birthday</legend>
                <div class="form-group">
                    <label for="year" class="col-lg-2 control-label">Birthday</label>
                    <div class="col-lg-5">
                        <input type="date" class="form-control" name="birthday" placeholder="1999-03-12">
                    </div>
                </div>
<!--
                <div class="form-group">
                    <label for="month" class="col-lg-2 control-label">Month</label>
                    <div class="col-lg-5">
                        <select class="form-control" id="month">
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="day" class="col-lg-2 control-label">Day</label>
                    <div class="col-lg-5">
                        <select class="form-control" id="day">
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                    </div>
                </div>
-->
            </fieldset>
            <fieldset>
                <legend>Address</legend>
                <div class="form-group">
                    <label for="address" class="col-lg-2 control-label">Street</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="address" placeholder="123 Willow Drive">
                    </div>
                </div>
                <div class="form-group">
                    <label for="city" class="col-lg-2 control-label">City</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="city" placeholder="Pittsburgh">
                    </div>
                </div>
                <div class="form-group">
                    <label for="state" class="col-lg-2 control-label">State</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="state" placeholder="Pennsylvania">
                    </div>
                </div>
                <div class="form-group">
                    <label for="zip" class="col-lg-2 control-label">Zip-Code</label>
                    <div class="col-lg-10">
                        <input type="number" class="form-control" name="zip" placeholder="15010">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="submit" class="btn btn-success">Create User</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>

@stop