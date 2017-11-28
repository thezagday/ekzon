@extends('layouts.app')

@section('content')
    <!-- ***** Контент ***** -->
    <div class="main-slider-slick page__title">
        <div class="main-slider-slick__item"><img class="main-slider__img" src="{!! $pageMaterial->img !!}"/>
            <div class="main-slider__txt">
                <div class="main-slider__txt-title">{!! $_SESSION['lang'] == 'RU' ? $pageMaterial->title_ru : $pageMaterial->title_en !!}</div>
            </div>
            <!-- Крошки		-->
            <div class="page__title-crumbs inn_padd">
                <div class="page__title-crumbs__inner site-width"><a class="page__title-crumbs__main" href="/">{!! $_SESSION['lang'] == 'RU' ? 'Главная' : 'Main' !!}<i class="fa fa-angle-double-right page__title-crumbs__fa" aria-hidden="true"></i><a class="page__title-crumbs__child" href="/company">{!! $_SESSION['lang'] == 'RU' ? 'О компании' : 'About company' !!}</a></a></div>
            </div>
        </div>
    </div>
    <div class="about-company news-single">
        <!-- Текст о компании-->
        <div class="about-company__info inn_padd">
            <div class="about-company__inner site-width">
                <div class="about-company__info-text">
                    <p>
                        {!! $_SESSION['lang'] == 'RU' ? $material->text_ru : $material->text_en !!}
                    </p>
                </div>
            </div><img class="about-company__info-img" src="{!! $material->img !!}"/>
        </div>
        <!-- В 2006 году мы произвели-->
        <div class="we-produced">
            <div class="we-produced__title">{!! $_SESSION['lang'] == 'RU' ? 'В 2006 году мы произвели:':'In 2006 we produced:' !!}</div>
            <div class="we-produced__body-bg">
                <div class="we-produced__body site-width">
                    @foreach ($produced as $item)
                    <div class="we-produced__item">
                        <div class="we-produced__item-img"><img class="we-produced__item-img-img" src="{!! $item->img !!}"/></div>
                        <div class="we-produced__item-quantity">{!! $item->number !!}</div>
                        <div class="we-produced__item-title">{!! $_SESSION['lang'] == 'RU' ? $item->title_ru : $item->title_en !!}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Наши партнеры - карусель-->
        <div class="our-partners">
            <div class="our-partners__title we-produced__title">{!! $_SESSION['lang'] == 'RU' ? 'Наши партнеры' : 'Our partners' !!}</div>
            <div class="our-partners__content site-width">
                <div class="slick-slider__carousel slider__about-company">
                    @foreach($brands as $brand)
                        <div class="slick-slider__carousel-item"><img class="slick-slider__carousel-item" src="{!! $brand->img !!}"/></div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Примите участие в опросе-->
        <div class="page-main-interview inn_padd">
            <div class="main-interview__inner site-width">
                <div class="page-main-interview__text1">
                    <div class="page-main-interview__txt">{!! $_SESSION['lang'] == 'RU' ? 'Примите участие в опросе,' : 'Take part in the survey,'!!} </div>
                    <div class="page-main-interview__txt">{!! $_SESSION['lang'] == 'RU' ? 'чтобы помочь нам совершенствоваться': 'to help us improve'!!}</div>
                </div>
                <div class="page-main-interview__text2">
                    <div class="page-main-interview__txt">Примите участиве в опросе, чтобы помочь нам совершенстоваться</div>
                </div>
                <div class="page-main-interview__btn"> <a class="button-link btn-page-main-all-news btn-page-main-all-news__list" href="#">{!! $_SESSION['lang'] == 'RU' ? 'Принять участие':'Participate' !!} </a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** /Контент *****-->
@stop