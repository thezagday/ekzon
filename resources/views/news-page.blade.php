@extends('layouts.app')

@section('content')
    <!-- ***** Контент ***** -->
    <div class="main-slider-slick page__title">
        <div class="main-slider-slick__item">
            <div class="main-slider__img" style='background-image: url("/{!! $pageMaterial->img !!}")'></div>
            <div class="main-slider__txt">
                <div class="main-slider__txt-title">{!! $_SESSION['lang'] == 'RU' ? 'Новости' : 'News' !!}</div>
            </div>
            <!-- Крошки -->
            <div class="page__title-crumbs inn_padd">
                <div class="page__title-crumbs__inner site-width">
                    <a class="page__title-crumbs__main" href="/">{!! $_SESSION['lang'] == 'RU' ? 'Главная' : 'Main' !!}<i class="fa fa-angle-double-right page__title-crumbs__fa" aria-hidden="true"></i>
                        <a class="page__title-crumbs__child" href="/news">{!! $_SESSION['lang'] == 'RU' ? 'Новости' : 'News' !!}</a><i class="fa fa-angle-double-right page__title-crumbs__fa" aria-hidden="true"></i>
                        <div class="page__title-crumbs__child" href=""></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Содержимое страницы "Новость"-->
    <div class="news-all news-single inn_padd">
        <div class="news-all__inner site-width">
            <!-- Строка "Подписаться" и "Сортировка" -->
            <div class="news-all-small-head">
                <div class="news-all-small-head__col news-all__back-to-all"><i class="fa fa-angle-left back-to-all__arrow" aria-hidden="true"></i><a class="news-all__back-to-all-txt" href="/news">К списку новостей</a></div>
                <div class="news-all-small-head__col">
                    <div class="news-subscribe">
                        <div class="news-subscribe__text">{!! $_SESSION['lang'] == 'RU' ? 'Подписаться на новости' : 'Subscribe to news' !!}</div>
                        <form class="news-subscribe-form" action="/subscribe" method="post">
                            {{csrf_field()}}
                            <input class="news-subscribe-form__input" type="text" name="email" id="subscribe-name" placeholder="Ваш e-mail"/>
                            <input type="hidden" name="request_url" class="form-control" required="required">
                            <input class="news-subscribe-form__submit" type="submit" value="Подписаться"/>
                        </form>
                        <?php
                        if(isset($_SESSION['sended']) && ($_SESSION['sended'])) : ?>
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.css">
                        <script src="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.js"></script>
                        <script>
                            swal({
                                title: 'Запрос на рассылку успешно зарегестрирован!',
                                timer: 3000,
                                type: 'success',
                                showCancelButton: false,
                                showConfirmButton: false
                            });
                        </script>
                        <?php $_SESSION['sended'] = null; endif; ?>
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
    <script src="{!! asset('js/footer-grey.js') !!}"></script>
    <!-- Подсветка активного пункта меню-->
    <script src="{!! asset('js/active-page__news.js') !!}"></script>
    <!-- ***** /Контент *****-->
@stop
