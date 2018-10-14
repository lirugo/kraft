<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/img/logo/logo.png" class="kraft-logo"/>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())

                @else
                    <li><a href="{{ url('/admin') }}">Admin Panel</a></li>
                    <li>
                        <a href="{{ url('/admin/logout') }}">
                            <i class="fa fa-sign-out"> </i>
                            {{ trans('app.logout') }}
                        </a>
                        <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @endif
                <li><a src="/img/icon/flags/ru.svg" name="locale" class="flag" href="{{url('/language?lang=ru')}}"><img src="/img/icon/flags/ru.svg" width="20px"></a></li>
                <li><a src="/img/icon/flags/ua.svg" name="locale" class="flag" href="{{url('/language?lang=ua')}}"><img src="/img/icon/flags/ua.png" width="20px"></a></li>
                <li><a src="/img/icon/flags/en.svg" name="locale" class="flag m-r-20" href="{{url('/language?lang=en')}}"><img src="/img/icon/flags/en.svg" width="20px"></a></li>
                <li></li>
            </ul>
        </div>
    </div>
</nav>