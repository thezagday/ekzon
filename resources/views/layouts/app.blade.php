<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="http://d0016639.atservers.net/template-images/favikon-exon.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Шрифты -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,700,900&amp;amp;subset=cyrillic" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&amp;amp;subset=cyrillic" rel="stylesheet"/>
    <link rel="stylesheet" href="{!! asset('font-awesome-4.7.0/css/font-awesome.min.css') !!}"/>
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
    <!-- <link rel="stylesheet" href="{!! asset('style/page-template.css') !!}"/> -->
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
            <div class="modal__content-title">{!! $_SESSION['lang'] == 'RU' ? 'Войти в личный кабинет' : 'Login to your account' !!}</div>
            <div class="modal__content-description">{!! $_SESSION['lang'] == 'RU' ? 'Для того, чтобы войти в личный кабинет, введите логин и пароль' : 'In order to enter your personal cabinet, enter your login and password' !!}</div>

            <form class="modal__content-form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="modal__content-form-input {{ $errors->has('email') ? ' has-error' : '' }}">
                    <input class="modal__content-form-input-user" required="required" type="email" name="email" placeholder="E-mail"/>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="modal__content-form-input{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input class="modal__content-form-input-pass" type="password"  required="required"  name="password" placeholder="{!! $_SESSION['lang'] == 'RU' ? 'Пароль' : 'Password' !!}"/>
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
                        <label class="label-loginRemember" for="loginRemember">{!! $_SESSION['lang'] == 'RU' ? 'Запомнить меня' : 'Remember me' !!}</label>
                    </div>
                    <div class="modal__content-col1-2 not-a-partner"><a class="modal__content-nat-a-partner" href="/register">{!! $_SESSION['lang'] == 'RU' ? 'Еще не наш партнер?' : 'Not our partner yet?' !!}</a></div>
                </div>

                <div class="modal__content-form-submit">
                    <input class="modal__content-form-submit-btn" type="submit" value="{!! $_SESSION['lang'] == 'RU' ? 'ВОЙТИ НА САЙТ' : 'LOG IN THE SITE' !!}"/>
                </div>

            </form>

            <div class="modal__content-close" data-dismiss="modal" aria-label="Close"><img class="modal__content-close" src="{!! asset('template-images/forms__cancel.png') !!}"/></div>
        </div>
    </div>
</div>


<!-- Модальное окно - Оставить заявку-->
<div class="modal modal-forms fade" id="online-order" tabindex="-1" role="dialog" aria-labelledby="assort-btn" aria-hidden="true">
    <div class="modal-box modal-dialog button button--gradient">
        <div class="modal__content">
            <div class="modal__content-title">{!! $_SESSION['lang'] == 'RU' ? 'Оставить заявку' : 'Submit your application' !!}</div>
            <div class="modal__content-description">{!! $_SESSION['lang'] == 'RU' ? 'Если у вас есть вопросы относительно деятельности нашего предприятия, либо по продукции, оставьте ваши контактные данные в форме ниже, и мы свяжемся с вами в ближайшее время.' : 'If you have questions regarding to our organization,or to our products,please leave your contact details in the form below and we will contact you as soon as possible' !!}</div>
            <form class="modal__content-form" method="post" action="/mail">
                {{csrf_field()}}
                <div class="modal__content-form-input">
                    <input class="modal__content-form-input-user" type="text" name="name" required="required"  placeholder="{!! $_SESSION['lang'] == 'RU' ? 'Имя пользователя*' : 'Name' !!}"/>
                </div>
                <div class="modal__content-form-input">
                    <input class="modal__content-form-input-mail" type="email" name="mail" required="required"  placeholder="{!! $_SESSION['lang'] == 'RU' ? 'Ваш e-mail*' : 'E-mail' !!}"/>
                </div>
                <div class="modal__content-form-input">
                    <input class="modal__content-form-input-phone" type="text" name="phone"  required="required"  placeholder="{!! $_SESSION['lang'] == 'RU' ? 'Номер телефона*' : 'Phone' !!}"/>
                </div>
                <input type="hidden" name="request_url" class="form-control" required="required">
                <div class="modal__content-form-submit">
                    <input class="modal__content-form-submit-btn" type="submit" value="{!! $_SESSION['lang'] == 'RU' ? 'ОТПРАВИТЬ' : 'SEND' !!}"/>
                </div>
                <div class="modal__content__note">{!! $_SESSION['lang'] == 'RU' ? 'Ваши персональные данные находятся в безопасности' : 'Your personal information is secure' !!}</div>
            </form>
            <?php
            if(isset($_SESSION['sended']) && ($_SESSION['sended'])) : ?>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.css">
            <script src="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.js"></script>
            <script>
                swal({
                    title: 'Успешно отправлено!',
                    timer: 3000,
                    type: 'success',
                    showCancelButton: false,
                    showConfirmButton: false
                });
            </script>
            <?php $_SESSION['sended'] = null; endif; ?>
            <div class="modal__content-close" data-dismiss="modal" aria-label="Close"><img class="modal__content-close" src="{!! asset('template-images/forms__cancel.png') !!}"/></div>
        </div>
    </div>
</div>
<!-- Модальное окно - Обратная связь-->
<div class="modal modal-forms fade" id="callBack" tabindex="-1" role="dialog" aria-labelledby="assort-btn" aria-hidden="true">
    <div class="modal-box modal-dialog button button--gradient">
        <div class="modal__content">
            <div class="modal__content-title">{!! $_SESSION['lang'] == 'RU' ? 'Обратная связь' : 'Feedback' !!}</div>
            <div class="modal__content-description">{!! $_SESSION['lang'] == 'RU' ? 'Если у вас есть вопросы относительно деятельности нашего предприятия, либо по продукции, оставьте ваши контактные данные в форме ниже, и мы свяжемся с вами в ближайшее время.' : 'If you have questions regarding to our organization,or to our products,please leave your contact details in the form below and we will contact you as soon as possible' !!}</div>
            <form class="modal__content-form" method="post" action="/feedback">
                {{csrf_field()}}
                <div class="modal__content-form-input">
                    <input class="modal__content-form-input-user" type="text" name="name" required="required"  placeholder="{!! $_SESSION['lang'] == 'RU' ? 'Имя пользователя*' : 'Name' !!}"/>
                </div>
                <div class="modal__content-form-input">
                    <input class="modal__content-form-input-mail" type="email" name="mail" required="required"  placeholder="{!! $_SESSION['lang'] == 'RU' ? 'Ваш e-mail*' : 'Your E-mail' !!}"/>
                </div>
                <div class="modal__content-form-input">
                    <!--<textarea class="modal__content-form-input-phone" name="text"> Сообщение</textarea>-->
                    <input class="modal__content-form-input-phone" type="text" name="text" required="required"  placeholder="{!! $_SESSION['lang'] == 'RU' ? 'Сообщение*' : 'Message' !!}"/>
                </div>
                <input type="hidden" name="request_url" class="form-control" required="required">
                <div class="modal__content-form-submit">
                    <input class="modal__content-form-submit-btn" type="submit" value="{!! $_SESSION['lang'] == 'RU' ? 'ОТПРАВИТЬ' : 'SEND' !!}"/>
                </div>
                <div class="modal__content__note">{!! $_SESSION['lang'] == 'RU' ? 'Ваши персональные данные находятся в безопасности' : 'Your personal information is secure' !!}</div>
            </form>
            <?php
            if(isset($_SESSION['sended']) && ($_SESSION['sended'])) : ?>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.css">
            <script src="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.js"></script>
            <script>
                swal({
                    title: 'Успешно отправлено!',
                    timer: 3000,
                    type: 'success',
                    showCancelButton: false,
                    showConfirmButton: false
                });
            </script>
            <?php $_SESSION['sended'] = null; endif; ?>
            <div class="modal__content-close" data-dismiss="modal" aria-label="Close"><img class="modal__content-close" src="template-images/forms__cancel.png"/></div>
        </div>
    </div>
</div>
<!-- Модальное окно - Принять участие в опросе-->
<div class="modal modal-forms fade" id="interviewModal" tabindex="-1" role="dialog" aria-labelledby="assort-btn" aria-hidden="true">
    <div class="modal-box modal-dialog button button--gradient">
        <div class="modal__content">
            <div class="modal__content-title">{!! $_SESSION['lang'] == 'RU' ? 'Опрос' : 'Interview' !!}</div>
            <div class="modal__content-description modal__interview-description">{!! $_SESSION['lang'] == 'RU' ? 'Примите участие в опросе, чтобы помочь нам совершенствоваться' : 'Take part in the survey to help us improve' !!}</div>
            <form class="modal__content-form" action="/interview" method="post">
                {{csrf_field()}}
                <div class="modal__content-description modal-interview__select-title">{!! $_SESSION['lang'] == 'RU' ? 'Являетесь ли вы специалистом в области здравоохранения?' : 'Are you a specialist in the field of health?' !!}</div>
                <div class="pharma-select__container">
                    <select name="spec">
                        <option selected="selected" disabled="disabled" value="Не выбрано">{!! $_SESSION['lang'] == 'RU' ? 'Сделайте выбор' : 'Make a choice' !!}</option>
                        <option value="Да">{!! $_SESSION['lang'] == 'RU' ? 'Да' : 'Yes' !!}</option>
                        <option value="Нет">{!! $_SESSION['lang'] == 'RU' ? 'Нет' : 'No' !!}</option>
                    </select>
                </div>
                <div class="modal__content-description modal-interview__select-title">{!! $_SESSION['lang'] == 'RU' ? 'Приобретаете ли вы продукцию ОАО "Экзон"?' : 'Do you buy the products of OJSC "Ekzon"?' !!} </div>
                <div class="pharma-select__container">
                    <select name="buy">
                        <option selected="selected" disabled="disabled" value="Не выбрано">{!! $_SESSION['lang'] == 'RU' ? 'Сделайте выбор' : 'Make a choice' !!}</option>
                        <option value="Да">{!! $_SESSION['lang'] == 'RU' ? 'Да' : 'Yes' !!}</option>
                        <option value="Нет">{!! $_SESSION['lang'] == 'RU' ? 'Нет' : 'No' !!}</option>
                    </select>
                </div>
                <div class="modal__content-description modal-interview__select-title">{!! $_SESSION['lang'] == 'RU' ? 'Откуда вы узнаете о нашей продукции?' : 'How do you know about our products?' !!} </div>
                <div class="pharma-select__container">
                    <select name="know">
                        <option selected="selected" disabled="disabled" value="Не выбрано">{!! $_SESSION['lang'] == 'RU' ? 'Сделайте выбор' : 'Make a choice' !!}</option>
                        <option value="От знакомых">{!! $_SESSION['lang'] == 'RU' ? 'От знакомых' : 'from my friends' !!}</option>
                        <option value="По назначению врача">{!! $_SESSION['lang'] == 'RU' ? 'По назначению врача' : 'from a doctor' !!}</option>
                        <option value="От работников аптек">{!! $_SESSION['lang'] == 'RU' ? 'От работников аптек' : ' from a pharmasist' !!}</option>
                        <option value="Видели рекламу">{!! $_SESSION['lang'] == 'RU' ? 'Видели рекламу' : 'due to advertising' !!}</option>
                        <option value="Читали в интернете">{!! $_SESSION['lang'] == 'RU' ? 'Читали в интернете' : 'from visiting this page' !!}</option>
                    </select>
                </div>
                <input type="hidden" name="request_url" class="form-control" required="required">
                <div class="modal__content-form-submit">
                    <input class="modal__content-form-submit-btn" type="submit" value="{!! $_SESSION['lang'] == 'RU' ? 'ОТПРАВИТЬ' : 'SEND' !!}"/>
                </div>
                <div class="modal__content__note">{!! $_SESSION['lang'] == 'RU' ? 'Ваши персональные данные находятся в безопасности' : 'Your personal information is secure' !!}</div>
            </form>
            <?php
            if(isset($_SESSION['sended']) && ($_SESSION['sended'])) : ?>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.css">
            <script src="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.js"></script>
            <script>
                swal({
                    title: 'Успешно отправлено!',
                    timer: 3000,
                    type: 'success',
                    showCancelButton: false,
                    showConfirmButton: false
                });
            </script>
            <?php $_SESSION['sended'] = null; endif; ?>
        </div>
        <div class="modal__content-close" data-dismiss="modal" aria-label="Close"><img class="modal__content-close" src="template-images/forms__cancel.png"/></div>
    </div>
</div>
<!-- Модальное окно - География продаж-->
<div class="modal modal-forms fade" id="mapModal" tabindex="-1" role="dialog" aria-labelledby="assort-btn" aria-hidden="true">
    <div class="modal-box modal-dialog button button--gradient">
        <div class="modal__content">
            <iframe class="mapModal" src="https://yandex.by/map-widget/v1/-/CBaUZQbBXB" width="1000" height="630" frameborder="0"></iframe>
        </div>
        <div class="modal__content-close" data-dismiss="modal" aria-label="Close"><img class="modal__content-close" src="template-images/forms__cancel.png"/></div>
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
            <a class="header-top__item header-top__item-pharma" href="/pharma">
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
                            <div class="header-bottom-logo__text-title">{!! $_SESSION['lang'] == 'RU' ? "ОАО <q>ЭКЗОН</q>" : "OJSC <q>EKZON</q>" !!}

                            </div>
                            <div class="header-bottom-logo__text-description1">{!! $_SESSION['lang'] == 'RU' ? 'Производство' : 'We care about' !!}</div>
                            <div class="header-bottom-logo__text-description2">{!! $_SESSION['lang'] == 'RU' ? 'лекарственных средств' : 'your health.' !!}</div>
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
                        <button class="button button--gradient online-order" data-target="#online-order" href="" data-toggle="modal">{!! $_SESSION['lang'] == 'RU' ? 'Онлайн заявка' : 'Online application' !!}</button>
                    </li>
                </ul>
            </div>
            <div class="header-bottom__right-top header-bottom__right-top-phone"> {!! $info->phone1 !!}</div>
            <div class="header-bottom__left-top">
                <form class="header-search" action="/search" >
                    <input type="text" name="search"/>
                    <div class="header-search__loop-i">
                    </div>
                    <!-- <i class="header-search__loop-i fa fa-search" aria-hidden="true"></i> -->
                </form>
            </div>
        </div>
        <!-- Мобильная шапка-->
        <div class="header-bottom__inner-mobile site-width">
            <!-- Колонка Лого-->
            <div class="header-bottom-mobile__col header-mobile-logo__footer-logo"><a class="header-bottom-logo" href="/"><img class="footer-logo__img" src="{!! asset('template-images/header-logo.png') !!}"/></a>
                <div class="footer-logo__text">
                    <div class="footer-logo__text-title">{!! $_SESSION['lang'] == 'RU' ? "ОАО <q>ЭКЗОН</q>" : "OJSC <q>EKZON</q>" !!}</div>
                    <div class="footer-logo__text-description1">{!! $_SESSION['lang'] == 'RU' ? 'Производство' : 'We care about' !!}</div>
                    <div class="footer-logo__text-description2">{!! $_SESSION['lang'] == 'RU' ? 'лекарственных средств' : 'your health.' !!}</div>
                </div>
            </div>
            <!-- Колонка Телефон-->
            <div class="header-bottom-mobile__col header-bottom-mobile__col2">
                <div class="header-bottom-mobile__phone">{!! $info->phone1 !!}</div>
                <button class="button button--gradient online-order" data-target="#online-order" href="" data-toggle="modal">{!! $_SESSION['lang'] == 'RU' ? 'Онлайн заявка' : 'Online application' !!}</button>
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
                            @foreach ($menu as $item)
                                <li><a class="mobile-menu__item-a" href="{!! $item->link !!}">{!! $_SESSION['lang'] == 'RU' ? $item->title_ru : $item->title_en !!}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** /Хэдер ***** -->

@yield('content','text')

    <!-- ***** Футер ***** -->

    <div class="footer inn_padd">
        <div class="footer__inner site-width">
        <!-- Футер верхний-->
            <div class="footer-top">
            <!-- первая колонка -->
                <div class="footer-top__col">
                    <div class="footer-logo"><img class="footer-logo__img" src="{!! asset('template-images/header-logo.png') !!}"/>
                        <div class="footer-logo__text">
                            <div class="footer-logo__text-title">{!! $_SESSION['lang'] == 'RU' ? "ОАО<q>ЭКЗОН</q>" : "OJSC <q>EKZON</q>" !!}
                            </div>
                        <div class="footer-logo__text-description1">{!! $_SESSION['lang'] == 'RU' ? 'Производство' : 'We care about' !!}</div>
                        <div class="footer-logo__text-description2">{!! $_SESSION['lang'] == 'RU' ? 'лекарственных средств' : ' your health.' !!}</div>
                    </div>
                </div>
                <div class="footer__phones">
                    <div class="footer__phones1">{!! $info->phone1 !!}</div>
                    <div class="footer__phones2">{!! $info->phone2 !!}</div>
                </div>
                <div class="footer__address">{!! $_SESSION['lang'] == 'RU' ? $info->address_ru : $info->address_en!!}</div>
                <div class="footer__mail">{!! $info->mail !!}</div>
            </div>
            <!-- Кнопка, появляющаяся в мобильной версии	-->
            <div class="footer-top__col footer-top__footer-feedback">
                <button class="button button--gradient footer-feedback footer-feedback_mobile" data-target="#callBack" href="" data-toggle="modal">{!! $_SESSION['lang'] == 'RU' ? 'Обратная связь' : 'Feedback' !!}</button>
            </div>
            <!-- вторая колонка -->
            <div class="footer-top__col">
                <div class="footer-top__col-title">{!! $_SESSION['lang'] == 'RU' ? 'Компания' : 'Company' !!}</div>
                <a class="footer-top__col-row" href="/company">{!! $_SESSION['lang'] == 'RU' ? 'Информация' : 'Information' !!}</a>
                <a class="footer-top__col-row" href="/certificates">{!! $_SESSION['lang'] == 'RU' ? 'Сертификаты качества' : 'Certificates' !!}</a>
                <button class="footer-top__col-row" data-target="#mapModal" data-toggle="modal">{!! $_SESSION['lang'] == 'RU' ? 'География продаж' : 'Geography of sales' !!}</button>
                <a class="footer-top__col-row" href="/video">{!! $_SESSION['lang'] == 'RU' ? 'Видеоматериалы' : 'Video' !!}</a>
            </div>
            <!-- третья колонка -->
            <div class="footer-top__col">
                <div class="footer-top__col-title">{!! $_SESSION['lang'] == 'RU' ? 'Продукция' : 'Products' !!}</div>
                @foreach ($parCatalog as $item)
                    <a class="footer-top__col-row" href="/catalog/{!! $item->subCatalogs->first()->id !!}">{!! $_SESSION['lang'] == 'RU' ? $item->title_ru : $item->title_en !!}</a>
                @endforeach
            </div>
            <!-- четвертая колонка -->
            <div class="footer-top__col">
                <div class="footer-top__col-title">{!! $_SESSION['lang'] == 'RU' ? 'Партнерам' : 'Partners' !!}</div>
                <a class="footer-top__col-row" href="/home">{!! $_SESSION['lang'] == 'RU' ? 'Информация по наличию' : 'Information on availability' !!}</a>
                <a class="footer-top__col-row" href="/home">{!! $_SESSION['lang'] == 'RU' ? 'Положение по скидкам' : 'Provision for discounts' !!}</a>
                <a class="footer-top__col-row" href="/home">{!! $_SESSION['lang'] == 'RU' ? 'Форма заказа' : 'Order form' !!}</a>
                <a class="footer-top__col-row" href="/home" target="_blank">{!! $_SESSION['lang'] == 'RU' ? 'Прайс лист' : 'Price' !!}</a>
            </div>
        </div>
        <!-- /Футер верхний-->
            <!-- Футер нижний-->
            <div class="footer-bottom">
                <div class="footer-bottom__inner">
                    <div class="footer-bottom__col">
                        <button class="button button--gradient footer-feedback" data-target="#callBack" href="" data-toggle="modal">{!! $_SESSION['lang'] == 'RU' ? 'Обратная связь' : 'Feedback' !!}</button>
                    </div>
                    <div class="footer-bottom__col">
                        <div class="footer-join-us">
                            <div class="footer-join-us__text">{!! $_SESSION['lang'] == 'RU' ? 'Присоединяйтесь:' : 'Share:' !!}</div>
                            <div class="footer-join-us__socials">
                                <a class='footer-join-us__socials-a' href="{!! $social[0]->vk !!}" target="_blank"><img class="footer-join-us__socials" src="{!! asset('template-images/socials-vk.png') !!}"/></a>
                                <a class='footer-join-us__socials-a' href="{!! $social[0]->inst !!}" target="_blank"><img class="footer-join-us__socials" src="{!! asset('template-images/socials-inst.png') !!}"/></a>
                                <a class='footer-join-us__socials-a' href="{!! $social[0]->fb !!}" target="_blank"><img class="footer-join-us__socials" src="{!! asset('template-images/socials-fb.png') !!}"/></a>
                                <a class='footer-join-us__socials-a' href="{!! $social[0]->ok !!}" target="_blank"><img class="footer-join-us__socials" src="{!! asset('template-images/socials-ok.png') !!}"/></a>
                            </div>
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
                <div class="footer-copyright__col footer-copyright__col1">{!! $_SESSION['lang'] == 'RU' ? $info->copyright_ru : $info->copyright_en !!}</div>
                <!-- /Копирайт-->
                <!-- Разработчик-->
                <div class="footer-copyright__col">
                    <div class="site-developer">
                        <div class="site-developer__text"><a target='_blank' href="http://scroll.by/">{!! $_SESSION['lang'] == 'RU' ? 'Разработка сайта' : 'Developers' !!}</a></div><img class="site-developer__img" src="{!! asset('template-images/site-developer.png') !!}"/>
                    </div>
                </div>
                <!-- /Разработчик-->
            </div>
            <!-- /Блок копирайт-->
        </div>
    </div>
    <!-- Прокрутка наверх -->
    <a class="scroll-to-top mobile-hide" href="#">
        <img class='scroll-to-top__img' src="{!! asset('template-images/scroll-to-top.svg') !!}" alt="">
    </a>
    <!-- /Прокрутка наверх -->
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
    <script>
        $(document).ready(function(){
            $('[name = request_url]').val(location.href);
        })
    </script>
    <!-- Подсветка активного пунка меню -->
    <script src="{{ asset('js/active-menu.js') }}"></script>
    <!-- Прокрутка к верху страницы -->
    <script type="text/javascript" src='{{ asset('js/scroll-to-top.js') }}'></script>
    <!-- /Скрипты-->
    <!-- Scripts Laravel -->
    {{--<script src="{{ asset('js/app.js') }}"></script>--}}
    <!-- ***** /Футер *****-->
</body>
</html>
