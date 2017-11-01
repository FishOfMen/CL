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
    <div class="content container-fluid col-md-offset-2 col-md-8 col-md-offset-2">

        @yield('content')

        <br />
        <footer>

           <p><i class="material-icons">copyright</i> Community Leagues</p>
        </footer>
    </div>
</body>
</html>
