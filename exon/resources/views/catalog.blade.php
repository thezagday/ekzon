@extends('layouts.app')

@section('content')

    <!-- ***** /Хэдер ***** -->
    <!-- ***** Контент ***** -->
    <div class="main-slider-slick page__title">
        <div class="main-slider-slick__item"><img class="main-slider__img" src="{!! asset($pageMaterial->img) !!}"/>
            <div class="main-slider__txt">
                <div class="main-slider__txt-title">{!! $_SESSION['lang'] == 'RU' ? $pageMaterial->title_ru : $pageMaterial->title_en !!}</div>
            </div>
            <!-- Крошки		-->
            <div class="page__title-crumbs inn_padd">
                <div class="page__title-crumbs__inner site-width"><a class="page__title-crumbs__main" href="/">{!! $_SESSION['lang'] == 'RU' ? 'Главная' : 'Main' !!}<i class="fa fa-angle-double-right page__title-crumbs__fa" aria-hidden="true"></i><a class="page__title-crumbs__child" href="/catalog">{!! $_SESSION['lang'] == 'RU' ? 'Каталог' : 'Catalog' !!}</a></a></div>
            </div>
        </div>
    </div>
    <!-- Содержимое страницы "Каталог"-->
    <div class="catalog inn_padd">
        <div class="catalog__inner site-width">
            <!-- Сортировка-->
            <div class="catalog__sorting">
                <div class="catalog__sorting-float-block">
                    <!-- Показать только новинки-->
                    <div class="catalog__sorting-only-new">
                        <!-- Делается активным добавлением класса .active блоку .catalog__sorting-only-new-a--><a class="catalog__sorting-only-new-a" href="#">Показать только новинки
                            <div class="catalog__sorting-only-new-bullet"></div></a>
                    </div>
                    <!-- Сортировать по алфавиту-->
                    <!-- Активный параметр определяется классом .active-->
                    <div class="catalog__sorting-alphabet"><a class="catalog__sorting-alphabet-a-z active" href="#">
                            <div class="catalog__sorting-alphabet-a-z-txt">Сортировать:</div><strong>А</strong><i class="fa fa-long-arrow-right" aria-hidden="true"></i><strong>Я</strong></a><a class="catalog__sorting-alphabet-z-a" href="#">
                            <div class="catalog__sorting-alphabet-z-a-txt">Сортировать:</div><strong>Я</strong><i class="fa fa-long-arrow-right" aria-hidden="true"></i><strong>А</strong></a></div>
                </div>
            </div>
            <div class="catalog__cols">
                <!-- Первая колонка-->
                <div class="catalog__col1">
                    <!-- Меню-->
                    <div class="catalog__navbar">
                        <div class="menu-accordion-bootstrap">
                            <!-- Бутстрап Аккордион -->
                            <div class="accordion" id="accordion" role="tablist">
                                <?php $i = 0;?>
                                @foreach ($parentCatalogs as $catalog)
                                <div class="card">
                                    <div class="card-header" id="heading<?= $i?>" role="tab">
                                        <div class="menu__title"><a data-toggle="collapse" href="#collapse<?= $i?>" aria-expanded="true" aria-controls="collapse<?= $i?>">{!! $_SESSION['lang'] == 'RU' ? $catalog->title_ru : $catalog->title_en !!}</a></div>
                                    </div>
                                    <div class="submenu-block collapse show" id="collapse<?=$i?>" role="tabpanel" aria-labelledby="heading<?= $i?>" data-parent="#accordion">
                                        <ul class="card-body">
                                            {{--where('parent',$catalog->id)->get()--}}
                                            @foreach($catalog->subCatalogs as $subCatalog)
                                            <li>
                                                <div class="active-item"></div><a href="{!! route('catalog',['id'=>$subCatalog->id]) !!}">{!! $_SESSION['lang'] == 'RU' ? $subCatalog->title_ru : $subCatalog->title_en !!}</a>
                                            </li>
                                           @endforeach
                                        </ul>
                                        {{--<div class="border-active"></div>--}}
                                    </div>
                                </div>
                                <?php $i++;?>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Баннер-->
                    <div class="catalog__banner"><img class="catalog__banner-img" src="{!! asset('template-images/catalog__banner.png') !!}"/></div>
                </div>
                <!-- Вторая колонка-->
                <div class="catalog__col2">
                    <!-- Карточка товаров-->

                    <div class="catalog__items">
                        @foreach ($products as $product)
                            <a class="catalog__card" href="{!! route('product',['id'=>$product->id]) !!}">
                                <!-- Лэйбл Новинка добавляется переключателем .on к блоку .catalog__card-novelty -->
                                @if ($product->isNew == 1)
                                    <div class="catalog__card-novelty on">{!! $_SESSION['lang'] == 'RU' ? 'Новинка' : 'New' !!}</div>
                                @endif
                                <img class="catalog_card-img" src="{!! asset($product->img) !!}"/>
                                <div class="catalog__card-txt">
                                    <div class="catalog__card-txt-title">{!! $_SESSION['lang'] == 'RU' ? $product->title_ru : $product->title_en !!}</div>
                                    <div class="catalog__card-txt-text">{!! $_SESSION['lang'] == 'RU' ? $product->short_desc_ru : $product->short_desc_en !!}</div>
                                </div>
                                <!-- Отпуск по рецепту осуществляется добавлением класса .on ОБОИМ блокам-->
                                @if ($product->recipe == 1)
                                    <div class="catalog__card-recipe on">По рецепту<img class="catalog__card-recipe-img" src="{!! asset('template-images/catalog__card-recipe.png') !!}"/></div>
                                @else
                                    <div class="catalog__card-no-recipe">Без рецепта<img class="catalog__card-no-recipe-img" src="{!! asset('template-images/catalog__card-no-recipe.png') !!}"/></div>
                                @endif
                            </a>
                        @endforeach
                        <div style="width: 318px;"></div>
                        <div style="width: 318px;"></div>
                    </div>

                    <!-- Текст-->
                    <div class="catalog__text">
                        <div class="main-text__title">{!! $_SESSION['lang'] == 'RU' ? $material->title_ru : $material->title_en !!}</div>
                        <div class="main-text__text">{!! $_SESSION['lang'] == 'RU' ? $material->text_ru : $material->text_en !!}</div>
                        <!-- Кнопка "Подробнее" с текстом-->
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">{!! $_SESSION['lang'] == 'RU' ? $material->text_ru : $material->text_en !!}</div>
                        </div><a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Подробно</a>
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
            <div class="page-main-interview__btn"> <a class="button-link btn-page-main-all-news btn-page-main-all-news__list" href="#">Принять участие</a>
            </div>
        </div>
    </div>
    <!-- ***** /Контент *****-->
@stop