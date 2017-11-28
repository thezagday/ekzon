@extends('layouts.app')

@section('content')
    <!-- ***** Контент ***** -->
    <div class="main-slider-slick page__title">
        <div class="main-slider-slick__item">
            <!-- <img class="main-slider__img" src="{!! asset('/images/cert/cert.jpg') !!}"/> -->
            <div class="main-slider__img" style='background-image: url("{!! asset('/images/cert/cert.jpg') !!}")'></div>
            <div class="main-slider__txt">
                <div class="main-slider__txt-title">{!! $_SESSION['lang'] == 'RU' ? 'Сертификаты качества' : 'Certificates' !!}</div>
            </div>
            <!-- Крошки -->
            <!-- <div class="page__title-crumbs inn_padd">
                <div class="page__title-crumbs__inner site-width"><a class="page__title-crumbs__main" href="/">{!! $_SESSION['lang'] == 'RU' ? 'Главная' : 'Main' !!}<i class="fa fa-angle-double-right page__title-crumbs__fa" aria-hidden="true"></i>
                        <div class="page__title-crumbs__child" href="/certificates">{!! $_SESSION['lang'] == 'RU' ? 'Сертификаты качества' : 'Certificates' !!}</div></a></div>
            </div> -->
            <div class="page__title-crumbs inn_padd">
                <div class="page__title-crumbs__inner site-width">
                  <a class="page__title-crumbs__main" href="/">{!! $_SESSION['lang'] == 'RU' ? 'Главная' : 'Main' !!}</a>
                    <i class="fa fa-angle-double-right page__title-crumbs__fa" aria-hidden="true"></i>
                    <div class="page__title-crumbs__child" href="/certificates">{!! $_SESSION['lang'] == 'RU' ? 'Сертификаты качества' : 'Certificates' !!}</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Главные контакты-->
    <link href="{!! asset('fancybox/jquery.fancybox.css') !!}" rel="stylesheet"/>
    <script src="{!! asset('fancybox/jquery.fancybox.js') !!}"></script>
    <div class="pharma certificates inn_padd">
        <div class="pharma__inner site-width">
            <div class="certificates-items">
                @foreach($certificates as $cert)
                    <div class="certificates-item">
                        <a class="certificates-item__image" data-fancybox="gallery" href="{!! $_SESSION['lang'] == 'RU' ? asset($cert->img) : asset($cert->img_en) !!}">
                            <div class="certificates-item__image-hover-bg"></div>
                            <img class="certificates-item__zoom" src="{!! asset('/images/cert/certificates__zoom.png') !!}"/>
                            <img class="certificates-item__image-certificate" src="{!! $_SESSION['lang'] == 'RU' ? asset($cert->img) : asset($cert->img_en) !!}"/>
                        </a>
                        <div class="certificates-item__title">{!! $_SESSION['lang'] == 'RU' ? $cert->title_ru : $cert->title_en !!}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="footer-separator"></div>
    <!-- серый футер-->
    <script src="{!! asset('js/footer-grey.js') !!}"></script>
    <!-- Корректировка Тайтла "Регистрация партнера"-->
    <script src="{!! asset('js/reg-partner__change-title.js')!!}"></script>
    <!-- Вызов модального окна-->
    <script src="{!! asset('js/accept-modal.js') !!}"></script>
    <!-- ***** /Контент *****-->
@stop
