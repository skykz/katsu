
@extends('layouts.app')
@section('main')

<div class="container-full">

    <div class="category-switcher">
        <div class="nav-container">
            <ul class="nav">
                @for($i = 0; $i < count($result['category']); $i++)
{{--                    current-menu-item current_page_item--}}
                @if($result['category'][$i]->id == 4 && Request::is('/'))

                        <li id="menu-item-102" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-102">
                        <a href="{{url('category')}}/{{$result['category'][$i]->id}}">{{$result['isRu'][0]->is_ru==1?$result['category'][$i]->name_ru:$result['category'][$i]->name_en}}</a></li>
                    @else
                    <li id="menu-item-102" class="menu-item menu-item-type-custom menu-item-object-custom {{ Request::is('category/'.$result['category'][$i]->id) ? 'current-menu-item current_page_item' : '' }} menu-item-home menu-item-102">
                        <a href="{{url('category')}}/{{$result['category'][$i]->id}}">{{$result['isRu'][0]->is_ru==1?$result['category'][$i]->name_ru:$result['category'][$i]->name_en}}</a></li>

                    @endif
                @endfor
            </ul>
        </div>
    </div>

    <main class="posts-list grid">
        @for($i = 0; $i < count($result['portfolio']); $i++)
            <figure class="post-preview item">
            <div class="content">
                <a href="{{url('/detail')}}/{{$result['portfolio'][$i]->id}}">
                    <img width="900" height="900" src="{{asset('storage')}}/{{$result['portfolio'][$i]->image}}" class="post-preview__img wp-post-image" alt="" sizes="(max-width: 900px) 100vw, 900px" />
                    <div class="post-preview__title-wrapper">
                        <figcaption class="post-preview__title">{{$result['isRu'][0]->is_ru==1?$result['portfolio'][$i]->title_ru:$result['portfolio'][$i]->title_en}}</figcaption>
                    </div>
                </a>
            </div>
        </figure>
        @endfor
    </main>
</div>
<div id="aboutUsBlock" class="aboutUs">
    <div class="side-name sideName_animation-active">
        <div class="vertical-text-name">{{$result['isRu'][0]->is_ru==1?('О Нас'):('About Us')}}</div>
        <hr class="side-line">
    </div>
    <div class="aboutUsBlock" id="aboutUsTrigger">
        <div class="aboutUsBlock_line aboutUs_animation-active">
            <hr>
        </div>
        <div class="aboutUsBlock_content">
            <div class="aboutUsBlock_left aboutUs_animation-active">
                <img class="aboutUsBlock_logo" src="{{asset('images/logo.svg')}}" width="350px"
                     alt="KOSUGIGATSU logo"></div>
            <div class="aboutUsBlock_right">
                <div class="aboutUs_textWrap aboutUs_animation-active">
                    <div class="aboutUs_textRow">
                        <u class="aboutUs_innerText">{{ $result['isRu'][0]->is_ru==1?$result['about'][0]->first_title_rus:$result['about'][0]->first_title_en}}</u>
                    </div>
                    <div class="aboutUs_textRow aboutUs_textRow-height "></div>
                    <div class="aboutUs_textRow"><u class="aboutUs_innerText">{{$result['isRu'][0]->is_ru==1?$result['about'][0]->second_title_rus:$result['about'][0]->second_title_en }}</u></div>
                    <div class="aboutUs_textRow aboutUs_textRow-height "></div>
                    <div class="aboutUs_textRow"><u class="aboutUs_innerText">{{$result['isRu'][0]->is_ru==1?$result['about'][0]->third_title_rus:$result['about'][0]->third_title_en}}</u></div>
                    <div class="aboutUs_textRow aboutUs_textRow-height "></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="teamBlock" class="team">
    <div class="side-name sideName_animation-active">
        <div class="vertical-text-name">{{$result['isRu'][0]->is_ru==1?('Команда'):('Team')}}</div>
        <hr class="side-line">
    </div>
    <div class="teamLegendDesktop">
        <div class="teamLegendDesktop_left">
            <div class="animated fadeIn" style="animation-duration: 1s;">
                <div class="teamLegendDesktop_mainText">
                    @for($i = 0; $i < count($result['team']); $i++)
                        <span class="spanText text{{$i}}">{{$result['isRu'][0]->is_ru==1?$result['team'][$i]->body_ru:$result['team'][$i]->body_en}}<br> </span>
                    @endfor
                </div>
            </div>
{{--            <img src="{{asset('images/logo.svg')}}" alt="Katsu logo" style="height: 20px;">--}}
        </div>
        <div class="scrollmenu">
            <div class="teamLegendDesktop_right">
                @for($i = 0; $i < count($result['team']); $i++)
                    <div class="teamDesktop_member" data-id="{{$i}}"
                         style="background-image: url({{asset('storage')."/".str_replace('\\', '/', $result['team'][$i]->image)}});">
                        <p>{{$result['isRu'][0]->is_ru==1?$result['team'][$i]->full_name_ru:$result['team'][$i]->full_name_en}}</p>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>
<div id="contactsBlock" class="contacts">
    <div class="contactsView">
        <div class="contacts_left">
            <div class="map" id="myMap" style="position: relative; overflow: hidden;">
                <div class="gm-err-container">
                    <div class="gm-err-content">
                        <div class="gm-err-icon">
                            <script type="text/javascript" charset="utf-8"
                                    async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5c252bc2d2d142f74b45564b8494d872947bbeb7461d2134f046e375c20b485b&amp;width=730&amp;height=350&amp;lang=ru_RU&amp;scroll=false"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contacts_right">
            <div class="contactsInfo">
                <div class="animated fadeIn" style="animation-duration: 1s;">
                    <div class="slogan">{{$result['isRu'][0]->is_ru==1?('Заинтересованы?'):('Are you interested?')}}<br>{{$result['isRu'][0]->is_ru==1?('Свяжитесь с нами.'):('Call to us.')}}</div>
                </div>
                <div class="telephone animated fadeIn" style="animation-duration: 1s;"><a
                        href="tel: +7(701)205-10-77">{{$result['contact'][0]->tel_number}}</a></div>
                <div class="animated fadeIn" style="animation-duration: 1s;">
                    <div class="contacts_logo"><img src="{{asset('images/logo.svg')}}" alt="Katsu" width="150px"></div>
                </div>
                <div class="animated fadeIn" style="animation-duration: 1s;">
                    <div class="address">{{$result['contact'][0]->address}}<br><a
                            href="mailto:%20info@katsu.kz">{{$result['contact'][0]->email}}</a></div>
                </div>
                <div class="animated fadeIn" style="animation-duration: 1s;">
                    <div>
                        <button id="contactBtn" class="contacts_button hvr-sweep-to-bottom">{{$result['isRu'][0]->is_ru==1?('Связаться'):('Contact')}}</button>
                    </div>
                </div>
            </div>
            <div class="side-socials">
                <div class="vertical-text-socials">{{$result['isRu'][0]->is_ru==1?('ДИЗАЙН БЮРО'):('DESIGN BUREAU')}}</div>
                <hr class="short-line">
                <div class="short-social-icons">
                    <div class="icon"><a href="{{$result['contact'][0]->instagram_link}}" target="_blank"
                                         rel="noopener noreferrer"><img src="{{asset('icons/instagram.svg')}}"
                                                                        alt="Instagram logo"></a></div>
                    <div class="icon"><a href="{{$result['contact'][0]->whatsapp_link}}" target="_blank" rel="noopener noreferrer"><img
                                src="{{asset('icons/whatsapp.svg')}}" alt="Whatsapp logo"></a></div>
                </div>
            </div>
        </div>
    </div>

</div>
<div id="contactFormBackground"></div>
<div id="contactForm">
    <div style="display: flex; justify-content: space-between;">
        <h2>{{$result['isRu'][0]->is_ru==1?('Оставьте заявку'):('Leave a request')}}</h2>
        <a href="#close" id="closeModal"><img src="{{asset('icons/cross.svg')}}" width="18px" height="18px" alt="закрыть"/></a>
    </div>
    <p style="padding-bottom: 5px;padding-top: 5px;">{{$result['isRu'][0]->is_ru==1?('Мы перезвоним Вам в течении дня'):('We will call you back during the day.')}}</p>
    <br>
    <form action="{{route('sendEmail')}}" method="post">
        <label>
            <input placeholder="{{$result['isRu'][0]->is_ru==1?('Ваше имя'):('Your name')}}" type="text" name="name" required />
        </label>
        <label>
            <input placeholder="{{$result['isRu'][0]->is_ru==1?('Телефон номер'):('Telephone number')}}" type="number" name="number" required />
        </label>
        <label>
            <textarea placeholder="{{$result['isRu'][0]->is_ru==1?('Комментарий к заявке...'):('Leave comment on the application ...')}}" name="message"></textarea>
        </label>
        @csrf
        <button id="submit"   type="submit"> {{$result['isRu'][0]->is_ru==1?('Отправить'):('Send')}} </button>
    </form>
</div>
<!--<br>-->
@endsection
