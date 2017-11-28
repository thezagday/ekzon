@extends('layouts.app')

@section('content')
    <!-- ***** Контент ***** -->
    <div class="main-slider-slick page__title">
        <div class="main-slider-slick__item"><img class="main-slider__img" src="{!! $pageMaterial->img !!}"/>
            <div class="main-slider__txt">
                <div class="main-slider__txt-title">{!! $_SESSION['lang'] == 'RU' ? 'Личный кабинет' : 'Personal area' !!}</div>
            </div>
            <!-- Крошки		-->
            <div class="page__title-crumbs inn_padd">
                <div class="page__title-crumbs__inner site-width"><a class="page__title-crumbs__main" href="/">{!! $_SESSION['lang'] == 'RU' ? 'Главная' : 'Main' !!}<i class="fa fa-angle-double-right page__title-crumbs__fa" aria-hidden="true"></i><a class="page__title-crumbs__child" href="/home">{!! $_SESSION['lang'] == 'RU' ? 'Личный кабинет клиента' : 'Customer\'s personal account' !!}</a></a></div>
            </div>
        </div>
    </div>
    <!-- Приветствие-->
    <div class="lk__welcome">
        <div class="inn_padd">
            <div class="lk__welcome-inner site-width">
                <div class="lk__welcome-name">{!! $_SESSION['lang'] == 'RU' ? 'Здравствуйте,' : 'Hello, ' !!}
                    <div class="lk__welcome-name-client">{!! Auth::user()->name !!}</div>
                </div>
                <div class="lk__welcome-text">{!! $_SESSION['lang'] == 'RU' ? 'Добро пожаловать в личный кабинет' : 'Welcome to your own account' !!}</div>
                <div class="lk__welcome-description">{!! $_SESSION['lang'] == 'RU' ? 'В личном кабинете вы всегда можете иметь актуальную информацию по ценам и наличию лекарственных средств на складе ОАО "ЭКЗОН"' : 'In your personal account you can always have up-to-date information on prices and availability of medicines in the stock of JSC "EKZON"' !!} </div><img class="lk__welcome-cross" src="{!! asset('template-images/lk__welcome-cross.png') !!}"/>
            </div>
        </div>
    </div>
    <!-- Контент		-->
    <div class="lk inn_padd">
        <div class="lk__inner site-width">
            <!-- Табы-->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="home-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="home" aria-expanded="true">{!! $_SESSION['lang'] == 'RU' ? 'Документы' : 'Documents' !!}</a></li>
                <li class="nav-item"><a class="nav-link" id="home-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="home" aria-expanded="true">{!! $_SESSION['lang'] == 'RU' ? 'Форма заказа' : 'Order form' !!}</a></li>
            </ul>
            <!-- Содержимое табов -->
            <div class="tab-content" id="myTabContent">
                <!-- Таб "Документы"-->
                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="home-tab">
                    <div class="tab-content__item">
                        <div class="tab-content__item-info">
                            <div class="tab-content__item-info-title">Прайс-Лист</div>
                            <div class="tab-content__item-info-date">обновлено 21.05.2017</div>
                        </div>
                        <div class="tab-content__item-source"><a class="tab-content__item-source-see" href="files/file.pdf" target="blank"></a><a class="tab-content__item-source-download" href="files/file.pdf" download="download"></a></div>
                    </div>
                    <div class="tab-content__item">
                        <div class="tab-content__item-info">
                            <div class="tab-content__item-info-title">Дистрибьюторам</div>
                            <div class="tab-content__item-info-date">обновлено 21.05.2017</div>
                        </div>
                        <div class="tab-content__item-source"><a class="tab-content__item-source-see" href="files/file.pdf" target="blank"></a><a class="tab-content__item-source-download" href="files/file.pdf" download="download"></a></div>
                    </div>
                    <div class="tab-content__item">
                        <div class="tab-content__item-info">
                            <div class="tab-content__item-info-title">Информация по наличию</div>
                            <div class="tab-content__item-info-date">обновлено 21.05.2017</div>
                        </div>
                        <div class="tab-content__item-source"><a class="tab-content__item-source-see" href="files/file.pdf" target="blank"></a><a class="tab-content__item-source-download" href="files/file.pdf" download="download"></a></div>
                    </div>
                    <div class="tab-content__item">
                        <div class="tab-content__item-info">
                            <div class="tab-content__item-info-title">Положение по скидкам</div>
                            <div class="tab-content__item-info-date">обновлено 21.05.2017</div>
                        </div>
                        <div class="tab-content__item-source"><a class="tab-content__item-source-see" href="files/file.pdf" target="blank"></a><a class="tab-content__item-source-download" href="files/file.pdf" download="download"></a></div>
                    </div>
                </div>
                <!-- Таб "Форма заказа"-->
                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="home-tab">
                    <div class="lk__table-container">
                        <table class="lk__table">
                            <tr class="lk__tr">
                                <th class="lk__th">N п/п</th>
                                <th class="lk__th">Наименование продукции</th>
                                <th class="lk__th">Единица измерения</th>
                                <th class="lk__th">Франко-назначения</th>
                                <th class="lk__th availability">Наличие</th>
                                <th class="lk__th">Количество </th>
                            </tr>
                            @foreach ($products as $product)
                            <tr class="lk__tr">
                                <td class="lk__td">1</td>
                                <td class="lk__td">{!! $product->title_ru !!}
                                </td>
                                <td class="lk__td">Плитка 50 г.</td>
                                <td class="lk__td">0,32</td>
                                <td class="lk__td">
                                    <!-- Включается добавлением класса .on-->
                                    <div class="yes on">В наличии</div>
                                    <div class="no">Нет</div>
                                </td>
                                <td class="lk__td">
                                    <div class="product-count"><span class="minus">-</span><span class="value">0</span><span class="plus">+</span></div>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="lk__table-footer">
                        <div class="lk__table-footer-txt">
                            <div class="lk__table-footer-choose">Вы выбрали:
                                <div class="lk__table-footer-choose-number">0</div>наименований товаров
                            </div>
                            <div class="lk__table-footer-all">Общее количество:
                                <div class="lk__table-footer-all-number">{!! count($products) !!}</div>позиций
                            </div>
                        </div>
                        <button class="lk__table-footer-btn" data-target="#lk__modal-order" href="" data-toggle="modal">Оформить заявку						</button>
                    </div>
                    <!-- Модальное окно подтверждения заказа		-->
                    <div class="modal fade" id="lk__modal-order" tabindex="-1" role="dialog" aria-labelledby="assort-btn" aria-hidden="true">
                        <div class="lk__modal-order-container modal-box modal-dialog site-width">
                            <div class="lk__modal-order">
                                <div class="lk__modal-order-title">Ваш заказ:</div>
                                <div class="lk__table-order-modal-container">
                                    <table class="lk__table lk__table-order">
                                        <tr class="lk__tr">
                                            <th class="lk__th">N п/п</th>
                                            <th class="lk__th">Наименование продукции</th>
                                            <th class="lk__th">Единица измерения</th>
                                            <th class="lk__th">Франко-назначения</th>
                                            <th class="lk__th availability">Наличие</th>
                                            <th class="lk__th">Количество</th>
                                        </tr>
                                    </table>
                                </div>
                                <div class="lk__table-footer">
                                    <div class="lk__table-footer-txt">
                                        <div class="lk__table-footer-choose">Вы выбрали:
                                            <div class="lk__table-footer-choose-number">0</div>наименований товаров
                                        </div>
                                        <div class="lk__table-footer-all">Общее количество:
                                            <div class="lk__table-footer-all-number">0</div>позиций
                                        </div>
                                    </div>
                                    <div class="lk__modal-order-footer-btns">
                                        <div class="lk__table-footer-btn-change" data-dismiss="modal">Изменить</div>
                                        <div class="lk__table-footer-btn-send" data-dismiss="modal">Отправить заявку</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-separator"></div>
    <script src="js/lk__products-counter.js"></script>
    <!-- серый футер-->
    <script src="js/footer-grey.js"></script>
    <!-- корректировка Тайтла-->
    <script src="js/lk__change-title.js"></script>
    <!-- ***** /Контент *****-->
@endsection
