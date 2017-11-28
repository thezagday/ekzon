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
                <div class="page__title-crumbs__inner site-width"><a class="page__title-crumbs__main" href="/">{!! $_SESSION['lang'] == 'RU' ? 'Главная' : 'Main' !!}<i class="fa fa-angle-double-right page__title-crumbs__fa" aria-hidden="true"></i><a class="page__title-crumbs__child" href="/news">{!! $_SESSION['lang'] == 'RU' ? 'Новости' : 'News' !!}</a></a></div>
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
                        <div class="news-subscribe__text">Подписаться на новости</div>
                        <form class="news-subscribe-form">
                            <input class="news-subscribe-form__input" type="text" name="subscribe-name" id="subscribe-name" placeholder="Ваш e-mail"/>
                            <input class="news-subscribe-form__submit" type="submit" value="Подписаться"/>
                        </form>
                    </div>
                </div>
                <div class="news-all-small-head__col">
                    <div class="news-sort-by-date">
                        <div class="news-sort-by-date__txt">Сортировать по дате:</div>
                        <div class="news-sort-by-date__switch"><a class="news-sort-by-date__switch-new-first" href="#">Сначала свежие</a><a class="news-sort-by-date__switch-old-first" href="#" style="display:none;">Сначала ранние</a></div>
                    </div>
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
            <div class="news-all__pagination"><a class="news-all__pagination-page active" href="#">1</a><a class="news-all__pagination-page" href="#">2</a><a class="news-all__pagination-page" href="#">3</a></div>
        </div>
    </div>
    <!-- серый футер-->
    <script src="{!! asset('js/footer-grey.js') !!}"></script>
    <!-- ***** /Контент *****-->
@stop