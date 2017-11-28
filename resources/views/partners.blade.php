@extends ('layouts.app')

@section('content')

    <!-- ***** Контент ***** -->
    <div class="main-slider-slick page__title">
        <div class="main-slider-slick__item">
            <!-- <img class="main-slider__img" src="{!! asset('template-images/about-company__title.jpg') !!}"/> -->
            <div class="main-slider__img" style="background-image: url('{!! asset('template-images/about-company__title.jpg') !!}')"></div>
            <div class="main-slider__txt">
                <div class="main-slider__txt-title">{!! $_SESSION['lang'] == 'RU' ? 'Партнерам' : 'Partners' !!}</div>
            </div>
            <!-- Крошки -->
            <div class="page__title-crumbs inn_padd">
                <!-- <div class="page__title-crumbs__inner site-width"><a class="page__title-crumbs__main" href="/">{!! $_SESSION['lang'] == 'RU' ? 'Главная' : 'Main' !!}</a><i class="fa fa-angle-double-right page__title-crumbs__fa" aria-hidden="true"></i>
                    <div class="page__title-crumbs__child">{!! $_SESSION['lang'] == 'RU' ? 'Партнерам' : 'Partners' !!}</div>
                </div> -->
                <div class="page__title-crumbs__inner site-width">
                  <a class="page__title-crumbs__main" href="/">{!! $_SESSION['lang'] == 'RU' ? 'Главная' : 'Main' !!}</a>
                  <i class="fa fa-angle-double-right page__title-crumbs__fa" aria-hidden="true"></i>
                  {!! $_SESSION['lang'] == 'RU' ? 'Партнерам' : 'Partners' !!}
                </div>
            </div>
        </div>
    </div>
    <div class="about-company news-single">
        <div class="about-company__info inn_padd">
            <div class="about-company__inner site-width">
                <div class="simple-text-block">
                   {!! $_SESSION['lang'] == 'RU' ? $partner->text_ru : $partner->text_en!!}
                </div>
            </div>
        </div>
    </div>
    <!-- ***** /Контент *****-->

    @include('_common.interview')
@stop
