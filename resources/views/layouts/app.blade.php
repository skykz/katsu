<!DOCTYPE html>
<html lang="{{$result['isRu'][0]->is_ru==1?"ru-RU":"en-US"}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Katsu.kz. Дизайн интерьеров, частная архитектура</title>
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />
    <link rel="apple-touch-icon" href="{{asset('images/favicon.ico')}}" />
    <meta name="description"  content="[:en]Заказать профессиональный дизайн интерьера от Katsu в Казахстане(Алматы). Услуги современного дизайнера интерьеров в Казахстане. Лучший дизайнер[:ru] Лучший дизайнер[:]" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' href=' {{asset('css/katsu.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/sideName.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/sideSocials.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/button_style.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/style_main.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-block-library-css'  href='{{asset('css/style.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='font-css'  href='https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A300%2C400%2C600&#038;ver=4.9.13' type='text/css' media='all' />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.0/lottie.js'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script type='text/javascript' src='http://nott.design/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
    <script type='text/javascript' src='http://nott.design/wp-content/themes/nottdesign/assets/js/main.js?ver=4.9.13'></script>

    <style type="text/css">
        #bm{
            position: fixed;
            top: 0;
            background-color: rgb(255, 255, 255);
            left: 0;
            right: 0;
            display: block;
            opacity: 1.0;
            bottom: 0;
            -moz-background-size:470px 104px;
            -o-background-size:470px 104px;
            -webkit-background-size:470px 104px;
            background-size:470px 104px;
            z-index: 99998;
            width:100%;
            height:100%;
        }
        div.scrollmenu {
            overflow: auto;
            white-space: nowrap;
            display: flex;
        }
        @media screen and (max-width: 767px) {
            div.scrollmenu {
                overflow: hidden;
            }
        }
    </style>
{{--    <link rel="alternate" hreflang="en-us" href="http://nott.design/en/"/>--}}
{{--    <link rel="alternate" hreflang="x-default" href="http://nott.design/"/>--}}
{{--    <link rel="alternate" hreflang="ru-ru" href="http://nott.design/"/>--}}
</head>
<body >
<div id="bm"></div>
<header class="header" id="startSection">
    <div class="logo">
        <a href="{{url('/')}}" class="logo__link">
            <span class="logo__text">
                <img src="{{asset('images/logo.svg')}}" alt="katsu logo" width="200px" height="50px"/>
            </span>
        </a>
    </div>
    <input type="checkbox" class="nav-checkbox" id="nav-toggle">
    <label for="nav-toggle" class="nav-button">
        <span class="nav-button__icon">&nbsp;</span>
    </label>
    <div class="logo logo--mobile">
        <img src="{{asset('images/logo.svg')}}" alt="katsu logo"  width="200px" style="background-color: white;padding:10px " height="50px"/>
    </div>
    <div class="nav-container"><ul id="" class="nav nav-desktop"><li id="menu-item-108" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-108"><a href="/">{{$result['isRu'][0]->is_ru==1?('Главная'):('Main Page')}}</a></li>
            <li id="menu-item-111" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-111"><a href="#aboutUsBlock">{{$result['isRu'][0]->is_ru==1?('О Нас'):('About Us')}}</a></li>
            <li id="menu-item-109" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-109"><a href="#contactsBlock">{{$result['isRu'][0]->is_ru==1?('Контакты'):('Contacts')}}</a></li>
        </ul></div>
    <div class="nav-container nav-mobile-container">
        <ul class="nav "><li id="menu-item-523" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-523">
                <a href="#aboutUsBlock">{{$result['isRu'][0]->is_ru==1?('О Нас'):('About Us')}}</a></li>
            <li id="menu-item-514" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-514">
                <a href="/">{{$result['isRu'][0]->is_ru==1?('Главная'):('Main Page')}}</a>
                <ul class="sub-menu">
                    @for($i = 0; $i < count($result['category']); $i++)
                    <li id="menu-item-518" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-518">
                        <a href="{{url('category')}}/{{$result['category'][$i]->id}}">{{$result['isRu'][0]->is_ru==1?$result['category'][$i]->name_ru:$result['category'][$i]->name_en}}</a></li>
                     @endfor
                </ul>
            </li>
            <li id="menu-item-515" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-515"><a href="#contactsBlock">{{$result['isRu'][0]->is_ru==1?('Контакты'):('Contacts')}}</a></li>
        </ul>
    </div>
    <div class="header__lang-switcher">
        <ul class="wpm-language-switcher switcher-list">
            <li class="item-language-ru {{$result['isRu'][0]->is_ru==1?'active':''}}">
                <span data-lang="ru">
                     <a href=" {{url('setLang/ru')}}" data-lang="ru">
                        <span>RU</span>
                     </a>
                </span>
            </li>
            <li class="item-language-en {{$result['isRu'][0]->is_ru==0?'active':''}}">
                <a href="{{url('setLang/en')}}" data-lang="en">
                    <span>ENG</span>
                </a>
            </li>
        </ul>
    </div>

</header>
@yield('main')
@yield('detailed')
<div class="footer">
    <div class="footer_right">
        <div class="arrowTo-top">
            <a href="#startSection">
                <img src="{{asset('icons/arrow.svg')}}" alt="arrow">
            </a>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{asset('js/masonry.js')}}"></script>

<script>
    $(function() {

        // contact form animations
        $('#contactBtn').click(function() {
            console.log("tapped");
            $('#contactForm').fadeToggle();
            $('#contactFormBackground').fadeToggle();

        });
        $('#closeModal').click(function() {
            console.log("tapped");
            $('#contactForm').hide();
            $('#contactFormBackground').hide();

        });
        $(document).mouseup(function (e) {
            var container1 = $("#contactFormBackground");
            var container2 = $("#contactForm");


            if ((!container1.is(e.target) // if the target of the click isn't the container...
                && container1.has(e.target).length === 0) && (!container2.is(e.target) // if the target of the click isn't the container...
                && container2.has(e.target).length === 0)) // ... nor a descendant of the container
            {
                container1.fadeOut();
                container2.fadeOut();
            }
        });

    });

    window.addEventListener("load", function() {
        setVisible('#bm',false);
    }, false);

    function setVisible(selector, visible) {
        document.querySelector(selector).style.display = visible ? 'block' : 'none';
    }
    var animation = bodymovin.loadAnimation({
        container: document.getElementById('bm'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: 'https://assets5.lottiefiles.com/packages/lf20_DJgile.json'
    });

    $( ".teamDesktop_member" ).first().css( "opacity", "1.0" );

    for (i = 0; i < 3; i++){
        if (i !== 0) {
            $('.text' + i).hide();
        }
    }
    $('.teamDesktop_member').hover(
        function(){
            var ind = ".text"+$(this).data('id');
            $('.spanText').hide();
            $('.teamDesktop_member').css('opacity','0.5');
            $(this).css('opacity','1');
            $(ind).show();
        },);

</script>

</body>
</html>
