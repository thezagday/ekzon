@extends('layouts.app')

@section('content')
    <!-- ***** Контент ***** -->
    <div class="main-slider-slick page__title">
        <div class="main-slider-slick__item"><img class="main-slider__img" src="{!! asset($pageMaterial->img) !!}"/>
            <div class="main-slider__txt">
                <div class="main-slider__txt-title">{!! $_SESSION['lang'] == 'RU' ? 'Каталог продукции' : 'Products catalog' !!}</div>
            </div>
            <!-- Крошки -->
            <div class="page__title-crumbs inn_padd">
                <div class="page__title-crumbs__inner site-width"><a class="page__title-crumbs__main" href="/">{!! $_SESSION['lang'] == 'RU' ? 'Главная' : 'Main' !!}<i class="fa fa-angle-double-right page__title-crumbs__fa" aria-hidden="true"></i><a class="page__title-crumbs__child" href="/catalog">{!! $_SESSION['lang'] == 'RU' ? 'Каталог продукции' : 'Products catalog' !!}</a><i class="fa fa-angle-double-right page__title-crumbs__fa" aria-hidden="true"></i>
                        <div class="page__title-crumbs__child" href="">{!! $_SESSION['lang'] == 'RU' ? $product->title_ru : $product->title_en !!}</div></a></div>
            </div>
        </div>
    </div>
    <!-- Содержимое страницы "Карточка товара"-->
    <div class="catalog catalog-card inn_padd">
        <div class="catalog__inner catalog-card__inner site-width">
            <div class="catalog-card__cols">
                <!-- Изображение товара-->
                <div class="catalog-card__col1-2 catalog-card__img-col">
                    <div class="catalog-card__img"><img class="catalog-card__img-image" src="{!! asset($product->img) !!}"/>
                        @if ($product->isNew)
                            <div class="catalog-card__img-new catalog__card-novelty on">{!! $_SESSION['lang'] == 'RU' ? 'Новинка' : 'New' !!}</div>
                        @endif
                    </div>
                </div>
                <!-- Описание товара-->
                <div class="catalog-card__col1-2 catalog-card__descr-col">
                    <div class="catalog-card__descr">
                        <!-- Заголовок-->
                        <div class="catalog-card__descr-title">{!! $_SESSION['lang'] == 'RU' ? $product->title_ru : $product->title_en!!}</div>
                        <!-- Рег.номер-->
                        <div class="catalog-card__descr-reg">{!! $_SESSION['lang'] == 'RU' ? $product->reg_ru : $product->reg_en !!}</div>
                        <!-- Свойства-->
                        <div class="catalog-card__descr-properties">
                            <div class="catalog-card__descr-properties-name">{!! $_SESSION['lang'] == 'RU' ? 'Торговое наименование:' : 'Trade name:' !!}<strong>   {!! $_SESSION['lang'] == 'RU' ? $product->name_ru : $product->name_en !!}</strong></div>
                            <div class="catalog-card__descr-properties-name-int">{!! $_SESSION['lang'] == 'RU' ? 'Международное наименование: ' : 'International name:' !!}<strong> {!! $product->inter_name !!}</strong></div>
                            <div class="catalog-card__descr-properties-category">{!! $_SESSION['lang'] == 'RU' ? 'Категория: ' : 'Category: ' !!} <strong>{!! $_SESSION['lang'] == 'RU' ? $product->parentCategory->title_ru : $product->parentCategory->title_en!!}</strong></div>
                            <div class="catalog-card__descr-properties-function">{!! $_SESSION['lang'] == 'RU' ? 'Назначение:' : 'Purpose:'!!} <strong>{!! $_SESSION['lang'] == 'RU' ? $product->appointment_ru : $product->appointment_en!!}</strong></div>
                            <div class="catalog-card__descr-properties-volume">{!! $_SESSION['lang'] == 'RU' ? 'Объем: ' : 'Volume:'!!}<strong>{!! $product->volume !!}{!! $_SESSION['lang'] == 'RU' ? 'мл' : 'ml'!!}</strong></div>
                        </div>
                        <!-- По рецепту или без-->
                        <div class="catalog-card__receipt">
                            @if ($product->recipe == 1)
                                <div class="catalog-card__descr-receipt-yes active">{!! $_SESSION['lang'] == 'RU' ? 'Отпускается по рецепту врача' : 'Available on prescription' !!}<img class="catalog-card__descr-receipt-yes-img" src="{!! asset('template-images/catalog__card-recipe.png') !!}"/></div>
                            @else
                                <div class="catalog-card__descr-receipt-no active">{!! $_SESSION['lang'] == 'RU' ? 'Отпускается без рецепта врача' : 'Without prescription' !!}<img class="catalog-card__descr-receipt-no-img active" src="{!! asset('template-images/catalog__card-no-recipe.png') !!}"/></div>
                            @endif
                        </div>
                        <!-- Разделитель-->
                        <div class="catalog-card__descr-separator"></div>
                        <!-- Доп.информация						-->
                        <div class="catalog-card__descr-addition">
                            <p> {!! $_SESSION['lang'] == 'RU' ? $product->desc_ru : $product->desc_en !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Примите участие в опросе-->
    <div class="page-main-interview inn_padd">
        <div class="main-interview__inner site-width">
            <div class="page-main-interview__text1">
                <div class="page-main-interview__txt">{!! $_SESSION['lang'] == 'RU' ? 'Примите участие в опросе, ' : 'Take part in the survey,' !!}</div>
                <div class="page-main-interview__txt">{!! $_SESSION['lang'] == 'RU' ? 'чтобы помочь нам совершенствоваться' : 'to help us improve' !!}</div>
            </div>
            <div class="page-main-interview__text2">
                <div class="page-main-interview__txt">{!! $_SESSION['lang'] == 'RU' ? 'Примите участиве в опросе, чтобы помочь нам совершенстоваться' : 'Take part in the survey to help us improve' !!}</div>
            </div>
            <div class="page-main-interview__btn"> <a class="button-link btn-page-main-all-news btn-page-main-all-news__list" href="#">{!! $_SESSION['lang'] == 'RU' ? 'Принять участие' : 'Take part' !!}</a>
            </div>
        </div>
    </div>
    <!-- ***** /Контент *****-->
@stop