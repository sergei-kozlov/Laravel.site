@include('layouts.partials.scripts')

<div class="header">
    <div class="container">
        <div class="logo"><a href="/"><img src="{{asset('theme/images/logo_cr.jpg')}}" alt="Новый сайт"></a></div>
        <div class="menu"><a class="toggleMenu" href="#"><img src="{{asset('theme')}}" alt=""/> </a>
            <ul class="nav" id="nav">
                <li class="current"><a href="/">Главная</a></li>
                <li><a href="{{URL::to('about.html')}}">О фирме</a></li>
                <li><a href="{{URL::to('services.html')}}">Услуги</a></li>
                <li><a href="{{URL::to('blog')}}">Отзывы</a></li>
                <li><a href="{{URL::to('contact.html')}}">Контакты</a></li>

                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Войти</a></li>
                    <li><a href="{{ url('/register') }}">Регистрация</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif

                <div class="clear"></div>
            </ul>
            <script type="text/javascript" src="{{asset('theme/js/responsive-nav.js')}}"></script>
        </div>
        <div class="clearfix"></div>
    </div>
</div>




