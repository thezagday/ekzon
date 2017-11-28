@extends('layouts.app')

@section('content')
    <!-- ***** Контент ***** -->
    <div class="main-slider-slick page__title">
        <div class="main-slider-slick__item">
            <!-- <img class="main-slider__img" src="template-images/pharma__title.png"/> -->
            <div class="main-slider__img" style='background-image: url("template-images/pharma__title.png")'></div>
            <div class="main-slider__txt">
                <div class="main-slider__txt-title">{!! $_SESSION['lang'] == 'RU' ? 'Поиск на сайте' : 'Search' !!}</div>
            </div>
            <!-- Крошки -->
            <div class="page__title-crumbs inn_padd">
                <div class="page__title-crumbs__inner site-width"><a class="page__title-crumbs__main" href="/">{!! $_SESSION['lang'] == 'RU' ? 'Главная' : 'Main'!!}</a><i class="fa fa-angle-double-right page__title-crumbs__fa" aria-hidden="true"></i>
                    <div class="page__title-crumbs__child">{!! $_SESSION['lang'] == 'RU' ? 'Результаты поиска' : 'Search result'!!}</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Главные контакты-->
    <div class="pharma reg-partner search-result inn_padd">
        <div class="pharma__inner site-width">
            <div class="search-result__title">{!! $_SESSION['lang'] == 'RU' ? 'Искать на сайте' : 'Search'!!}</div>
            <form class="search-result__form" method="/search">
                <input class="search-result__form-input" type="text" name="search" placeholder="{!! $_SESSION['lang'] == 'RU' ? 'Искать на сайте' : 'Search'!!}"/>
                <input class="search-result__submit" type="submit" value="{!! $_SESSION['lang'] == 'RU' ? 'Искать' : 'Search'!!}"/>
            </form>
            <div class="search-result__comment">{!! $_SESSION['lang'] == 'RU' ? 'По запросу' : 'On request' !!}
                <div class="search-result__comment-query">"<?php echo $_GET['search'] ?>"</div> {!! $_SESSION['lang'] == 'RU' ? 'найдено' : 'found'!!}
                <div class="search-result__comment-quantity">{!! $count !!} </div>{!! $_SESSION['lang'] == 'RU' ? ' совпадений' : ' coincidences'!!}
            </div>
            <ol class="search-result__result-items">
                @foreach ($search as $item)
                <li class="search-result__result-item"><a class="search-result__result-item-title" href="/products/{!! $item->id !!}">{!! $_SESSION['lang'] == 'RU' ? $item->title_ru : $item->title_en !!}</a>
                    <div class="search-result__result-item-text">{!! $_SESSION['lang'] == 'RU' ? $item->short_desc_ru : $item->short_desc_en !!}</div>
                </li>
                @endforeach
            </ol>
        </div>
    </div>
    <div class="footer-separator"></div>
    <!-- серый футер-->
    <script src="js/footer-grey.js"></script>
    <!-- Корректировка Тайтла "Регистрация партнера"-->
    <script src="js/reg-partner__change-title.js"></script>
    <!-- Вызов модального окна-->
    <script src="js/accept-modal.js"></script>
    <!-- ***** /Контент *****-->
@stop
