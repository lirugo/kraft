<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
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
                <img src="/img/logo/logo.png" class="kraft-logo m-t-10"/>
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
                    <li><a href="{{ url('/login') }}">{{ trans('app.login') }}</a></li>
                    <li><a href="{{ url('/register') }}">{{ trans('app.registration') }}</a></li>
                @else
                    <li><a href="{{ url('/home') }}">{{trans('app.main')}}</a></li>
                    <li><a href="{{ url('/manage/dashboard') }}">{{trans('app.manage')}}</a></li>
                    <li><a href="#">{{trans('app.objects')}}</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
                           style="position: relative; padding-left: 50px;">
                            <img src="/uploads/avatars/{{ Auth::user()->avatar }}" class="avatar-top-icon m-t-15"/>
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"> </i>
                            Logout
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @endif
                <li>
                    <form action="/language" method="post" class="m-t-30 m-l-20">
                        <input type=image src="/img/icon/flags/ru.svg" name="locale" value="ru" class="flag" alt="Russian">
                        <input type=image src="/img/icon/flags/en.svg" name="locale" value="en" class="flag m-l-10" alt="English">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>