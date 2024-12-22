<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_pchome.css')}}"/>
    <link rel="stylesheet" href="{{ asset('css/uikit.css')}}">
</head>
<body>
<header class="header">
        <section class="logo_header_block">
            <h1 class="logo_header_block_h1"><b>PC Home</b></h1>
        </section>
        <nav class="header_nav">
            <a class="a_none_decorate" href="{{route('home')}}">
                <img src="img/PChome_logo-Photoroom.png" class="logo_header_img">
            </a>
            <a href="{{route('forus')}}" class="a_none_decorate">
                <h1 class="header_nav_h1">
                    О нас
                </h1>
            </a>
            <a href="{{route('forus')}}" class="a_none_decorate">
            <!-- #whyWe -->
                <h1 class="header_nav_h1">
                    Почему мы?
                </h1>
            </a>
            <a href="{{route('price')}}" class="a_none_decorate">
                <h1 class="header_nav_h1">
                    Прайс
                </h1>
            </a>
            <a href="{{route('equipment')}}" class="a_none_decorate">
                <h1 class="header_nav_h1">
                    Оборудование
                </h1>
            </a>
            <button class="button_review" onclick="window.review.showModal()">
                <h1 class="header_nav_h1">
                    Отзывы
                </h1>
            </button>
        </nav>
    </header>
    
    <main class="main">
        @yield('content')
    </main>

    <footer class="footer">
        <a href="tel:+79999999999" class="a_none_decorate">
            <h3 class="footer_tel">+7 (999) 999 99 99</h3>
        </a>
        <div class="footer_icons">
            <a href="" class="a_none_decorate">
                <img src="img/icons8-телеграм-50.png" class="icon_tg">
            </a>
            <a href="https://vk.com/idbhatypemyaxkui" class="a_none_decorate">
                <img src="img/icons8-vk-50.png" class="icon_vk">
            </a>
            <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="a_none_decorate">
                <img src="img/icons8-youtube-50.png" class="icon_yt">
            </a>
            <a href="https://www.instagram.com/" class="a_none_decorate">
                <img src="img/icons8-instagram-50.png" class="icon_inst">
            </a>
            <a href="https://x.com/?lang=ru" class="a_none_decorate">
                <img src="img/icons8-твиттер-50.png" class="icon_twitter">
            </a>
        </div>
        <h3 class="footer_email">pchome@gmail.com</h3>

    </footer>
</body>
</html>