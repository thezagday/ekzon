@extends('layouts.app')

@section('content')
    <!-- ***** Контент ***** -->
    <div class="main-slider-slick page__title">
        <div class="main-slider-slick__item"><img class="main-slider__img" src="{!! asset($pageMaterial->img) !!}"/>
            <div class="main-slider__txt">
                <div class="main-slider__txt-title">{!! $_SESSION['lang'] == 'RU' ? 'Новости' : 'News' !!}</div>
            </div>
            <!-- Крошки -->
            <div class="page__title-crumbs inn_padd">
                <div class="page__title-crumbs__inner site-width"><a class="page__title-crumbs__main" href="/">{!! $_SESSION['lang'] == 'RU' ? 'Главная' : 'Main' !!}<i class="fa fa-angle-double-right page__title-crumbs__fa" aria-hidden="true"></i><a class="page__title-crumbs__child" href="/news">{!! $_SESSION['lang'] == 'RU' ? 'Новости' : 'News' !!}</a><i class="fa fa-angle-double-right page__title-crumbs__fa" aria-hidden="true"></i>
                        <div class="page__title-crumbs__child" href=""></div></a></div>
            </div>
        </div>
    </div>
    <!-- Содержимое страницы "Новость"-->
    <div class="news-all news-single inn_padd">
        <div class="news-all__inner site-width">
            <!-- Строка "Подписаться" и "Сортировка" -->
            <div class="news-all-small-head">
                <div class="news-all-small-head__col news-all__back-to-all"><i class="fa fa-angle-left back-to-all__arrow" aria-hidden="true"></i><a class="news-all__back-to-all-txt" href="page-news-all.html">К списку новостей</a></div>
                <div class="news-all-small-head__col">
                    <div class="news-subscribe">
                        <div class="news-subscribe__text">{!! $_SESSION['lang'] == 'RU' ? 'Подписаться на новости' : 'Subscribe to news' !!}</div>
                        <form class="news-subscribe-form">
                            <input class="news-subscribe-form__input" type="text" name="subscribe-name" id="subscribe-name" placeholder="Ваш e-mail"/>
                            <input class="news-subscribe-form__submit" type="submit" value="Подписаться"/>
                        </form>
                    </div>
                </div>
            </div>
            <div class="news-single__slider">
                <div class="main-slider-slick main-slider-slick__theme-exon">
                    @foreach ($news->images as $item)
                    <div class="main-slider-slick__item">
                        <img class="main-slider__img" src="{!! asset($item->img) !!}"/>
                        <div class="main-slider__txt">
                            <div class="main-slider__txt-title"></div>
                            <div class="main-slider__txt-text"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="news-single__post">
                <div class="news-single__post-date">
                    <div class="news-all__previews-item-text-date">18.09.2016</div>
                </div>
                <div class="news-single__post-title">{!! $_SESSION['lang'] == 'RU' ? $news->title_ru : $news->title_en !!}</div>
                <div class="news-single__post-text">
                    <p>{!! $_SESSION['lang'] == 'RU' ? $news->text_ru : $news->text_en !!}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- серый футер-->
    <script src="js/footer-grey.js"></script>
    <!-- Подсветка активного пункта меню-->
    <script src="js/active-page__news.js"></script>
    <!-- ***** /Контент *****-->
@stop