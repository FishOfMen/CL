<!DOCTYPE html>
<html>
<header>
    <title>Community Leagues</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://use.fontawesome.com/fbd586ff95.js"></script>
</header>
<body>
<div class="row">
 <nav class="navbar navbar-default" >
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            <a class="navbar-brand" href="/">Community Leagues</a>
        </div>
        
        <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="false" style="height: 1px;">
            <ul class="nav navbar-nav nav-pills">
                <li><a href="/" ><i class="fa fa-home fa-lg" aria-hidden="true"></i>  Home</a></li>
                <li><a href="/users/user">Profile</a></li>
                <li><a href="/teams" >Teams</a></li>
                <li><a href="/leagues" >Leagues</a></li>
                <li><a href="/sports" >Sports</a></li>
                <li><a href="/weather">Weather</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right nav-pills">
                <li><a href="" >Log In  <i class="fa fa-sign-in fa-lg" aria-hidden="true"></i></a></li>
                <li><a href="">Log Out  <i class="fa fa-sign-out fa-lg" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</nav>
</div>
    <div class="row">
        <div class="content col-md-6 col-md-offset-3">
            
            @yield('content')
            
            <br />
            <footer>
               <p><i class="material-icons">copyright</i> Community Leagues</p>
            </footer>
        </div>
    </div>
</body>
</html>