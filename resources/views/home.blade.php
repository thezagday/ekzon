@extends('layouts.app')

@section('content')
    <!-- ***** Контент ***** -->
    <div class="main-slider-slick page__title">
        <div class="main-slider-slick__item">
            <!-- <img class="main-slider__img" src="{!! $pageMaterial->img !!}"/> -->
            <div class="main-slider__img" style='background-image: url("{!! $pageMaterial->img !!}")'></div>
            <div class="main-slider__txt">
                <div class="main-slider__txt-title">{!! $_SESSION['lang'] == 'RU' ? 'Личный кабинет' : 'Personal area' !!}</div>
            </div>
            <!-- Крошки		-->
            <div class="page__title-crumbs inn_padd">
              <!-- <div class="page__title-crumbs__inner site-width"><a class="page__title-crumbs__main" href="/">{!! $_SESSION['lang'] == 'RU' ? 'Главная' : 'Main' !!}<i class="fa fa-angle-double-right page__title-crumbs__fa" aria-hidden="true"></i><a class="page__title-crumbs__child" href="/home">{!! $_SESSION['lang'] == 'RU' ? 'Личный кабинет клиента' : 'Customer\'s personal account' !!}</a></a></div> -->
              <div class="page__title-crumbs__inner site-width">
                <a class="page__title-crumbs__main" href="/">{!! $_SESSION['lang'] == 'RU' ? 'Главная' : 'Main' !!}</a>
                <i class="fa fa-angle-double-right page__title-crumbs__fa" aria-hidden="true"></i>
                {!! $_SESSION['lang'] == 'RU' ? 'Личный кабинет клиента' : 'Customer\'s personal account' !!}
              </div>
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
                    @foreach ($documents as $document)
                    <div class="tab-content__item">
                        <div class="tab-content__item-info">
                            <div class="tab-content__item-info-title">{!! $_SESSION['lang'] == 'RU' ? $document->title_ru : $document->title_en !!}</div>
                            <div class="tab-content__item-info-date">{!! $_SESSION['lang'] == 'RU' ? "обновлено $document->created_at" : "updated at $document->created_at" !!}</div>
                        </div>
                        <div class="tab-content__item-source"><a class="tab-content__item-source-see" href="{!! $document->path !!}" target="blank"></a><a class="tab-content__item-source-download" href="{!! $document->path !!}" download="download"></a></div>
                    </div>
                    @endforeach
                </div>
                <!-- Таб "Форма заказа"-->
                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="home-tab">
                    <div class="lk__table-container">
                        <table class="lk__table">
                            <tr class="lk__tr">
                                <th class="lk__th">N п/п</th>
                                <th class="lk__th">Наименование продукции</th>
                                <th class="lk__th">Упаковка</th>
                                <th class="lk__th">Франко-назначения</th>
                                <th class="lk__th">Количество </th>
                            </tr>
                            <?php $i = 0?>
                            @foreach ($products as $product)
                                <tr class="lk__tr">
                                    <td class="lk__td">
                                        <input class='lk__table-input lk__th-No' type="text" readonly="readonly" name='No' value='<?php echo ++$i?>'>
                                    </td>
                                    <td class="lk__td">
                                        <input class='lk__table-input' type="text" readonly="readonly" name='title_ru' value='{!! $_SESSION['lang'] == 'RU' ? $product->title_ru : $product->title_en!!}'>
                                    </td>
                                    <td class="lk__td">
                                        <input class='lk__table-input' type="text" readonly="readonly" name='volume' value='{!! $_SESSION['lang'] == 'RU' ? $product->volume : $product->packing_en !!}'>
                                    </td>
                                    <td class="lk__td">
                                        <input class='lk__table-input' type="text" readonly="readonly" name='franko' value='{!! $_SESSION['lang'] == 'RU' ? $product->franko : $product->franko !!}'>
                                    </td>
                                    <td class="lk__td">
                                        <div class="product-count"><span class="minus">-</span><input class="lk__table-input value" value='0' name="count"><span class="plus">+</span></div>
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
                                <form action="/order" method="post">
                                    {{csrf_field()}}
                                    <div class="lk__modal-order-title">Ваш заказ:</div>
                                    <div class="lk__table-order-modal-container">
                                        <table class="lk__table lk__table-order">
                                            <tr class="lk__tr">
                                                <th class="lk__th">N п/п</th>
                                                <th class="lk__th">Наименование продукции</th>
                                                <th class="lk__th">Упаковка</th>
                                                <th class="lk__th">Франко-назначения</th>
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
                                        <input type="hidden" name="request_url" required="required">
                                        <div class="lk__modal-order-footer-btns">
                                            <div class="lk__table-footer-btn-change" data-dismiss="modal">Изменить</div>
                                            <!-- <div class="lk__table-footer-btn-send" data-dismiss="modal">Отправить заявку</div> -->
                                            <input type="submit" value='Отправить заявку' class="lk__table-footer-btn-send">
                                        </div>
                                    </div>
                                </form>
                                <?php
                                if(isset($_SESSION['sended']) && ($_SESSION['sended'])) : ?>
                                <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.css">
                                <script src="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.js"></script>
                                <script>
                                    swal({
                                        title: 'Успешно отправлено!',
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
                </div>
            </div>
        </div>
    </div>
    <div class="footer-separator"></div>
    <script src="{!! asset('js/lk__products-counter.js') !!}"></script>
    <!-- серый футер-->
    <script src="{!! asset('js/footer-grey.js') !!}"></script>
    <!-- корректировка Тайтла-->
    <script src="{!! asset('js/lk__change-title.js') !!}"></script>
    <!-- ***** /Контент *****-->
@endsection
