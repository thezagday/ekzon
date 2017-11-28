@extends('layouts.app')

@section('content')
    <!-- ***** Контент ***** -->
    <div class="main-slider-slick page__title">
        <div class="main-slider-slick__item">
            <!-- <img class="main-slider__img" src="{!! $pageMaterial->img !!}"/> -->
            <div class="main-slider__img" style='background-image: url("{!! $pageMaterial->img !!}")'></div>
            <div class="main-slider__txt">
                <div class="main-slider__txt-title">{!! $_SESSION['lang'] == 'RU' ? $pageMaterial->title_ru : $pageMaterial->title_en !!}</div>
            </div>
            <!-- Крошки		-->
            <!-- <div class="page__title-crumbs inn_padd">
                <div class="page__title-crumbs__inner site-width"><a class="page__title-crumbs__main" href="/">{!! $_SESSION['lang'] == 'RU' ? 'Главная' : 'Main' !!}<i class="fa fa-angle-double-right page__title-crumbs__fa" aria-hidden="true"></i><a class="page__title-crumbs__child" href="/news">{!! $_SESSION['lang'] == 'RU' ? 'Новости' : 'News' !!}</a></a></div>
            </div> -->
            <div class="page__title-crumbs inn_padd">
              <div class="page__title-crumbs__inner site-width">
                <a class="page__title-crumbs__main" href="/">{!! $_SESSION['lang'] == 'RU' ? 'Главная' : 'Main' !!}</a>
                <i class="fa fa-angle-double-right page__title-crumbs__fa" aria-hidden="true"></i>
                {!! $_SESSION['lang'] == 'RU' ? 'Новости' : 'News' !!}
              </div>
            </div>
        </div>
    </div>
    <!-- Содержимое страницы "Новости"-->
    <div class="news-all inn_padd">
        <div class="news-all__inner site-width">
            <!-- Строка "Подписаться" и "Сортировка"-->
            <div class="news-all-small-head">
                <div class="news-all-small-head__col">
                    <div class="news-subscribe">
                        <div class="news-subscribe__text">{!! $_SESSION['lang'] == 'RU' ? 'Подписаться на новости' : 'Subscribe to news' !!}</div>
                        <form class="news-subscribe-form" action="/subscribe" method="POST">
                            {{csrf_field()}}
                            <input class="news-subscribe-form__input" type="email" required="required"  name="email" min="5" id="subscribe-name" placeholder="{!! $_SESSION['lang'] == 'RU' ? 'Ваш e-mail' : 'Your e-mail' !!}"/>
                            <input type="hidden" name="request_url" class="form-control" required="required">
                            <input class="news-subscribe-form__submit" type="submit" value="{!! $_SESSION['lang'] == 'RU' ? 'Подписаться' : 'Subscribe' !!}"/>
                        </form>
                        <!-- <script>
                          function validateForm() {
                            var x = document.forms["myForm"]["fname"].value;
                            if (x == "") {
                              alert("Введите свой email");
                              return false;
                            }
                          }
                        </script> -->
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
<div class="news-sort-by-date">
                        <div class="news-sort-by-date__txt">{!! $_SESSION['lang'] == 'RU' ? 'Сортировать по дате:' : 'Sort by date:' !!}</div>
                        <div class="news-sort-by-date__switch">
                            @if ($sort == null || $sort == 'early')
                                <a class="news-sort-by-date__switch-new-first" href="?sort=fresh">{!! $_SESSION['lang'] == 'RU' ? 'Сначала новые' : 'New first' !!}</a>
                            @elseif ($sort == 'fresh')
                                <a class="news-sort-by-date__switch-old-first" href="?sort=early">{!! $_SESSION['lang'] == 'RU' ? 'Сначала старые' : 'Old first' !!}</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="news-all-small-head__col col__info-for-sh">
                  <a href='/news/sharer' class="news-all__info-for-sh contacts-form__submit">Информация для акционеров</a>
               </div>
            </div>
            <!-- Список новостей-->
            <div class="news-all__previews">
                @foreach($news as $item)
                <!-- Превью новости-->
                <div class="news-all__previews-item">
                    <!-- Картинка-->
                    <div class="news-all__previews-item-img"><img class="news-all__previews-item-img__img" src="{!! $item->default_img !!}"/></div>
                    <!-- Текст--><a class="news-all__previews-item-text" href="news-page/{!! $item->id !!}">
                        <div class="news-all__previews-item-text-title">{!! $_SESSION['lang'] == 'RU' ? $item->title_ru : $item->title_en !!}</div>
                        <div class="news-all__previews-item-text-description">{!! $_SESSION['lang'] == 'RU' ? $item->prev_text_ru : $item->prev_text_en !!}</div>
                        <div class="news-all__previews-item-text-date">{!! $item->date !!}</div></a>
                </div>
               @endforeach
            </div>
            <div class="news-all__pagination">
                {!! $news->links()!!}
                {{--vendor/laravel/framework/src/Illuminate/Pagination/resources/views/default.blade.php--}}
            </div>
        </div>
    </div>
    <!-- серый футер-->
    <script src="{!! asset('js/footer-grey.js') !!}"></script>
    <!-- ***** /Контент *****-->
@stop
