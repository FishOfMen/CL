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

    @include('nav')
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
