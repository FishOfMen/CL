
    @if( Session::exists('User'))

        @if( Session::get('User') == 'Guest')

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
                        <li><a href="/teams" >Teams</a></li>
                        <li><a href="/leagues" >Leagues</a></li>
                        <li><a href="/sports" >Sports</a></li>
                        <li><a href="/weather">Weather</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right nav-pills">
                        <li><a href="/login">Log In  <i class="fa fa-sign-in fa-lg" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>

        @else

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
                        <li><a href="/users/profile/{{Session::get('User')}}">Profile</a></li>
                        <li><a href="/teams" >Teams</a></li>
                        <li><a href="/leagues" >Leagues</a></li>
                        <li><a href="/sports" >Sports</a></li>
                        <li><a href="/weather">Weather</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right nav-pills">
                        <li><a href="/logout">Log Out  <i class="fa fa-sign-out fa-lg" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>

        @endif

    @else

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
                    <li><a href="/teams" >Teams</a></li>
                    <li><a href="/leagues" >Leagues</a></li>
                    <li><a href="/sports" >Sports</a></li>
                    <li><a href="/weather">Weather</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right nav-pills">
                    <li><a href="/login">Log In  <i class="fa fa-sign-in fa-lg" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>

    @endif
