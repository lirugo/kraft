    <div class="footer">
        <div class="footer-text">
            <p class="text-center">
                © {{ date('Y')}} {{ trans('app.footertext') }}
                @if(!Auth::guest())
                @if(Auth::user()->hasRole('distributor') || Auth::user()->hasRole('designer') || Auth::user()->hasRole('worker'))
                <a id="contact-form" href="#" class="contact-menu pull-right" style="
                color: #ffffff;
                background-color: #f78620;
                padding: 10px;
                margin-right: 30px;
                margin-left: 30px;
                margin-top: -10px;
                position: fixed;
                text-transform: uppercase;
                ">Связь Kraft</a>
                @endif
                @endif
            </p>


                {{--<li><a id="contact-form" href="#" class="contact-menu">Связь с KRAFT</a></li>--}}

        </div>

    </div>