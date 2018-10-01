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
            <ul class="nav navbar-nav"></ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">{{ trans('app.login') }}</a></li>
                    <li><a href="{{ url('/register') }}">{{ trans('app.registration') }}</a></li>
                @else
                    @if(Auth::user()->hasRole('distributor'))
                        <li>
                            <a href="{{ url('/shop/cart') }}">
                                @if(Session::has('cart'))
                                    <i data-count="{{Session::has('cart') ? Session::get('cart')->totalQty : 0}}" id="notification_counter_shop" class="fa fa-shopping-cart notification-icon"></i>
                                @else
                                    <i id="notification_counter_shop" class="fa fa-shopping-cart"></i>
                                @endif
                            </a>
                        </li>
                    @endif
                    {{--<li><a href="/messages">Messages @include('messenger.unread-count')</a></li>--}}
                    {{--Notification --}}
                    <li class="dropdown dropdown-notifications">
                        <a href="#notifications-panel" class="dropdown-toggle" data-toggle="dropdown">
                            <i data-count="0" id="notification_counter" class="fa fa-bell"></i>
                        </a>
                        <div class="dropdown-container">
                            <div class="dropdown-toolbar">
                                <div class="dropdown-toolbar-actions">
                                    <a href="#" onclick="markAllAsRead()">Mark all as read</a>
                                </div>
                                <h3 class="dropdown-toolbar-title">Notifications (<span class="notif-count">0</span>)</h3>
                            </div>
                            <ul class="dropdown-menu" id="notifications_list">
                            </ul>
                            <div class="dropdown-footer text-center">
                            {{--<a href="#">View All</a>--}}
                            </div>
                        </div>
                    </li>
                    <li><a href="{{ url('/news') }}">{{trans('app.main')}}</a></li>
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
                {{--<li>--}}
                    {{--<form action="/language" method="post" class="m-t-30 m-l-20 m-r-10">--}}
                        {{--<input type=image src="/img/icon/flags/ru.svg" name="locale" value="ru" class="flag" alt="Russian">--}}
                        {{--<input type=image src="/img/icon/flags/ua.png" name="locale" value="ua" class="flag m-l-10" alt="Ukrainian">--}}
                        {{--<input type=image src="/img/icon/flags/en.svg" name="locale" value="en" class="flag m-l-10" alt="English">--}}
                        {{--{{ csrf_field() }}--}}
                    {{--</form>--}}
                {{--</li>--}}

                <li><a src="/img/icon/flags/ru.svg" name="locale" class="flag" href="{{url('/language?lang=ru')}}"><img src="/img/icon/flags/ru.svg" width="20px"></a></li>
                <li><a src="/img/icon/flags/ua.svg" name="locale" class="flag" href="{{url('/language?lang=ua')}}"><img src="/img/icon/flags/ua.png" width="20px"></a></li>
                <li><a src="/img/icon/flags/en.svg" name="locale" class="flag" href="{{url('/language?lang=en')}}"><img src="/img/icon/flags/en.svg" width="20px"></a></li>

                <li><a href="{{ url('/help') }}"><i class="fa fa-question-circle fa-2x" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</nav>