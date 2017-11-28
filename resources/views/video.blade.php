@extends('layouts.app')

@section('content')
    <!-- ***** Контент ***** -->
    <div class="main-slider-slick page__title page-pharma">
        <div class="main-slider-slick__item">
            <!-- <img class="main-slider__img" src="{!! asset('/images/cert/cert.jpg') !!}"/> -->
            <div class="main-slider__img" style='background-image: url("{!! asset('/images/cert/cert.jpg') !!}")'></div>
            <div class="main-slider__txt">
                <div class="main-slider__txt-title">{!! $_SESSION['lang'] == 'RU' ? 'Видеоматериалы' : 'Video material' !!}</div>
            </div>
            <!-- Крошки -->
            <!-- <div class="page__title-crumbs inn_padd">
                <div class="page__title-crumbs__inner site-width"><a class="page__title-crumbs__main" href="/">{!! $_SESSION['lang'] == 'RU' ? 'Главная' : 'Main' !!}<i class="fa fa-angle-double-right page__title-crumbs__fa" aria-hidden="true"></i>
                        <div class="page__title-crumbs__child" href="/video">{!! $_SESSION['lang'] == 'RU' ? 'Видеоматериалы' : 'Video material' !!}</div></a></div>
            </div> -->
            <div class="page__title-crumbs inn_padd">
                <div class="page__title-crumbs__inner site-width">
                  <a class="page__title-crumbs__main" href="/">{!! $_SESSION['lang'] == 'RU' ? 'Главная' : 'Main' !!}</a>
                    <i class="fa fa-angle-double-right page__title-crumbs__fa" aria-hidden="true"></i>
                    <div class="page__title-crumbs__child" href="/video">{!! $_SESSION['lang'] == 'RU' ? 'Видеоматериалы' : 'Video material' !!}</div>
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
                @foreach($video as $vid)
          <a class="certificates-item videogallery-item-a certificates-item__image" data-fancybox="gallery" href="{!! asset($vid->video) !!}">
            <div class="certificates-item__image-hover-bg"></div>
            <img class="video-certificates-item__zoom certificates-item__zoom" src="/images/video/video-gallery__play-button.png">
            <div class="certificates-item__image-certificate video-item__image" style="background-image: url('{!! asset($vid->img) !!}')"></div>
          </a>
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
