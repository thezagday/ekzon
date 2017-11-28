<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Scroll Media</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="assets/favicon-32x32.png" sizes="32x32">
    <!-- Шрифты -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,700,900&amp;amp;subset=cyrillic" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&amp;amp;subset=cyrillic" rel="stylesheet"/>
    <link rel="stylesheet" href="{!! asset('font-awesome-4.7.0/css/font-awesome.min.css') !!}"/>

    {{--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">--}}

    <link rel="stylesheet" href="{{ URL::asset('css/admin/vendor.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/admin/elephant.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/admin/application.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/admin/inbox.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</head>

<body class="layout layout-header-fixed layout-sidebar-fixed">
<div class="layout-header">
    <div class="navbar navbar-default">
        <div class="navbar-header">
            <a class="navbar-brand navbar-brand-center" href="">
                <img class="navbar-brand-logo" src="{{ URL::asset('images/admin/logo-inverse.svg') }}" alt="Scroll-logo">
            </a>
            <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#sidenav">
                <span class="sr-only">Toggle navigation</span>
            <span class="bars">
              <span class="bar-line bar-line-1 out"></span>
              <span class="bar-line bar-line-2 out"></span>
              <span class="bar-line bar-line-3 out"></span>
            </span>
            <span class="bars bars-x">
              <span class="bar-line bar-line-4"></span>
              <span class="bar-line bar-line-5"></span>
            </span>
            </button>
        </div>
        <div class="navbar-toggleable">
            <nav id="navbar" class="navbar-collapse collapse">
                <button class="sidenav-toggler hidden-xs" title="Свернуть меню" aria-expanded="true" type="button">
                    <span class="sr-only">Toggle navigation</span>
                      <span class="bars">
                        <span class="bar-line bar-line-1 out"></span>
                        <span class="bar-line bar-line-2 out"></span>
                        <span class="bar-line bar-line-3 out"></span>
                        <span class="bar-line bar-line-4 in"></span>
                        <span class="bar-line bar-line-5 in"></span>
                        <span class="bar-line bar-line-6 in"></span>
                      </span>
                </button>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <p class="navbar-text text-center"> <a href="/" target="_blank">Просмотреть сайт</a> <b>|</b> <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form1').submit();">Выйти</a>
                        <form id="logout-form1" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        </p>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div class="layout-main">
    <div class="layout-sidebar">
        <div class="layout-sidebar-backdrop"></div>
        <div class="layout-sidebar-body">
            <div class="custom-scrollbar">
                <nav id="sidenav" class="sidenav-collapse collapse">
                    <ul class="sidenav">
                        <li class="sidenav-heading">Scroll Media</li><!-- или если не указана, то вставляем ФИО -->

                        <li class="sidenav-item has-subnav">
                            <a href="#" aria-haspopup="true" aria-expanded="false">
                                <span class="sidenav-icon icon icon-files-o"></span>
                                <span class="sidenav-label">Каталог</span>
                            </a>
                            <ul class="sidenav-subnav collapse" aria-expanded="false" style="height: 0px;">
                                @foreach($catalog as $item)
                                    <li class="sidenav-item">
                                        <a href="/edit_material_catalog/{!! $item->id !!}">
                                            <span class="sidenav-icon icon icon-plus-square"></span>
                                            <span class="sidenav-label">{!! strip_tags($item->title_ru) !!} ({!! strip_tags($item->title_en) !!})</span>
                                        </a>
                                        <ul class="sidenav-subnav collapse" aria-expanded="false" style="height: 0px;">
                                            @foreach($item->subCatalogs as $sub)
                                                <li class="sidenav-item">
                                                    <a href="{!! route('read-products',['id' => $sub->id] ) !!}">
                                                        <span class="sidenav-icon icon icon-minus-square"></span>
                                                        <span class="sidenav-label">{!! strip_tags($sub->title_ru) !!} ({!! strip_tags($sub->title_en) !!})</span>
                                                    </a>
                                                </li>
                                            @endforeach
                                                <li class="sidenav-item">
                                                    <a href="{!! route('children',['id' => $item->id]) !!}">
                                                        <span class="sidenav-icon icon icon-pencil-square"></span>
                                                        <span class="sidenav-label">Редактировать</span>
                                                    </a>
                                                </li>
                                        </ul>
                                    </li>
                                @endforeach
                                <li class="sidenav-item">
                                    <a href="/parents">
                                        <span class="sidenav-icon icon icon-pencil-square"></span>
                                        <span class="sidenav-label">Редактировать</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidenav-item">
                            <a href="/read-all-products">
                                <span class="sidenav-icon icon icon-signing"></span>
                                <span class="sidenav-label">Продукты на главной</span>
                            </a>
                        </li>

                        <li class="sidenav-item">
                            <a href="/read-slider">
                                <span class="sidenav-icon icon icon-sliders"></span>
                                <span class="sidenav-label">Слайдер</span>
                            </a>
                        </li>

                        <li class="sidenav-item">
                            <a href="/read">
                                <span class="sidenav-icon icon icon-cart-arrow-down"></span>
                                <span class="sidenav-label">Контакты</span>
                            </a>
                        </li>

                        <li class="sidenav-item">
                            <a href="/read_slider">
                                <span class="sidenav-icon icon icon-sliders"></span>
                                <span class="sidenav-label">Материалы</span>
                            </a>
                        </li>

                        <li class="sidenav-item">
                            <a href="/read-news">
                                <span class="sidenav-icon icon icon-newspaper-o"></span>
                                <span class="sidenav-label">Новости</span>
                            </a>
                        </li>


                        <li class="sidenav-item">
                            <a href="/read_certificates">
                                <span class="sidenav-icon icon icon-certificate"></span>
                                <span class="sidenav-label">О компании</span>
                            </a>
                        </li>

                        <li class="sidenav-item">
                            <a href="/read-brands">
                                <span class="sidenav-icon icon icon-cloud-download"></span>
                                <span class="sidenav-label">Бренды</span>
                            </a>
                        </li>

                        <li class="sidenav-item">
                            <a href="/read_document">
                                <span class="sidenav-icon icon icon-cloud-download"></span>
                                <span class="sidenav-label">Произвели</span>
                            </a>
                        </li>

                        <li class="sidenav-item">
                            <a href="/reset">
                                <span class="sidenav-icon icon icon-cogs"></span>
                                <span class="sidenav-label">Смена пароля</span>
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>

    @yield('content','default text')

    <div class="layout-footer">
        <div class="layout-footer-body">
            <small class="version">Версия 1.0</small>
            <small class="copyright">2017 &copy; <a href="http://scroll.by/">Scroll Media</a></small>
        </div>
    </div>
</div>

<script src="{{ URL::asset('js/admin/vendor.min.js') }}"></script>
<script src="{{ URL::asset('js/admin/elephant.min.js') }}"></script>
<script src="{{ URL::asset('js/admin/application.min.js') }}"></script>
<script src="{{ URL::asset('js/admin/demo.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
<script>
    $(document).on('ready',function(){
        $('.layout-content-body').fadeIn();
    });
</script>

<script type="text/javascript" src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
<script>
    $(document).ready(function(){
        CKEDITOR.replace( 'textarea-1' );
        CKEDITOR.replace( 'textarea-2' );
    });
</script>
</body>
</html>
