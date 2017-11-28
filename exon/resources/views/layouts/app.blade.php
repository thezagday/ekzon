<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Шрифты -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,700,900&amp;amp;subset=cyrillic" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&amp;amp;subset=cyrillic" rel="stylesheet"/>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css"/>
    <!-- Стили-->
    <!-- Нормалайзер -->
    <link rel="stylesheet" href="{!! asset('style/normalize.css') !!}"/>
    <!-- Bootstrap 		-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"/>
    <!-- /Bootstrap -->
    <!-- Slick Slider-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <!-- Стиль сайта-->
    <link rel="stylesheet" href="{!! asset('style/style.css') !!}"/>
    <!-- Стиль шаблона(header - footer)-->
    <link rel="stylesheet" href="{!! asset('style/page-template.css') !!}"/>
    <!-- /Стили-->
    <!-- jQuery-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<!-- Тело сайта -->
<body>
<!-- Модальные окна-->
<!-- Модальное окно - Вход для клиентов-->
<!-- Модальные окна-->
<!-- Модальное окно - Вход для клиентов-->

<div class="modal modal-forms fade" id="clientsLogin" tabindex="-1" role="dialog" aria-labelledby="assort-btn" aria-hidden="true">
    <div class="modal-box modal-dialog button button--gradient">
        <div class="modal__content">
            <div class="modal__content-title">Войти в личный кабинет</div>
            <div class="modal__content-description">Для того, чтобы войти в личный кабинет, введите логин и пароль</div>

            <form class="modal__content-form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="modal__content-form-input {{ $errors->has('email') ? ' has-error' : '' }}">
                    <input class="modal__content-form-input-user" type="email" name="email" placeholder="E-mail"/>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="modal__content-form-input{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input class="modal__content-form-input-pass" type="password" name="password" placeholder="Пароль"/>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="modal__content-cols">
                    <div class="modal__content-col1-2 loginRemember">
                        <input class="input-loginRemember" id="loginRemember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}/>
                        <div class="label-loginRemember__checkbox"></div>
                        <label class="label-loginRemember" for="loginRemember">Запомнить меня</label>
                    </div>
                    <div class="modal__content-col1-2 not-a-partner"><a class="modal__content-nat-a-partner" href="#">Еще не наш партнер?</a></div>
                </div>

                <div class="modal__content-form-submit">
                    <input class="modal__content-form-submit-btn" type="submit" value="ВОЙТИ НА САЙТ"/>
                </div>

            </form>

            <div class="modal__content-close" data-dismiss="modal" aria-label="Close"><img class="modal__content-close" src="template-images/forms__cancel.png"/></div>
        </div>
    </div>
</div>


<!-- Модальное окно - Оставить заявку-->
<div class="modal modal-forms fade" id="online-order" tabindex="-1" role="dialog" aria-labelledby="assort-btn" aria-hidden="true">
    <div class="modal-box modal-dialog button button--gradient">
        <div class="modal__content">
            <div class="modal__content-title">Оставить заявку</div>
            <div class="modal__content-description">Для того, чтобы оставить заявку, вам требуется войти на сайт под своими учетными данными. <br/>Имя и пароль выдаются нашей компанией при регистрации партнера. </div>
            <form class="modal__content-form">
                <div class="modal__content-form-input">
                    <input class="modal__content-form-input-user" type="text" name="loginName" placeholder="Имя пользователя*"/>
                </div>
                <div class="modal__content-form-input">
                    <input class="modal__content-form-input-pass" type="text" name="loginPass" placeholder="Пароль*"/>
                </div>
                <div class="modal__content-cols">
                    <div class="modal__content-col1-2 loginRemember">
                        <input class="input-loginRemember" id="loginRememberOrder" type="checkbox"/>
                        <div class="label-loginRemember__checkbox"></div>
                        <label class="label-loginRemember" for="loginRememberOrder">Запомнить меня</label>
                    </div>
                    <div class="modal__content-col1-2 not-a-partner"><a class="modal__content-nat-a-partner" href="#">Еще не наш партнер?</a></div>
                </div>
                <div class="modal__content-form-submit">
                    <input class="modal__content-form-submit-btn" type="submit" value="ВОЙТИ НА САЙТ"/>
                </div>
            </form>
            <div class="modal__content-close" data-dismiss="modal" aria-label="Close"><img class="modal__content-close" src="template-images/forms__cancel.png"/></div>
        </div>
    </div>
</div>
<!-- Модальное окно - Обратная связь-->
<div class="modal modal-forms fade" id="callBack" tabindex="-1" role="dialog" aria-labelledby="assort-btn" aria-hidden="true">
    <div class="modal-box modal-dialog button button--gradient">
        <div class="modal__content">
            <div class="modal__content-title">Обратная связь</div>
            <div class="modal__content-description">Если у вас есть вопросы относительно деятельности нашего предприятия, либо по продукции, оставьте ваши контактные данные в форме ниже, и мы свяжемся с вами в ближайшее время.</div>
            <form class="modal__content-form">
                <div class="modal__content-form-input">
                    <input class="modal__content-form-input-user" type="text" name="loginName" placeholder="Имя пользователя*"/>
                </div>
                <div class="modal__content-form-input">
                    <input class="modal__content-form-input-mail" type="text" name="loginPass" placeholder="Ваш e-mail*"/>
                </div>
                <div class="modal__content-form-input">
                    <input class="modal__content-form-input-phone" type="text" name="loginPass" placeholder="Номер телефона*"/>
                </div>
                <div class="modal__content-form-submit">
                    <input class="modal__content-form-submit-btn" type="submit" value="ОТПРАВИТЬ"/>
                </div>
                <div class="modal__content__note">Ваши персональные данные находятся в безопасности</div>
            </form>
            <div class="modal__content-close" data-dismiss="modal" aria-label="Close"><img class="modal__content-close" src="template-images/forms__cancel.png"/></div>
        </div>
    </div>
</div>
<!-- ***** Хэдер ***** -->
<div class="header">
    <!-- Header-top-->
    <div class="header-top inn_padd">
        <div class="header-top__inner site-width">
            <div class="header-top__item header-adress">
                <img class="header-top__icon" src="{!! asset('template-images/header-top-point.png') !!}"/>
                <div class="header-top__text">{!! $_SESSION['lang']== "RU"? $info->address_ru : $info->address_en !!}</div>
            </div>
            <a class="header-top__item header-top__item-pharma" href="page-pharma.html">
                <img class="header-top__icon" src="{!! asset('template-images/header-top-nadzor.png') !!}"/>
                <div class="header-top__text">{!! $_SESSION['lang'] == 'RU' ? 'Фармаконадзор' : 'Pharmacovigilance' !!}</div>
            </a>

        @if (Route::has('login'))
            @if (Auth::check() && !Auth::user()->admin)
                <!-- Вход для клиентов - Вход совершен (активируется классом .active)-->
                <div class="header-top__item header-top-login header-top-logged active">
                    <img class="header-top__icon" src="{!! asset('template-images/header-top-client.png') !!}"/>
                    <div class="header-top__text">{!! Auth::user()->name !!}</div>
                    <!-- Вход для клиентов - Меню-->
                    <i class="fa fa-angle-up header-top-login__arrow" aria-hidden="true"></i>
                    <i class="fa fa-angle-down header-top-login__arrow" aria-hidden="true"></i>
                    <div class="header-top-logged__menu">
                        <a class="header-top-logged__menu-btn header-top-logged__menu-lk" href="{{ url('/home') }}">{!! $_SESSION['lang'] == 'RU' ? 'Личный кабинет' : 'Personal area' !!}</a>
                        <a class="header-top-logged__menu-btn header-top-logged__menu-logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form1').submit();">{!! $_SESSION['lang'] == 'RU' ? 'Выйти' : 'Exit' !!}</a>
                        <form id="logout-form1" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            @elseif (Auth::check() && Auth::user()->admin)
                <!-- Вход для клиентов - Вход совершен (активируется классом .active)-->
                <div class="header-top__item header-top-login header-top-logged active">
                    <img class="header-top__icon" src="{!! asset('template-images/header-top-client.png') !!}"/>
                    <div class="header-top__text">Admin</div>
                    <!-- Вход для клиентов - Меню-->
                    <i class="fa fa-angle-up header-top-login__arrow" aria-hidden="true"></i>
                    <i class="fa fa-angle-down header-top-login__arrow" aria-hidden="true"></i>
                    <div class="header-top-logged__menu">
                        <a class="header-top-logged__menu-btn header-top-logged__menu-lk" href="{{ url('/home') }}">{!! $_SESSION['lang'] == 'RU' ? 'Личный кабинет' : 'Personal area' !!}</a>
                        <a class="header-top-logged__menu-btn header-top-logged__menu-logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form2').submit();">{!! $_SESSION['lang'] == 'RU' ? 'Выйти' : 'Exit' !!}</a>
                        <form id="logout-form2" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            @else
                <!-- Вход для клиентов - Вход не совершен (активируется классом .active)-->
                <div class="header-top__item header-top-login active" data-target="#clientsLogin" href="" data-toggle="modal">
                    <img class="header-top__icon" src="{!! asset('template-images/header-top-login.png') !!}"/>
                    <div class="header-top__text">{!! $_SESSION['lang'] == 'RU' ? 'Вход для клиентов' : 'Login' !!}</div>
                </div>
            @endif
        @endif
            {{--<div class="header-top__item header-top-login active" data-target="" href="" data-toggle="modal">--}}
                {{--<img class="header-top__icon" src="{!! asset('template-images/header-top-login.png') !!}"/>--}}
                {{--@if (Route::has('login'))--}}
                        {{--@if (Auth::check() && !Auth::user()->admin)--}}
                            {{--<a href="{{ url('/home') }}">--}}
                                {{--<div class="header-top__text"></div>--}}
                            {{--</a>--}}
                            {{--<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form1').submit();">--}}
                                {{--<div class="header-top__text"></div>--}}
                            {{--</a>--}}
                            {{--<form id="logout-form1" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                {{--{{ csrf_field() }}--}}
                            {{--</form>--}}
                        {{--@elseif (Auth::check() && Auth::user()->admin)--}}
                            {{--<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form2').submit();">--}}
                                {{--<div class="header-top__text">{!! $_SESSION['lang'] == 'RU' ? 'Выйти' : 'Exit' !!}</div>--}}
                            {{--</a>--}}
                            {{--<form id="logout-form2" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                {{--{{ csrf_field() }}--}}
                            {{--</form>--}}
                        {{--@else--}}
                            {{--<a href="{{ route('login') }}"><div class="header-top__text">{!! $_SESSION['lang'] == 'RU' ? 'Вход для клиентов' : 'Login' !!}</div></a>--}}
                        {{--@endif--}}
                {{--@endif--}}
            {{--</div>--}}
        </div>
        <!-- Переключатель языков-->
        <div class="header-top__item-abs ru-eng">
            <a class="ru-eng__eng active" href="/lang">
                <div class="ru-eng__text">{!! $_SESSION['lang'] == 'RU' ? 'ENG' : 'RU' !!}</div>
                <img class="ru-eng__img" src="{!! $_SESSION['lang'] == 'RU' ?  asset('template-images/header-top-eng.png') : asset('template-images/header-top-ru.png')!!}"/>
            </a>
        </div>
    </div>
    <!-- Header-bottom-->
    <div class="header-bottom inn_padd">
        <div class="header-bottom__inner site-width">
            <!-- Левое крыло-->
            <div class="header-bottom__left">
                <ul class="menu header-menu">
                    @foreach ($menu as $item)
                        @if ($item->position == 0)
                        <li><a class="button-link header-menu__button" href="{!! $item->link !!}">{!! $_SESSION['lang'] == 'RU' ? $item->title_ru : $item->title_en !!}</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <!-- Центр-->
            <div class="header-bottom__center"><a class="header-bottom-logo" href="/"><img class="header-bottom-logo__img" src="{!! asset('template-images/header-logo.png') !!}"/>
                    <div class="header-bottom-logo__text">
                        <div class="header-bottom-logo__text-text">
                            <div class="header-bottom-logo__text-title">{!! $_SESSION['lang'] == 'RU' ? "ОАО <q>ЭКЗОН</q>" : "JSC <q>EXON</q>" !!}

                            </div>
                            <div class="header-bottom-logo__text-description1">{!! $_SESSION['lang'] == 'RU' ? 'Производство натуральных ' : 'Production of natural' !!}</div>
                            <div class="header-bottom-logo__text-description2">{!! $_SESSION['lang'] == 'RU' ? 'лекарственных средств' : 'medicines' !!}</div>
                        </div>
                    </div></a></div>
            <!-- Правое крыло-->
            <div class="header-bottom__right">
                <ul class="menu header-menu">
                    @foreach ($menu as $item)
                        @if ($item->position == 1)
                        <li><a class="button-link header-menu__button" href="{!! $item->link !!}">{!! $_SESSION['lang'] == 'RU' ? $item->title_ru : $item->title_en !!}</a></li>
                        @endif
                    @endforeach
                    <li>
                        <button class="button button--gradient online-order" data-target="#modal-box" href="" data-toggle="modal">{!! $_SESSION['lang'] == 'RU' ? 'Онлайн заявка' : 'Online application' !!}</button>
                    </li>
                </ul>
            </div>
            <div class="header-bottom__right-top header-bottom__right-top-phone"> {!! $info->phone1 !!}</div>
            <div class="header-bottom__left-top">
                <form class="header-search">
                    <input type="text" name="search"/>
                </form>
            </div>
        </div>
        <!-- Мобильная шапка-->
        <div class="header-bottom__inner-mobile site-width">
            <!-- Колонка Лого-->
            <div class="header-bottom-mobile__col header-mobile-logo__footer-logo"><img class="footer-logo__img" src="{!! asset('template-images/header-logo.png') !!}"/>
                <div class="footer-logo__text">
                    <div class="footer-logo__text-title">{!! $_SESSION['lang'] == 'RU' ? "ОАО <q>ЭКЗОН</q>" : "JSC <q>EXON</q>" !!}</div>
                    <div class="footer-logo__text-description1">{!! $_SESSION['lang'] == 'RU' ? 'Производство натуральных ' : 'Production of natural' !!}</div>
                    <div class="footer-logo__text-description2">{!! $_SESSION['lang'] == 'RU' ? 'лекарственных средств' : 'medicines' !!}</div>
                </div>
            </div>
            <!-- Колонка Телефон-->
            <div class="header-bottom-mobile__col header-bottom-mobile__col2">
                <div class="header-bottom-mobile__phone"><span>8 01644</span><strong>&nbsp3-24-09</strong></div>
                <button class="button button--gradient online-order" data-target="#modal-box" href="" data-toggle="modal">{!! $_SESSION['lang'] == 'RU' ? 'Онлайн заявка' : 'Online application' !!}</button>
            </div>
            <!-- Колонка Меню-->
            <div class="header-bottom-mobile__col header-bottom-mobile__col3 header-mobile-menu">
                <div class="menu-mobile theme-exon">
                    <!-- Кнопка -->
                    <input type="checkbox" name="mobile-menu" id="mobile-menu_stroke-cross" style="display:none;"/>
                    <div class="mobile-menu">
                        <label class="mobile-menu__strokes" for="mobile-menu_stroke-cross">
                            <div class="mobile-menu__stroke mobile-menu__stroke-cross1"></div>
                            <div class="mobile-menu__stroke mobile-menu__stroke-cross2"></div>
                            <div class="mobile-menu__stroke mobile-menu__stroke-cross3"></div>
                        </label>
                    </div>
                    <!-- Меню -->
                    <div class="mobile-menu__menu">
                        <ul class="mobile-menu__item" id="mobile-menu">
                            <!-- Ссылка меню-->
                            <li><a class="mobile-menu__item-a" href="#">link1</a></li>
                            <li><a class="mobile-menu__item-a" href="#">link2</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** /Хэдер ***** -->

@yield('content','default text')

    <!-- ***** Футер ***** -->
    <div class="footer inn_padd">
        <div class="footer__inner site-width">
            <!-- Футер верхний-->
            <div class="footer-top">
                <!-- первая колонка -->
                <div class="footer-top__col">
                    <div class="footer-logo"><img class="footer-logo__img" src="{!! asset('template-images/header-logo.png') !!}"/>
                        <div class="footer-logo__text">
                            <div class="footer-logo__text-title">{!! $_SESSION['lang'] == 'RU' ? "ОАО <q>ЭКЗОН</q>" : "JSC <q>EXON</q>" !!}</div>
                            <div class="footer-logo__text-description1">{!! $_SESSION['lang'] == 'RU' ? 'Производство натуральных ' : 'Production of natural' !!}</div>
                            <div class="footer-logo__text-description2">{!! $_SESSION['lang'] == 'RU' ? 'лекарственных средств' : 'medicines' !!}</div>
                        </div>
                    </div>
                    <div class="footer__phones">
                        <div class="footer__phones1">{!! $info->phone1 !!}</div>
                        <div class="footer__phones2">{!! $info->phone2 !!}</div>
                    </div>
                    <div class="footer__address">{!! $_SESSION['lang']== "RU"? $info->address_ru : $info->address_en !!}</div>
                    <div class="footer__mail">{!! $info->mail !!}</div>
                </div>
                <!-- Кнопка, появляющаяся в мобильной версии	-->
                <div class="footer-top__col footer-top__footer-feedback">
                    <button class="button button--gradient footer-feedback footer-feedback_mobile" data-target="#modal-box" href="" data-toggle="modal">Онлайн заявка</button>
                </div>
                <!-- вторая колонка -->
                <div class="footer-top__col">
                    <div class="footer-top__col-title">Компания</div>
                    <div class="footer-top__col-row">Информация</div>
                    <div class="footer-top__col-row">История</div>
                    <div class="footer-top__col-row">Сертификаты качества</div>
                    <div class="footer-top__col-row">География продаж</div>
                </div>
                <!-- третья колонка -->
                <div class="footer-top__col">
                    <div class="footer-top__col-title">Продукция</div>
                    <div class="footer-top__col-row">Лекарственные средства</div>
                    <div class="footer-top__col-row">Биологически активные добавки</div>
                    <div class="footer-top__col-row">Пищевые продукты</div>
                </div>
                <!-- четвертая колонка -->
                <div class="footer-top__col">
                    <div class="footer-top__col-title">Партнерам</div>
                    <div class="footer-top__col-row">Наши партнеры</div>
                    <div class="footer-top__col-row">Дистрибьютерам</div>
                    <div class="footer-top__col-row">Информация по наличию</div>
                    <div class="footer-top__col-row">Положение по скидкам</div>
                    <div class="footer-top__col-row">Форма заказа</div>
                    <div class="footer-top__col-row">Прайс лист</div>
                </div>
            </div>
            <!-- /Футер верхний-->
            <!-- Футер нижний-->
            <div class="footer-bottom">
                <div class="footer-bottom__inner">
                    <div class="footer-bottom__col">
                        <button class="button button--gradient footer-feedback" data-target="#modal-box" href="" data-toggle="modal">Обратная связь</button>
                    </div>
                    <div class="footer-bottom__col">
                        <div class="footer-join-us">
                            <div class="footer-join-us__text">Присоединяйтесь:</div>
                            <div class="footer-join-us__socials"><img class="footer-join-us__socials" src="{!! asset('template-images/socials-vk.png') !!}"/><img class="footer-join-us__socials" src="{!! asset('template-images/socials-inst.png') !!}"/><img class="footer-join-us__socials" src="{!! asset('template-images/socials-fb.png') !!}"/><img class="footer-join-us__socials" src="{!! asset('template-images/socials-ok.png') !!}"/></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Футер нижний-->
            <!-- Разделитель-->
            <div class="separator"></div>
            <!-- Блок копирайт-->
            <div class="footer-copyright">
                <!-- Копирайт-->
                <div class="footer-copyright__col footer-copyright__col1">&copy; 2017 ОАО
                    <q>ЭКЗОН</q> Все права защищены
                </div>
                <!-- /Копирайт-->
                <!-- Разработчик-->
                <div class="footer-copyright__col">
                    <div class="site-developer">
                        <div class="site-developer__text">Разработка сайта</div><img class="site-developer__img" src="{!! asset('template-images/site-developer.png') !!}"/>
                    </div>
                </div>
                <!-- /Разработчик-->
            </div>
            <!-- /Блок копирайт-->
        </div>
    </div>
    <!-- Библиотеки скриптов -->
    <!-- Slick Slider -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <!-- Slick Slider - init -->
    <!-- Главный слаййдер-->
    <script type="text/javascript" src="{!! asset('js/main-slider-slick.js') !!}"></script>
    <!-- Слайдер в табах-->
    <script type="text/javascript" src="{!! asset('js/slider-slick-mult.js') !!}"></script>
    <!-- Слайдер "Наши партнеры" на странице "О компании"-->
    <script type="text/javascript" src="{!! asset('js/slider-slick__carousel.js') !!}"></script>
    <!-- Bootstrap			-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <!-- /Bootstrap-->
    <!-- /Библиотеки скриптов-->
    <!-- Скрипты-->
    <!-- На главной меняем значение кнопки "Подробнее"(bootstrap)-->
    <script src="{!! asset('js/read-more-bootstrap.js') !!}"></script>
    <!-- Скрипт 2 -->
    <script src=""></script>
    <!-- Скрипт 3 -->
    <script src=""></script>
    <!-- /Скрипты-->
    <!-- Scripts Laravel -->
    {{--<script src="{{ asset('js/app.js') }}"></script>--}}
    <!-- ***** /Футер *****-->
</body>
</html>
