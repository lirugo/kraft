<nav style="max-width:100%" class="navbar navbar-default navbar-static-top">
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
                <img src="/img/logo/logo.png" class="kraft-logo"/>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                @if(!Auth::guest())
                    @if(Auth::user()->hasRole('distributor') || Auth::user()->hasRole('designer') || Auth::user()->hasRole('worker'))
                        <li><a id="contact-form" href="#" class="contact-menu">Связь с KRAFT</a></li>
                    @endif
                @endif
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">{{ trans('app.login') }}</a></li>
                    <li><a href="{{ url('/register') }}">{{ trans('app.registration') }}</a></li>
                @else
                    <li><a href="/messages">Messages @include('messenger.unread-count')</a></li>
                    <li><a href="{{ url('/home') }}">{{trans('app.main')}}</a></li>
                    <li><a href="{{ url('/manage/dashboard') }}">{{trans('app.manage')}}</a></li>
                    <li>
                        <a href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"> </i>
                            {{ trans('app.logout') }}
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @endif
                <li>
                    <form action="/language" method="post" class="m-t-30 m-l-20 m-r-10">
                        <input type=image src="/img/icon/flags/ru.svg" name="locale" value="ru" class="flag" alt="Russian">
                        <input type=image src="/img/icon/flags/ua.png" name="locale" value="ua" class="flag m-l-10" alt="Ukrainian">
                        <input type=image src="/img/icon/flags/en.svg" name="locale" value="en" class="flag m-l-10" alt="English">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>