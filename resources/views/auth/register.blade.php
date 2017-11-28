@extends('layouts.app')

@section('content')
    <!-- ***** Контент ***** -->
    <div class="main-slider-slick page__title">
        <div class="main-slider-slick__item"><img class="main-slider__img" src="template-images/pharma__title.png"/>
            <div class="main-slider__txt">
                <div class="main-slider__txt-title">{!! $_SESSION['lang'] == 'RU' ? 'Регистрация партнера' : 'Registration' !!}</div>
            </div>
            <!-- Крошки -->
            <div class="page__title-crumbs inn_padd">
                <div class="page__title-crumbs__inner site-width"><a class="page__title-crumbs__main" href="/">{!! $_SESSION['lang'] == 'RU' ? 'Главная' : 'Main' !!}</a><i class="fa fa-angle-double-right page__title-crumbs__fa" aria-hidden="true"></i>
                    <div class="page__title-crumbs__child">{!! $_SESSION['lang'] == 'RU' ? 'Регистрация партнера' : 'Registration' !!}</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Главные контакты-->
    <div class="pharma reg-partner inn_padd">
        <div class="pharma__inner site-width">
            <form class="pharma-form" action="/mail-register" method="post">
                {{ csrf_field() }}
                <div class="news-single__post-title">{!! $_SESSION['lang'] == 'RU' ? 'Сообщите нам ваши персональные данные' : 'Tell us your personal data' !!}</div>
                <div class="pharma-text">{!! $_SESSION['lang'] == 'RU' ? "Заполните форму заявки ниже.<br/>После получения ваших персональных данных наш менеджер свяжется с вами и проконсультирует о дальнейших действиях для завершения регистраци компании-партнера." : 'Fill out the application form below. <br/> After receiving your personal data, our manager will contact you and advise you on further actions to determine the registration of the partner company.' !!}</div>
                <div class="pharma-form__cols">
                    <div class="pharma-form__col-1_2">
                        <input type="text" required="required"  name="reg__fio" placeholder="{!! $_SESSION['lang'] == 'RU' ? 'Фамилия Имя Отчество руководителя*' : 'Name*' !!}"/>
                        <input type="email" required="required"  name="reg__mail" placeholder="{!! $_SESSION['lang'] == 'RU' ? 'Контактный e-mail*' : 'E-mail*' !!}"/>
                        <input type="text" required="required"  name="reg__phone" placeholder="{!! $_SESSION['lang'] == 'RU' ? 'Контактный телефон*' : 'Phone*' !!}"/>
                    </div>
                    <div class="pharma-form__col-1_2">
                        <input type="text" required="required"  name="reg__org" placeholder="{!! $_SESSION['lang'] == 'RU' ? 'Наименование организации(ИП, Юрлицо)*' : 'Organization*' !!}"/>
                        <input type="text" required="required"  name="reg__unp" placeholder="{!! $_SESSION['lang'] == 'RU' ? 'УНП*' : 'UPR*' !!}"/>
                        <input type="text" required="required"  name="reg__strana" placeholder="{!! $_SESSION['lang'] == 'RU' ? 'Страна*' : 'Country*' !!}"/>
                    </div>
                </div>
                <div class="pharma-form__cols">
                    <div class="pharma-form__col-1_2 reg-partner__text-area">
                        <textarea class="opisaniePodProd" rows="5" cols="50" name="desc" placeholder="{!! $_SESSION['lang'] == 'RU' ? 'Дополнительное персональное сообщение' : 'Message' !!}"></textarea>
                    </div>
                    <div class="pharma-form__col-1_2 reg-partner__inputs">
                        <input type="text"  required="required"  name="reg__address" placeholder="{!! $_SESSION['lang'] == 'RU' ? 'Адрес: индекс, город, улица, дом*' : 'Address*' !!}"/>
                        <input type="text" name="reg__office" placeholder="{!! $_SESSION['lang'] == 'RU' ? 'Номер офиса(если есть)' : 'Office' !!}"/>
                    </div>
                </div>
                <input type="hidden" name="request_url" class="form-control" required="required">
                <div class="pharma-form__cols">
                    <div class="pharma-form__cols pharma-form__submit">
                        <input class="contacts-form__submit" type="submit" value="{!! $_SESSION['lang'] == 'RU' ? 'ОТПРАВИТЬ ЗАЯВКУ НА РЕГИСТРАЦИЮ' : 'SEND' !!}"  id="reg-partner-submit"/>
                    </div>
                </div>
            </form>
            <?php
            if(isset($_SESSION['sended']) && ($_SESSION['sended'])) : ?>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.css">
            <script src="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.js"></script>
            <script>
                swal({
                    title: 'Запрос на регистрацию успешно выполнен!',
                    timer: 3000,
                    type: 'success',
                    showCancelButton: false,
                    showConfirmButton: false
                });
            </script>
            <?php $_SESSION['sended'] = null; endif; ?>
        </div>
    </div>
    <div class="footer-separator"></div>
    <!-- серый футер-->
    <script src="{!! asset('js/footer-grey.js') !!}"></script>
    <!-- Корректировка Тайтла "Регистрация партнера"-->
    <script src="{!! asset('js/reg-partner__change-title.js') !!}"></script>
    <!-- Вызов модального окна-->
    <script src="{!! asset('js/accept-modal.js') !!}"></script>
    <!-- ***** /Контент *****-->

@endsection
