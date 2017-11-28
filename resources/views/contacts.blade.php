@extends('layouts.app')

@section('content')
    <!-- ***** Контент ***** -->
    <div class="main-slider-slick page__title">
        <div class="main-slider-slick__item">
            <!-- <img class="main-slider__img" src="{!! $pageMaterial->img !!}"/> -->
            <div class="main-slider__img" style='background-image: url("{!! $pageMaterial->img !!}")'></div>
            <div class="main-slider__txt">
                <div class="main-slider__txt-title">{!! $_SESSION['lang'] == 'RU' ? 'Контакты' : 'Contacts' !!}</div>
            </div>
            <!-- Крошки		-->
            <div class="page__title-crumbs inn_padd">
                <!-- <div class="page__title-crumbs__inner site-width"><a class="page__title-crumbs__main" href="/">{!! $_SESSION['lang'] == 'RU' ? 'Главная' : 'Main' !!}<i class="fa fa-angle-double-right page__title-crumbs__fa" aria-hidden="true"></i><a class="page__title-crumbs__child" href="/contacts">{!! $_SESSION['lang'] == 'RU' ? 'Контакты' : 'Contacts' !!}</a></a></div> -->
                <div class="page__title-crumbs__inner site-width">
                  <a class="page__title-crumbs__main" href="/">{!! $_SESSION['lang'] == 'RU' ? 'Главная' : 'Main' !!}</a>
                    <i class="fa fa-angle-double-right page__title-crumbs__fa" aria-hidden="true"></i>
                    {!! $_SESSION['lang'] == 'RU' ? 'Контакты' : 'Contacts' !!}
                </div>
            </div>
        </div>
    </div>
    <!-- Главные контакты-->
    <div class="contacts-main inn_padd">
        <div class="contacts-main__inner site-width">
            <!-- Левая колонка-->
            <div class="contacts-main__col">
                <!-- Заголовок колонки-->
                <div class="contacts-main__col-title contacts-title">{!! $_SESSION['lang'] == 'RU' ? $contact->firm_ru : $contact->firm_en !!}
                </div>
                <div class="contacts-main__items">
                    <!-- Айтем-->
                    <div class="contacts-main__item">
                        <!-- Заголовок айтема-->
                        <div class="contacts-main__item-title contacts-address">{!! $_SESSION['lang'] == 'RU' ? $contact->field_address_ru : $contact->field_address_en !!}</div>
                        <!-- Содержимое айтема-->
                        <div class="contacts-main__item-txt"><strong>{!! $_SESSION['lang'] == 'RU' ? $contact->address_ru : $contact->address_en !!}</strong></div>
                    </div>
                    <!-- Айтем-->
                    <div class="contacts-main__item">
                        <!-- Заголовок айтема-->
                        <div class="contacts-main__item-title contacts-receiption">{!! $_SESSION['lang'] == 'RU' ? $contact->field_reception_ru : $contact->field_reception_en !!}</div>
                        <!-- Содержимое айтема-->
                        <div class="contacts-main__item-txt"> {!! $_SESSION['lang'] == 'RU' ? $contact->reception_ru : $contact->reception_en !!}</div>
                    </div>
                    <!-- Айтем-->
                    <div class="contacts-main__item">
                        <!-- Заголовок айтема-->
                        <div class="contacts-main__item-title contacts-email">{!! $contact->field_email !!}</div>
                        <!-- Содержимое айтема-->
                        <div class="contacts-main__item-txt"> {!! $_SESSION['lang'] == 'RU' ? $contact->email_ru : $contact->email_en !!}</div>
                    </div>
                    <!-- Айтем-->
                    <div class="contacts-main__item">
                        <!-- Заголовок айтема-->
                        <div class="contacts-main__item-title contacts-requisites">{!! $_SESSION['lang'] == 'RU' ? $contact->field_requisites_ru : $contact->field_requisites_en !!}</div>
                        <!-- Содержимое айтема-->
                        <div class="contacts-main__item-txt"> {!! $_SESSION['lang'] == 'RU' ? $contact->requisites_ru : $contact->requisites_en !!}</div>
                    </div>
                    <!-- Айтем-->
                    <div class="contacts-main__item">
                        <!-- Заголовок айтема-->
                        <div class="contacts-main__item-title contacts-rejim">{!! $_SESSION['lang'] == 'RU' ? $contact->field_work_ru : $contact->field_work_en !!}</div>
                        <!-- Содержимое айтема-->
                        <div class="contacts-main__item-txt">{!! $_SESSION['lang'] == 'RU' ? $contact->work_ru : $contact->work_en !!}</div>
                    </div>
                </div>
            </div>
            <!-- Правая колонка-->
            <div class="contacts-main__col">
                <!-- Заголовок колонки-->
                <div class="contacts-main__col-title contacts-title">{!! $_SESSION['lang'] == 'RU' ? 'СВЯЗЬ С МЕДИЦИНСКИМИ ПРЕДСТАВИТЕЛЯМИ' : 'COMMUNICATION WITH MEDICAL REPRESENTATIVES' !!}</div>
                <!-- Контактная форма-->
                <div class="contacts-main__form">
                    <form class="contacts-form" action="/med" method="POST">
                        {{csrf_field()}}
                        <div class="contacts-form__city">
                            <input type="text" id="city" name="city" placeholder="{!! $_SESSION['lang'] == 'RU' ? 'Выбрать город' : 'City' !!}"/>
                        </div>
                        <div class="contacts-form__phone">
                            <input type="text" id="phone" name="phone" placeholder="{!! $_SESSION['lang'] == 'RU' ? 'Введите номер телефона' : 'Phone' !!}"/>
                        </div>
                        <div class="contacts-form__face">
                            <input type="text" id="face" name="name" placeholder="{!! $_SESSION['lang'] == 'RU' ? 'Контактное лицо' : 'Name' !!}"/>
                        </div>
                        <input type="hidden" name="request_url" class="form-control" required="required">
                        <input class="contacts-form__submit" type="submit" value="{!! $_SESSION['lang'] == 'RU' ? 'Отправить заявку' : 'Send' !!}"/>
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
                <!-- Карта-->
                <div class="contacts-main__map">
                    <iframe src="https://yandex.by/map-widget/v1/-/CBUXiWFqTD" height="100%" width="100%" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Другие контакты-->
    <div class="contacts-other inn_padd">
        <div class="contacts-other__inner site-width">
            <!-- Левая колонка-->
            <div class="contacts-other__col">
                <!-- Айтем-->
                <div class="contacts-other__item">
                    <div class="contacts-other__item-title contacts-title">{!! $_SESSION['lang'] == 'RU' ? $contact->field_leadership_ru : $contact->field_leadership_en !!}</div>
                    <!-- Саб-айтем-->
                    <div class="contacts-other__sub-item">
                        <div class="contacts-other__sub-item-title"> {!! $_SESSION['lang'] == 'RU' ? $contact->leadership_ru : $contact->leadership_en !!}</div>
                        <div class="contacts-other__sub-item-txt">{!! $_SESSION['lang'] == 'RU' ? $contact->name_lead_ru : $contact->name_lead_en !!}
                            <div class="contacts-other-phone">{!! $_SESSION['lang'] == 'RU' ? $contact->phone_lead_ru : $contact->phone_lead_en !!}</div>
                            <div class="contacts-other-mail">{!! $contact->mail_lead !!}</div>
                        </div>
                    </div>
                    <!-- Саб-айтем-->
                    <div class="contacts-other__sub-item">
                        <div class="contacts-other__sub-item-title">{!! $_SESSION['lang'] == 'RU' ? $contact->vice_leadership_ru : $contact->vice_leadership_en !!}</div>
                        <div class="contacts-other__sub-item-txt">{!! $_SESSION['lang'] == 'RU' ? $contact->name_vice_lead_ru : $contact->name_vice_lead_en !!}
                            <div class="contacts-other-phone">{!! $contact->vice_phone !!}</div>
                            <div class="contacts-other-mail">{!! $contact->vice_mail !!}</div>
                        </div>
                    </div>
                </div>
                <!-- Айтем-->
                <div class="contacts-other__item">
                    <div class="contacts-other__item-title contacts-title">{!! $_SESSION['lang'] == 'RU' ? $contact->field_marketing_ru : $contact->field_marketing_en !!}</div>
                    <!-- Саб-айтем-->
                    <div class="contacts-other__sub-item">
                        <div class="contacts-other__sub-item-title"> {!! $_SESSION['lang'] == 'RU' ? $contact->marketing_ru : $contact->marketing_en !!}</div>
                        <div class="contacts-other__sub-item-txt">{!! $_SESSION['lang'] == 'RU' ? $contact->name_marketing_ru : $contact->name_marketing_en !!}
                            <div class="contacts-other-phone">{!! $contact->phone_marketing !!}</div>
                            <div class="contacts-other-mail">{!! $contact->mail_marketing !!}</div>
                        </div>
                    </div>
                </div>
                <!-- Айтем-->
                <div class="contacts-other__item">
                    <div class="contacts-other__item-title contacts-title">{!! $_SESSION['lang'] == 'RU' ? $contact->field_tech_dep_ru : $contact->field_tech_dep_en !!}</div>
                    <!-- Саб-айтем-->
                    <div class="contacts-other__sub-item">
                        <div class="contacts-other__sub-item-title"> {!! $_SESSION['lang'] == 'RU' ? $contact->head_dep_ru : $contact->head_dep_en !!}</div>
                        <div class="contacts-other__sub-item-txt">{!! $_SESSION['lang'] == 'RU' ? $contact->name_head_dep_ru : $contact->name_head_dep_en !!}
                            <div class="contacts-other-phone">{!! $contact->phone_head_dep !!}</div>
                            <div class="contacts-other-mail">{!! $contact->mail_head_dep !!}</div>
                        </div>
                    </div>
                </div>
                <!-- Айтем-->
                <div class="contacts-other__item">
                    <div class="contacts-other__item-title contacts-title">{!! $_SESSION['lang'] == 'RU' ? $contact->field_control_ru : $contact->field_control_en !!}</div>
                    <!-- Саб-айтем-->
                    <div class="contacts-other__sub-item">
                        <div class="contacts-other__sub-item-title"> {!! $_SESSION['lang'] == 'RU' ? $contact->head_con_ru : $contact->head_con_en !!}</div>
                        <div class="contacts-other__sub-item-txt">{!! $_SESSION['lang'] == 'RU' ? $contact->name_head_con_ru : $contact->name_head_con_en !!}
                            <div class="contacts-other-phone">{!! $contact->phone_con !!}</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Правая колонка-->
            <div class="contacts-other__col">
                <!-- Айтем-->
                <div class="contacts-other__item">
                    <div class="contacts-other__item-title contacts-title">{!! $_SESSION['lang'] == 'RU' ? $contact->field_bookkeeping_ru : $contact->field_bookkeeping_en !!}</div>
                    <!-- Саб-айтем-->
                    <div class="contacts-other__sub-item">
                        <div class="contacts-other__sub-item-title"> {!! $_SESSION['lang'] == 'RU' ? $contact->head_bk_ru : $contact->head_bk_en !!}</div>
                        <div class="contacts-other__sub-item-txt">{!! $_SESSION['lang'] == 'RU' ? $contact->name_head_bk_ru : $contact->name_head_bk_en !!}
                            <div class="contacts-other-phone">{!! $contact->phone_bk !!}</div>
                        </div>
                    </div>
                </div>
                <!-- Айтем-->
                <div class="contacts-other__item">
                    <div class="contacts-other__item-title contacts-title">{!! $_SESSION['lang'] == 'RU' ? $contact->field_sales_ru : $contact->field_sales_en !!}</div>
                    <!-- Саб-айтем-->
                    <div class="contacts-other__sub-item">
                        <div class="contacts-other__sub-item-title"> {!! $_SESSION['lang'] == 'RU' ? $contact->head_sales_ru : $contact->head_sales_en !!}</div>
                        <div class="contacts-other__sub-item-txt">{!! $_SESSION['lang'] == 'RU' ? $contact->name_head_sales_ru : $contact->name_head_sales_en !!}
                            <div class="contacts-other-phone">{!! $contact->phone_sales !!}</div>
                        </div>
                    </div>
                    <!-- Саб-айтем-->
                    <div class="contacts-other__sub-item">
                        <div class="contacts-other__sub-item-title"> {!! $_SESSION['lang'] == 'RU' ? $contact->lead_spec_ru : $contact->lead_spec_en !!}</div>
                        <div class="contacts-other__sub-item-txt">{!! $_SESSION['lang'] == 'RU' ? $contact->name_lead_spec_ru : $contact->name_lead_spec_en !!}
                            <div class="contacts-other-phone">{!! $contact->phone_lead_spec !!}</div>
                        </div>
                    </div>
                    <!-- Саб-айтем-->
                    <div class="contacts-other__sub-item">
                        <div class="contacts-other__sub-item-title"> {!! $_SESSION['lang'] == 'RU' ? $contact->spec_bad_ru : $contact->spec_bad_en !!}</strong>
                            <div class="contacts-other-fax">{!! $_SESSION['lang'] == 'RU' ? $contact->fax_bad_ru : $contact->fax_bad_en !!}</div>
                            <div class="contacts-other-phone">{!! $contact->phone_bad !!}</div>
                            <div class="contacts-other-mail">{!! $contact->mail_bad !!}</div>
                        </div>
                    </div>
                </div>
                <!-- Айтем-->
                <div class="contacts-other__item">
                    <div class="contacts-other__item-title contacts-title">{!! $_SESSION['lang'] == 'RU' ? $contact->field_sup_ru : $contact->field_sup_en !!}</div>
                    <!-- Саб-айтем-->
                    <div class="contacts-other__sub-item">
                        <div class="contacts-other__sub-item-title"> {!! $_SESSION['lang'] == 'RU' ? $contact->head_sup_ru : $contact->head_sup_en !!}</div>
                        <div class="contacts-other__sub-item-txt">{!! $_SESSION['lang'] == 'RU' ? $contact->name_sup_ru : $contact->name_sup_en !!}
                            <div class="contacts-other-fax">{!! $_SESSION['lang'] == 'RU' ? $contact->phone_sup_ru : $contact->phone_sup_en !!}</div>
                            <div class="contacts-other-mail">{!! $contact->mail_sup !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- серый футер-->
    <script src="js/footer-grey.js"></script>
    <!-- ***** /Контент *****-->
@stop
