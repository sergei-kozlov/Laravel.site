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
                <li><a href="{{URL::to('login')}}">Войти</a></li>
                <li><a href="{{URL::to('register')}}">Регистрация</a></li>

                <div class="clear"></div>
            </ul>
            <script type="text/javascript" src="{{asset('theme/js/responsive-nav.js')}}"></script>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

