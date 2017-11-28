@extends('layouts.app')

@section('content')

    <!-- ***** /Хэдер ***** -->
    <!-- ***** Контент ***** -->
    <div class="main-slider-slick page__title">
        <div class="main-slider-slick__item">
            <!-- <img class="main-slider__img" src="{!! asset($pageMaterial->img) !!}"/> -->
            <div class="main-slider__img" style='background-image: url("{!! asset($pageMaterial->img) !!}")'></div>
            <div class="main-slider__txt">
                <div class="main-slider__txt-title">{!! $_SESSION['lang'] == 'RU' ? $pageMaterial->title_ru : $pageMaterial->title_en !!}</div>
            </div>
            <!-- Крошки		-->
            <div class="page__title-crumbs inn_padd">
                <div class="page__title-crumbs__inner site-width">
                  <a class="page__title-crumbs__main" href="/">{!! $_SESSION['lang'] == 'RU' ? 'Главная' : 'Main' !!}</a>
                  <i class="fa fa-angle-double-right page__title-crumbs__fa" aria-hidden="true"></i>
                  {!! $_SESSION['lang'] == 'RU' ? 'Каталог' : 'Products' !!}
                </div>
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
                        <!-- Делается активным добавлением класса .active блоку .catalog__sorting-only-new-a-->
                       <!-- <a class="catalog__sorting-only-new-a" href="?=new">Показать только новинки<div class="catalog__sorting-only-new-bullet"></div></a>-->
                    </div>
                    <!-- Сортировать по алфавиту-->
                    <!-- Активный параметр определяется классом .active-->
                    <div class="catalog__sorting-alphabet">
                        @if ($sort == null || $sort == 'desc')
                            <a class="catalog__sorting-alphabet-a-z active" href="?sort=asc">
                                <div class="catalog__sorting-alphabet-a-z-txt">{!! $_SESSION['lang'] == 'RU' ? 'Сортировать:' : 'Sort:' !!}</div><strong>{!! $_SESSION['lang'] == 'RU' ? 'А' : 'A' !!}</strong><i class="fa fa-long-arrow-right" aria-hidden="true"></i><strong>{!! $_SESSION['lang'] == 'RU' ? 'Я' : 'Z' !!}</strong>
                            </a>
                        @elseif ($sort = 'asc')
                            <a class="catalog__sorting-alphabet-z-a active" href="?sort=desc">
                                <div class="catalog__sorting-alphabet-z-a-txt">{!! $_SESSION['lang'] == 'RU' ? 'Сортировать:' : 'Sort:' !!}</div><strong>{!! $_SESSION['lang'] == 'RU' ? 'Я' : 'Z' !!}</strong><i class="fa fa-long-arrow-right" aria-hidden="true"></i><strong>{!! $_SESSION['lang'] == 'RU' ? 'А:' : 'A' !!}</strong>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="catalog__cols">
                <!-- Первая колонка-->
                <div class="catalog__col1">
                    <!-- Меню-->
                    <div class="catalog__menu">
                    <?php $i = 0;?>
                    <?php $j = 0;?>
                    @foreach ($parentCatalogs as $catalog)
                      <!-- Раздел каталога-->
                      @if ($id == null)
                          @if ($i == 0)
                              <div class="catalog__menu-item active-item">
                                <div class="catalog__menu-item-title">{!! $_SESSION['lang'] == 'RU' ? $catalog->title_ru : $catalog->title_en !!}<div class="catalog__menu-item-title-arrow"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i></div></div>
                                <!-- Подраздел каталога-->
                                <div class="catalog__submenu">
                                    @foreach($catalog->subCatalogs as $subCatalog)
                                        @if ($j == 0)
                                            <a class="catalog__submenu-item active" href="{!! route('catalog',['id'=>$subCatalog->id]) !!}">{!! $_SESSION['lang'] == 'RU' ? $subCatalog->title_ru : $subCatalog->title_en !!}<div class="catalog__submenu-item-label"></div></a>
                                        @else
                                            <a class="catalog__submenu-item" href="{!! route('catalog',['id'=>$subCatalog->id]) !!}">{!! $_SESSION['lang'] == 'RU' ? $subCatalog->title_ru : $subCatalog->title_en !!}<div class="catalog__submenu-item-label"></div></a>
                                        @endif
                                        <?php $j++;?>
                                    @endforeach
                                </div>
                              </div>
                             <?php $i = 1 ?>
                          @else
                              <div class="catalog__menu-item">
                                  <div class="catalog__menu-item-title">{!! $_SESSION['lang'] == 'RU' ? $catalog->title_ru : $catalog->title_en !!}<div class="catalog__menu-item-title-arrow"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i></div></div>
                                  <!-- Подраздел каталога-->
                                  <div class="catalog__submenu" style="display: none;">
                                      @foreach($catalog->subCatalogs as $subCatalog)
                                          <a class="catalog__submenu-item" href="{!! route('catalog',['id'=>$subCatalog->id]) !!}">{!! $_SESSION['lang'] == 'RU' ? $subCatalog->title_ru : $subCatalog->title_en !!}<div class="catalog__submenu-item-label"></div></a>
                                      @endforeach
                                  </div>
                              </div>
                          @endif

                       @else

                          @if ($catalog->id == \App\Catalog::find($id)->parent)
                              <div class="catalog__menu-item active-item">
                                  <div class="catalog__menu-item-title">{!! $_SESSION['lang'] == 'RU' ? $catalog->title_ru : $catalog->title_en !!}<div class="catalog__menu-item-title-arrow"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i></div></div>
                                  <!-- Подраздел каталога-->
                                  <div class="catalog__submenu">
                                      @foreach($catalog->subCatalogs as $subCatalog)
                                          @if ($subCatalog->id == $id)
                                                <a class="catalog__submenu-item active" href="{!! route('catalog',['id'=>$subCatalog->id]) !!}">{!! $_SESSION['lang'] == 'RU' ? $subCatalog->title_ru : $subCatalog->title_en !!}<div class="catalog__submenu-item-label"></div></a>
                                          @else
                                              <a class="catalog__submenu-item" href="{!! route('catalog',['id'=>$subCatalog->id]) !!}">{!! $_SESSION['lang'] == 'RU' ? $subCatalog->title_ru : $subCatalog->title_en !!}<div class="catalog__submenu-item-label"></div></a>
                                          @endif
                                      @endforeach
                                  </div>
                              </div>
                          @else
                              <div class="catalog__menu-item">
                                  <div class="catalog__menu-item-title">{!! $_SESSION['lang'] == 'RU' ? $catalog->title_ru : $catalog->title_en !!}<div class="catalog__menu-item-title-arrow"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i></div></div>
                                  <!-- Подраздел каталога-->
                                  <div class="catalog__submenu" style="display: none;">
                                      @foreach($catalog->subCatalogs as $subCatalog)
                                              <a class="catalog__submenu-item" href="{!! route('catalog',['id'=>$subCatalog->id]) !!}">{!! $_SESSION['lang'] == 'RU' ? $subCatalog->title_ru : $subCatalog->title_en !!}<div class="catalog__submenu-item-label"></div></a>
                                      @endforeach
                                  </div>
                              </div>
                          @endif
                       @endif
                      @endforeach
                    </div>
                    <script src="{!! asset('js/catalog__menu.js') !!}"></script>
                    <!-- Баннер-->
                    <div class="catalog__banner"><img class="catalog__banner-img" src="{!! asset($banner) !!}"/></div>
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
                                <!-- <img class="catalog_card-img" src="{!! asset($product->img) !!}"/> -->
                                <div class="catalog_card-img" style='background-image: url("{!! asset($product->img) !!}")'></div>
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
                    @if ($material != null)
                    <!-- Текст-->
                    <div class="catalog__text">
                        <div class="main-text__title">{!! $_SESSION['lang'] == 'RU' ? $material->title_ru : $material->title_en !!}</div>
                        <div class="main-text__text">{!! $_SESSION['lang'] == 'RU' ? $material->text_ru : $material->text_en !!}</div>
                        <!-- Кнопка "Подробнее" с текстом-->
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">{!! $_SESSION['lang'] == 'RU' ? $material->text_ru : $material->text_en !!}</div>
                        </div><a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Подробно</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Примите участие в опросе-->
    @include('_common.interview')
    <!-- ***** /Контент *****-->
@stop
