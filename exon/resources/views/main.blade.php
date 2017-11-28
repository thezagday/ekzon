@extends('layouts.app')

@section('content')
    <!-- ***** Контент ***** -->
    <!-- Главный слайдер-->
    <div class="main-slider-slick main-slider-slick__theme-exon">
        @foreach ($slider as $slide)
        <div class="main-slider-slick__item"><img class="main-slider__img" src="{!! $slide->img !!}"/>
            <div class="main-slider__txt">
                <div class="main-slider__txt-title">{!! $_SESSION['lang'] == 'RU' ? $slide->title_ru:$slide->title_en !!}</div>
                <div class="main-slider__txt-text">{!! $_SESSION['lang'] == 'RU' ? $slide->content_ru:$slide->content_en !!}</div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- Блок с табами -->
    <div class="page-main-tabs inn_padd">
        <div class="main-tabs__inner site-width">
            <!-- Табы -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="home-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="home" aria-expanded="true">{!! $_SESSION['lang'] == 'RU' ? 'Новое в каталоге' : 'New in catalog' !!}</a></li>
                <?php $i = 2; ?>
                @foreach ($parentCatalogs as $catalog)
                    <li class="nav-item"><a class="nav-link" id="home-tab" data-toggle="tab" href="#tab<?=$i++?>" role="tab" aria-controls="home" aria-expanded="true">{!! $_SESSION['lang'] =='RU' ? $catalog->title_ru : $catalog->title_en!!}</a></li>
                @endforeach
            </ul>
            <!-- Содержимое табов -->
            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="home-tab">
                    <div class="main-tabs-item">
                        <div class="main-tabs-item__text">
                            <div class="main-tabs-item__text-title">Лекарственные средства</div>
                            <div class="main-tabs-item__text-txt">Производство продукции осуществляется на основании промышленных регламентов, технологических инструкций, стандартных операционных процедур (СОП). На предприятии действует собственная служба обеспечения и контроля качества. Высококвалифицированный персонал выполняет работы по входному, промежуточному контролю</div>
                            <div class="main-tabs-item__text-btn"><a class="button button--gradient page-main__btn-to-catalog switch-on" href="#">Смотреть в каталоге</a>
                            </div>
                        </div>
                        <div class="main-tabs-item__slider">
                            <!-- Слайдер в табах-->
                            <div class="slider-slick-mult theme-exon">
                                @foreach ($new_products as $product)
                                    <a class="slider-slick-mult__item" href="/products/{!! $product->id !!}"><img class="slider-slick-mult__img" src="{!! asset($product->img) !!}"/>
                                        <div class="slider-slick-mult__txt">
                                            <div class="slider-slick-mult__title">{!! $_SESSION['lang'] == 'RU' ? $product->title_ru : $product->title_en !!}</div>
                                            <div class="slider-slick-mult__text">{!! $_SESSION['lang'] == 'RU' ? $product->short_desc_ru : $product->short_desc_en !!}</div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <div class="main-tabs-item__text-btn"><a class="button button--gradient page-main__btn-to-catalog switch-off" href="#">Смотреть в каталоге</a>
                        </div>
                    </div>
                </div>
                <?php $tab = 2; ?>
                @for ($i = 0; $i < 3; $i++)

                        <div class="tab-pane fade" id="tab{!! $tab !!}" role="tabpanel" aria-labelledby="home-tab">
                            <div class="main-tabs-item">
                                <div class="main-tabs-item__text">
                                    <div class="main-tabs-item__text-title">{!! $_SESSION['lang'] == 'RU' ? $parentCatalogs[$i]->material->title_ru : $parentCatalogs[$i]->material->title_en !!}</div>
                                    <div class="main-tabs-item__text-txt">{!! $_SESSION['lang'] == 'RU' ? $parentCatalogs[$i]->material->short_ru : $parentCatalogs[$i]->material->short_en !!}</div>
                                    <div class="main-tabs-item__text-btn"><a class="button button--gradient page-main__btn-to-catalog switch-on" href="#">Смотреть в каталоге</a>
                                    </div>
                                </div>
                                <div class="main-tabs-item__slider">
                                    <!-- Слайдер в табах-->
                                    <div class="slider-slick-mult theme-exon">
                                        {{--@for ($j = 0; $j < 4; $j++)--}}
                                            @foreach ($parentCatalogs[$i]->mainProducts as $product)
                                            <a class="slider-slick-mult__item" href="/products/{!! \App\Product::find($product->product_id)->id !!}"><img class="slider-slick-mult__img" src="{!! asset(\App\Product::find($product->product_id)->img) !!}"/>
                                                <div class="slider-slick-mult__txt">
                                                    <div class="slider-slick-mult__title">{!! $_SESSION['lang'] == 'RU' ? \App\Product::find($product->product_id)->title_ru : \App\Product::find($product->product_id)->title_en !!}</div>
                                                    <div class="slider-slick-mult__text">{!! $_SESSION['lang'] == 'RU' ? \App\Product::find($product->product_id)->short_desc_ru : \App\Product::find($product->product_id)->short_desc_en !!}</div>
                                                </div>
                                            </a>
                                            @endforeach
                                        {{--@endfor--}}
                                    </div>
                                </div>
                                <div class="main-tabs-item__text-btn"><a class="button button--gradient page-main__btn-to-catalog switch-off" href="#">Смотреть в каталоге</a>
                                </div>
                            </div>
                        </div>
                    <?php $tab++?>
                @endfor
            </div>
        </div>
    </div>
    <!-- Блок новостей-->
    <div class="page-main-news inn_padd">
        <div class="main-news__inner site-width">
            <div class="page-main-news__title">{!! $_SESSION['lang'] == 'RU' ? 'Новости' : 'News' !!}</div>
            <div class="page-main-news__row">
                <div class="page-main-news__col">
                    <!-- Превью новости с картинкой--><a class="page-main-news__item" href="/news">
                        <div class="page-main-news__item-img"><img class="page-main-news__item-img-image" src="{!! $news[0]->default_img !!}"/>
                            <!-- (лэйбл "акция" включается добавлением класса switch-on)-->
                            @if ($news[0]->share)
                                <div class="page-main-news__item-img-action switch-on">{!! $_SESSION['lang'] == 'RU' ? 'Акция' : 'Share' !!}</div>
                            @endif
                        </div>
                        <div class="page-main-news__item-date">{!! $news[0]->date !!}</div>
                        <div class="page-main-news__item-snippet">
                            <div class="page-main-news__item-snippet-title">{!! $_SESSION['lang'] == 'RU' ? $news[0]->title_ru :  $news[0]->title_en !!}</div>
                            <div class="page-main-news__item-snippet-description">{!! $_SESSION['lang'] == 'RU' ? $news[0]->prev_text_ru : $news[0]->prev_text_en !!}</div>
                        </div></a>
                    <!-- Кнопка "Все новости" для мобильной версии-->
                    <div class="btn-page-main-all-news__container switch-off"><a class="button-link btn-page-main-all-news" href="/news">{!! $_SESSION['lang'] == 'RU' ? 'Все новости' : 'All news' !!}</a>
                    </div>
                </div>
                <div class="page-main-news__col switch">
                    <!-- Список последних новостей-->
                    <div class="page-main-news__list">
                        <!-- айтем новости-->
                        <? $step = 0; ?>
                        @foreach ($news as $item)
                            @if ($step != 0)
                            <a class="page-main-news__list-item" href="/news-page/{!! $item->id !!}">
                                <div class="page-main-news__item-snippet-title">{!! $_SESSION['lang'] == 'RU' ? $item->title_ru : $item->title_en !!}</div>
                                <div class="page-main-news__list-item-title">{!! $_SESSION['lang'] == 'RU' ? $item->prev_text_ru : $item->prev_text_en !!}</div>
                                <div class="page-main-news__list-item-date">{!! $item->date !!}
                                    @if($item->share)
                                        <div class="page-main-news__list-item-action">Акция</div>
                                    @endif
                                </div>
                                <!-- разделитель-->
                                <div class="page-main-news__list-separator"></div>
                            </a>
                            @endif
                            <? $step++; ?>
                        @endforeach
                    </div>
                    <!-- Кнопка "Все новости"--><a class="button-link btn-page-main-all-news btn-page-main-all-news__list switch-on" href="/news">{!! $_SESSION['lang'] == 'RU' ? 'Все новости' : 'All news' !!}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Текстовый блок-->
    <div class="page-main-text inn_padd">
        <div class="main-text__inner site-width">
            <div class="main-text__title">{!! $_SESSION['lang'] == 'RU' ? $material->title_ru : $material->title_en !!}</div>
            <div class="main-text__text">{!! $_SESSION['lang'] == 'RU' ? $material->text_first_ru : $material->text_first_en !!}</div>
            <!-- Кнопка "Подробнее" с текстом-->
            <div class="collapse" id="collapseExample">
                <div class="card card-body">{!! $_SESSION['lang'] == 'RU' ? $material->text_second_ru : $material->text_second_en !!}</div>
            </div><a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">{!! $_SESSION['lang'] == 'RU' ? 'Подробно' : 'More' !!}</a>
        </div>
    </div>
    <!-- Примите участие в опросе-->
    <div class="page-main-interview inn_padd">
        <div class="main-interview__inner site-width">
            <div class="page-main-interview__text1">
                <div class="page-main-interview__txt">{!! $_SESSION['lang'] == 'RU' ? 'Примите участие в опросе,' : 'Take part in the survey,' !!} </div>
                <div class="page-main-interview__txt">{!! $_SESSION['lang'] == 'RU' ? 'чтобы помочь нам совершенствоваться' : 'to help us improve' !!}</div>
            </div>
            <div class="page-main-interview__text2">
                <div class="page-main-interview__txt">{!! $_SESSION['lang'] == 'RU' ? 'Примите участиве в опросе, чтобы помочь нам совершенстоваться' : 'Take part in the survey,to help us improve' !!}</div>
            </div>
            <div class="page-main-interview__btn"> <a class="button-link btn-page-main-all-news btn-page-main-all-news__list" href="#">{!! $_SESSION['lang'] == 'RU' ? 'Принять участие' : 'Take part' !!}</a>
            </div>
        </div>
    </div>
    <!-- ***** /Контент *****-->
@stop
