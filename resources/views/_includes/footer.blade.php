<div class="footer">
    <div class="footer-text">
        <p class="text-center">
            © {{ date('Y')}} {{ trans('app.footertext') }}
            @if(!Auth::guest() && !Auth::guard("admin")->check())
                @if(Auth::user()->hasRole('distributor') || Auth::user()->hasRole('designer') || Auth::user()->hasRole('worker'))
                    <a id="contact-form" href="#" class="contact-menu pull-right bnam" style="">Написать в Kraft</a>
                @endif
            @endif
        </p>
        {{--<li><a id="contact-form" href="#" class="contact-menu">Связь с KRAFT</a></li>--}}
    </div>

</div>