@extends('layouts.app')

@section('content')
    <!-- ***** Контент ***** -->
    <div class="main-slider-slick page__title">
        <div class="main-slider-slick__item">
            <!-- <img class="main-slider__img" src="template-images/pharma__title.png"/> -->
            <div class="main-slider__img" style='background-image: url("template-images/pharma__title.png")'></div>
            <div class="main-slider__txt">
                <div class="main-slider__txt-title">Фармаконадзор</div>
            </div>
            <!-- Крошки -->
            <div class="page__title-crumbs inn_padd">
                <div class="page__title-crumbs__inner site-width"><a class="page__title-crumbs__main" href="#">Главная</a><i class="fa fa-angle-double-right page__title-crumbs__fa" aria-hidden="true"></i>
                    <div class="page__title-crumbs__child">Фармаконадзор</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Содержимое страницы "Фармаконадзор"-->
    <div class="pharma inn_padd">
        <div class="pharma__inner site-width">
            <!-- Узкий текст-->
            <div class="pharma-text news-single__post">
                <p>Фармаконадзор (pharmacovigilance) - совокупность мероприятий, связанных с научными исследованиями и деятельностью, направленными на выявление, оценку и понимание возможных негативных последствий медицинского применения лекарственных препаратов, предупреждение их возникновения и защиту пациентов. Для нас одной из ключевых задач является обеспечение потребителей качественными, эффективными и безопасными лекарственными средствами, польза от применения которых превышает возможные риски. </p>Порядок осуществления деятельности по фармаконадзору  устанавливает  Технический кодекс установившейся практики  ТКП 564-2015 (33050) «НАДЛЕЖАЩАЯ ПРАКТИКА ФАРМАКОНАДЗОРА. Good Pharmacovigilance Practice (GVP)», который введен в Республике Беларусь впервые и вступил в действие 15.08.2015.
                <p>Для осуществления мониторинга безопасности и эффективности наших лекарств мы создали отдел «Фармаконадзора». В соответствии с международными нормами ответственность за безопасность выпускаемых лекарственных средств несет производитель/держатель регистрационного удостоверения, поэтому он обязан осуществлять постоянный контроль за безопасностью своей продукции и с учетом новой информации регулярно проводить повторную оценку соотношения польза/риск. </p>
                <p>Приоритетными задачами службы Фармаконадзора ОАО «ЭКЗОН» является предотвращения нежелательных последствий применения зарегистрированных лекарственных средств нашего производства, содействие защите здоровья пациентов и общественного здоровья. Именно поэтому сбор информации, связанной с  безопасностью и эффективностью выпускаемых нами лекарственных средств – важная часть нашей работы.</p>
                <p>При выявлении побочных явлений наши специалисты ищут причину их возникновения, а также делают все необходимое, чтобы минимизировать и предотвратить возникновение побочных явлений в будущем. Мы будем благодарны за предоставление любой информации по выявлению нетипичных проявлений или побочных явлений, или отсутствия эффективности при применении лекарственных средств нашего производства. </p>
                <p>Если у Вас есть информация относительно возникшей (подозреваемой) нежелательной реакции или отсутствии эффективности при применении лекарственных средств производства ОАО «ЭКЗОН», просим Вас сообщить нам об этом по указанному телефону и электронной почте и/или заполнив форму по ссылкам ниже. </p>
                <p>Мы гарантируем соблюдение конфиденциальности  информации, направленной Вами, за исключением случаев, установленных законодательством.</p>
                <p>Перед заполнением формы просим Вас ознакомиться с <a href="/files/фармаконадзор.pdf" download>терминами и определениями</a> из ТКП 564-2015 (33050).</p>
            </div>
            <!-- Широкий текст-->
            <div class="news-single__post-title">Контакты службы фармаконадзора ОАО "Экзон"</div>
            <div class="pharma-form__cols">
                <div class="pharma-form__col-1_2 pharma-form__cols-text">
                    <div class="contacts-main__item-title contacts-address">{!! $_SESSION['lang'] == 'RU' ? 'Адрес' : 'Address'!!}</div>
                    <div class="pharma-form__cols-text-txt"><strong>{!! $_SESSION['lang'] == 'RU' ?  $contacts[0]->address_ru : $contacts[0]->address_en!!}</strong></div>
                </div>
                <div class="pharma-form__col-1_2 pharma-form__cols-text">
                    <div class="contacts-main__item-title contacts-receiption">{!! $_SESSION['lang'] == 'RU' ? 'Телефон' : 'Phone'!!}</div>
                    <div class="pharma-form__cols-text-txt"> {!! $_SESSION['lang'] == 'RU' ?  $contacts[0]->reception_ru : $contacts[0]->reception_en!!}</div>
                </div>
            </div>
            <div class="pharma-form__cols">
                <div class="pharma-form__col-1_2 pharma-form__cols-text">
                    <div class="contacts-main__item-title contacts-specialist">{!! $_SESSION['lang'] == 'RU' ? 'Ведущий специалист фармаконадзора предприятия' : 'Leading expert of pharmacovigilance of the enterprise' !!}</div>
                    <div class="pharma-form__cols-text-txt"> <strong>{!! $_SESSION['lang'] == 'RU' ? 'Анищенко Раиса Александровна' : 'Anischenko Raisa Alexandrovna' !!}</strong></div>
                </div>
                <div class="pharma-form__col-1_2 pharma-form__cols-text">
                    <div class="contacts-main__item-title contacts-specialist">E-mail					</div>
                    <div class="pharma-form__cols-text-txt"><strong>pharmaconadzor@ekzon.by</strong></div>
                </div>
            </div>
            <!-- Узкий текст-->
            <div class="news-single__post-title">Сообщить о проблемах, связанных с применением препарата</div>
            <div class="pharma-text">Вы можете заполнить электронную форму сообщения о нежелательной реакции / отсутствии терапевтической эффективности.</div>
            <!-- Табы-->
            <div class="pharma-tabs">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item"><a class="nav-link active" id="home-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="home" aria-expanded="true">Специалист</a></li>
                    <li class="nav-item"><a class="nav-link" id="home-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="home" aria-expanded="true">Потребитель</a></li>
                </ul>
            </div>
            <!-- Содержимое табов -->
            <div class="tab-content" id="myTabContent">
                <!-- Таб "Специалист"	-->
                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="home-tab">
                    <form class="pharma-form" id="pharma-form" action="/pharma-spec" method="POST" enctype="multipart/form-data">
                        <!-- Информация о человеке-->
                        {{csrf_field()}}
                        <div class="pharma-form__block">
                            <div class="pharma-form__block-title">Медицинский или фармацевтический работник, сообщающий о нежелательной реакции</div>
                            <div class="pharma-form__cols">
                                <div class="pharma-form__col-1_2">
                                    <input type="text"  required="required"  name="pharma__person-name" placeholder="Ф.И.О."/>
                                    <input type="text" required="required"  name="pharma__person-phone" placeholder="Телефон"/>
                                    <input type="text" required="required"  name="pharma__person-address" placeholder="Адрес учреждения"/>
                                    <div class="pharma-select__container">
                                        <select name="message">
                                            <option selected="selected" disabled="disabled">Сообщение</option>
                                            <option value="Первичное">Первичное</option>
                                            <option value="Повторное">Повторное</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="pharma-form__col-1_2" style="justify-content: center;">
                                    <input required="required"  type="text" name="pharma__person-position" placeholder="Должность и место работы"/>
                                    <div class="pharma-select__container">
                                        <select name="lechenie">
                                            <option selected="selected" disabled="disabled">Лечение</option>
                                            <option value="Стационарное">Стационарное</option>
                                            <option value="Амбулаторное">Амбулаторное</option>
                                            <option value="Самолечение">Самолечение</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Информация о пациенте-->
                        <div class="pharma-form__block">
                            <div class="pharma-form__block-title">Информация о пациенте</div>
                            <div class="pharma-form__cols">
                                <div class="pharma-form__col-1_2">
                                    <input required="required"  type="text" name="pharma__pacient-name" placeholder="Ф.И.О."/>
                                </div>
                                <div class="pharma-form__col-1_2">
                                    <input required="required"  type="text" name="pharma__pacient-number" placeholder="Номер медицинской карты"/>
                                </div>
                            </div>
                            <div class="pharma-form__cols pharma-form__cols-3">
                                <div class="pharma-form__col-1_3">
                                    <div class="pharma-select__container">
                                        <select name="pacientSex">
                                            <option selected="selected" disabled="disabled">Выберите пол</option>
                                            <option value="Мужской">Мужской</option>
                                            <option value="Женский">Женский</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="pharma-form__col-1_3">
                                    <input required="required"  type="text" name="age" placeholder="Возраст"/>
                                </div>
                                <div class="pharma-form__col-1_3">
                                    <input required="required"  type="text" name="weight" placeholder="Вес,кг"/>
                                </div>
                            </div>
                            <div class="pharma-form__cols pharma-form__cols-3">
                                <div class="pharma-form__col-1_3">
                                    <div class="pharma-select__container">
                                        <select name="pechen">
                                            <option selected="selected" disabled="disabled">Нарушение функции печени</option>
                                            <option value="Да">Да</option>
                                            <option value="Нет">Нет</option>
                                            <option value="Неизвестно">Неизвестно</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="pharma-form__col-1_3">
                                    <div class="pharma-select__container">
                                        <select name="pochki">
                                            <option selected="selected" disabled="disabled">Нарушение функции почек</option>
                                            <option value="da">Да</option>
                                            <option value="net">Нет</option>
                                            <option value="neizvestno">Неизвестно</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="pharma-form__col-1_3">
                                    <input required="required"  type="text" name="allergia" placeholder="Аллергия (указать на что)"/>
                                </div>
                            </div>
                        </div>
                        <!-- Подозреваемое лекарственное средство-->
                        <div class="pharma-form__block">
                            <div class="pharma-form__block-title">Подозреваемое лекарственное средство</div>
                            <div class="pharma-form__cols">
                                <div class="pharma-form__col-1_2">
                                    <input required="required"  type="text" name="internationalName" placeholder="Международное непатентованное название"/>
                                </div>
                                <div class="pharma-form__col-1_2">
                                    <input required="required"  type="text" name="tradeName" placeholder="Торговое название"/>
                                </div>
                            </div>
                            <!-- Подозреваемое лекарственное средство - Таблица-->
                            <div class="pharma-form__table">
                                <table>
                                    <thead>
                                    <tr>
                                        <th style="padding: 16px 10px;">Производитель</th>
                                        <th style="padding: 0;" colspan="3">
                                            <input  required="required"  type="text" name="new-manuf"/>
                                        </th>
                                        <th style="padding: 16px 10px;">Номер серии</th>
                                        <th style="padding: 0 ;">
                                            <input  required="required"  type="text" name="new-seria"/>
                                        </th>
                                    </tr>
                                    </thead>
                                    <thead>
                                    <tr>
                                        <th>Показание к применению</th>
                                        <th>Путь введения</th>
                                        <th>Разовая доза</th>
                                        <th>Кратность введения</th>
                                        <th>Дата начала терапии</th>
                                        <th>Дата окончания терапии</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <input  required="required"  name="med-need" type="text"/>
                                        </td>
                                        <td>
                                            <input required="required"  name="med-enter" type="text"/>
                                        </td>
                                        <td>
                                            <input required="required"  name="med-dose" type="text"/>
                                        </td>
                                        <td>
                                            <input  required="required" name="med-krat" type="text"/>
                                        </td>
                                        <td>
                                            <input  required="required" name="med-start" type="date" placeholder="дд.мм.гггг"/>
                                        </td>
                                        <td>
                                            <input  required="required" name="med-end" type="date" placeholder="дд.мм.гггг"/>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Другие одновременно принимаемые лекарственные средства-->
                        <div class="pharma-form__block">
                            <div class="pharma-form__block-title">Другие одновременно принимаемые лекарственные средства</div>
                            <div class="pharma-form__block-description">(Укажите "нет", если других лекарственных средств не принимал)</div>
                            <!-- Другие одновременно принимаемые лекарственные средства - Таблица-->
                            <div class="pharma-form__table">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Международное непатентованное название или торговое название лекарственного средства</th>
                                        <th>Показание к применению</th>
                                        <th>Путь введения</th>
                                        <th>Разовая доза</th>
                                        <th>Кратность введения</th>
                                        <th>Дата начала терапии</th>
                                        <th>Дата окончания терапии</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <input   name="med-other-name1" type="text"/>
                                        </td>
                                        <td>
                                            <input   name="med-other-need1" type="text"/>
                                        </td>
                                        <td>
                                            <input   name="med-other-enter1" type="text"/>
                                        </td>
                                        <td>
                                            <input   name="med-other-dose1" type="text"/>
                                        </td>
                                        <td>
                                            <input   name="med-other-krat1" type="text"/>
                                        </td>
                                        <td>
                                            <input   name="med-other-start1" type="date"/>
                                        </td>
                                        <td>
                                            <input   name="med-other-end1" type="date"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input   name="med-other-name2" type="text"/>
                                        </td>
                                        <td>
                                            <input   name="med-other-need2" type="text"/>
                                        </td>
                                        <td>
                                            <input   name="med-other-enter2" type="text"/>
                                        </td>
                                        <td>
                                            <input   name="med-other-dose2" type="text"/>
                                        </td>
                                        <td>
                                            <input   name="med-other-krat2" type="text"/>
                                        </td>
                                        <td>
                                            <input   name="med-other-start2" type="date"/>
                                        </td>
                                        <td>
                                            <input   name="med-other-end2" type="date"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input   name="med-other-name3" type="text"/>
                                        </td>
                                        <td>
                                            <input   name="med-other-need3" type="text"/>
                                        </td>
                                        <td>
                                            <input   name="med-other-enter3" type="text"/>
                                        </td>
                                        <td>
                                            <input  name="med-other-dose3" type="text"/>
                                        </td>
                                        <td>
                                            <input   name="med-other-krat3" type="text"/>
                                        </td>
                                        <td>
                                            <input   name="med-other-start3" type="date"/>
                                        </td>
                                        <td>
                                            <input   name="med-other-end3" type="date"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input   name="med-other-name4" type="text"/>
                                        </td>
                                        <td>
                                            <input   name="med-other-need4" type="text"/>
                                        </td>
                                        <td>
                                            <input   name="med-other-enter4" type="text"/>
                                        </td>
                                        <td>
                                            <input   name="med-other-dose4" type="text"/>
                                        </td>
                                        <td>
                                            <input   name="med-other-krat4" type="text"/>
                                        </td>
                                        <td>
                                            <input   name="med-other-start4" type="date"/>
                                        </td>
                                        <td>
                                            <input   name="med-other-end4" type="date"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input   name="med-other-name5" type="text"/>
                                        </td>
                                        <td>
                                            <input   name="med-other-need5" type="text"/>
                                        </td>
                                        <td>
                                            <input   name="med-other-enter5" type="text"/>
                                        </td>
                                        <td>
                                            <input   name="med-other-dose5" type="text"/>
                                        </td>
                                        <td>
                                            <input   name="med-other-krat5" type="text"/>
                                        </td>
                                        <td>
                                            <input   name="med-other-start5" type="date"/>
                                        </td>
                                        <td>
                                            <input   name="med-other-end5" type="date"/>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="pharma-form__cols">
                                <div class="pharma-form__col-1_2">
                                    <textarea class="opisaniePodProd" rows="5" cols="50" name="pharma-form" form="opisaniePodProd" placeholder="Описание подозреваемой нежелательной реакции"></textarea>
                                </div>
                                <div class="pharma-form__col-1_2">
                                    <input class="startDate inputDateForm"   name="startDate" placeholder="Дата начала   дд.мм.гг" type="text"/>
                                    <input class="finishDate inputDateForm"   name="finishDate" placeholder="Дата окончания   дд.мм.гг" type="text"/>
                                </div>
                            </div>
                            <div class="pharma-form__cols">
                                <div class="pharma-form__col-1_2">
                                    <div class="pharma-form__input-description">Результат прекращения приема подозреваемого лекарственного средства</div>
                                    <div class="pharma-select__container">
                                        <select name="resultatPrekrPriema">
                                            <option selected="selected" disabled="disabled">Выберите результат</option>
                                            <option value="Явное улучшение">Явное улучшение</option>
                                            <option value="Нет улучшения">Нет улучшения</option>
                                            <option value="Не поменялось">Не поменялось</option>
                                            <option value="Неизвестно">Неизвестно</option>
                                            <option value="Неприменимо">Неприменимо</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="pharma-form__col-1_2 mod_jc-flex-end">
                                    <div class="pharma-form__input-description">Сопутствующие заболевания, иные состояния или факторы риска</div>
                                    <input type="text"   name="soputstvZabolevania" placeholder="Сопутствующие заболевания"/>
                                </div>
                            </div>
                            <div class="pharma-form__cols">
                                <div class="pharma-form__col-1_2 mod_jc-flex-end">
                                    <div class="pharma-form__input-description">Оценка причинно-следственной связи</div>
                                    <div class="pharma-select__container">
                                        <select name="ocenkaPricinnoSledstvSvyazi">
                                            <option selected="selected" disabled="disabled">Выберите тип оценки</option>
                                            <option value="Достоверная">Достоверная</option>
                                            <option value="Вероятная">Вероятная</option>
                                            <option value="Возможная">Возможная</option>
                                            <option value="Сомнительная">Сомнительная</option>
                                            <option value="Условная">Условная</option>
                                            <option value="Затрудняюсь ответить">Затрудняюсь ответить</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="pharma-form__col-1_2">
                                    <div class="pharma-form__input-description">Исход</div>
                                    <div class="pharma-select__container">
                                        <select name="ishod">
                                            <option selected="selected" disabled="disabled">Выберите исход</option>
                                            <option value="Выздоровление без последствий">Выздоровление без последствий</option>
                                            <option value="Улучшение состояния">Улучшение состояния</option>
                                            <option value="Выздоровление с последствиями(указать)">Выздоровление с последствиями(указать)</option>
                                            <option value="Состояние без изменений(Еще не выздоровел)">Состояние без изменений(Еще не выздоровел)</option>
                                            <option value="Смерть возможно связана с нежелательной реакцией">Смерть возможно связана с нежелательной реакцией</option>
                                            <option value="Смерть не связана с нежелательной реакцией">Смерть не связана с нежелательной реакцией</option>
                                            <option value="Исход неизвестен">Исход неизвестен</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="pharma-form__cols">
                                <div class="pharma-form__col-1_2">
                                    <div class="pharma-form__input-description">Предпринятые меры</div>
                                    <div class="pharma-select__container">
                                        <select name="predprinyatieMeri">
                                            <option selected="selected" disabled="disabled">Выберите предпринятые меры</option>
                                            <option value="Без лечения">Без лечения</option>
                                            <option value="Отмена подозреваемого лекарственного средства">Отмена подозреваемого лекарственного средства</option>
                                            <option value="Снижение дозы подозреваемого лекарственного средства">Снижение дозы подозреваемого лекарственного средства</option>
                                            <option value="Отмена сопутствующего лечения">Отмена сопутствующего лечения</option>
                                            <option value="Применение медикаментозной терапии">Применение медикаментозной терапии</option>
                                            <option value="Немедикаментозная терапия(в том числе хирургическое вмешательство)">Немедикаментозная терапия(в том числе хирургическое вмешательство)</option>
                                            <option value="Другое, указать">Другое, указать</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="pharma-form__col-1_2">
                                    <div class="pharma-form__input-description">Лекарственные средства, применяемые для купирования нежелательной реакции(если потребовалось)</div>
                                    <input type="text"   name="lekarstvennieSredstva" placeholder="Лекарственные средства"/>
                                </div>
                            </div>
                            <div class="pharma-form__cols">
                                <div class="pharma-form__col-1_2">
                                    <div class="pharma-form__input-description">Другие предпринятые меры</div>
                                    <input type="text"   name="drugieMeri" placeholder="Другие предпринятые меры"/>
                                </div>
                                <div class="pharma-form__col-1_2"></div>
                            </div>
                            <div class="pharma-form__cols">
                                <div class="pharma-form__col-1_2">
                                    <div class="pharma-form__input-description">Критерии отнесения к серьезным нежелательным реакциям(отметьте, если это подходит)</div>
                                    <div class="pharma-select__container">
                                        <select name="kriteriiOtneseniya">
                                            <option selected="selected" disabled="disabled">Выберите критерии</option>
                                            <option value="Смерть">Смерть</option>
                                            <option value="Угроза жизни">Угроза жизни</option>
                                            <option value="Госпитализация и ее продление">Госпитализация и ее продление</option>
                                            <option value="Врожденные аномалии">Врожденные аномалии</option>
                                            <option value="Применение медикаментозной терапии">Применение медикаментозной терапии</option>
                                            <option value="Инвалидность/Нетрудоспособность">Инвалидность/Нетрудоспособность</option>
                                            <option value="Необходимость медицинского вмешательства для предотвращения вышеперечисленных состояний">Необходимость медицинского вмешательства для предотвращения вышеперечисленных состояний</option>
                                            <option value="Неприменимо">Неприменимо</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="pharma-form__col-1_2">
                                    <div class="pharma-form__input-description">Отмечено ли повторение нежелательной реакции после повторного назначения лекарственного средства</div>
                                    <div class="pharma-select__container">
                                        <select name="OtmechenoLiPovtorenie">
                                            <option selected="selected" disabled="disabled">Выберите вариант</option>
                                            <option value="Возобновление нежелательной реакции">Возобновление нежелательной реакции</option>
                                            <option value="Отсутствие нежелательной реакции">Отсутствие нежелательной реакции</option>
                                            <option value="Повторно не назначалось">Повторно не назначалось</option>
                                            <option value="Отсутствие нежелательной реакции при снижении дозы">Отсутствие нежелательной реакции при снижении дозы</option>
                                            <option value="Неизвестно">Неизвестно</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="pharma-form__cols">
                                <div class="pharma-form__col pharma-form__col-1_2 mod_d-f">
                                    <div class="pharma-form__input-description">Подозреваемое лекарственное средство применяется в</div>
                                    <div class="pharma-select__container">
                                        <select name="sredstvoPrimenyaetsyaV">
                                            <option selected="selected" disabled="disabled">Выберите вариант</option>
                                            <option value="Медицинской практике">Медицинской практике</option>
                                            <option value="Клинических испытаниях(Укажите номер протокола клинической операции)">Клинических испытаниях(Укажите номер протокола клинической операции)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="pharma-form__col-1_2"></div>
                            </div>
                        </div>
                        <!-- Важная дополнительная информация-->
                        <div class="pharma-form__block">
                            <div class="pharma-form__block-title">Важная дополнительная информация</div>
                            <div class="pharma-form__thin" style="margin-left:auto;margin-right:auto;">
                                <div class="pharma-form__input-description">Данные клинических, лабораторных, рентгенологических исследований и аутопсии, включая определение концентрации лекарственных средств в крови (тканях), если таковые имеются и связаны с нежелательной реакцией (пожалуйста, приведите даты)      </div>
                                <input   class="setDate inputDateForm" name="setDate" placeholder="Укажите даты   дд.мм.гг" type="text"/>
                                <input   type="text" name="soputZabolev" placeholder="Сопутствующие заболевания, амнестические данные"/>
                                <input   type="text" name="vzaimodeystviya" placeholder="Подозреваемые лекарственные взаимодействия"/>
                                <div class="pharma-form__input-description">Для врожденных аномалий указать все другие лекарственные средства, принимаемые во время беременности, а также дату последней менструации (укажите «нет» если такие средства отсутствуют)</div>
                                <input   type="text" name="drugieSredstva" placeholder="Другие лекарственные средства (укажите «нет», если такие средства отсутствуют)"/>
                                <div class="pharma-form__input-description">Пожалуйста, приложите другие страницы, если это необходимо</div>
                                <input   type="file" name="dopStr" placeholder=""/>
                                <div class="pharma-form__cols">
                                    <div class="pharma-form__col-1_2">
                                        <input   class="date inputDateForm" name="date" placeholder="Дата   дд.мм.гг" type="text"/>
                                    </div>
                                    <div class="pharma-form__col-1_2">
                                        <input   type="text" name="podpisVracha" placeholder="Подпись (Инициалы врача)"/>
                                    </div>
                                </div>
                                <div class="pharma-form__cols">
                                    <div class="pharma-form__note">* - отмечены поля, обязательные для заполнения </div>
                                </div>
                            </div>
                            <input type="hidden" name="request_url" class="form-control" >
                            <div class="pharma-form__cols">
                                <div class="pharma-form__cols pharma-form__submit">
                                    <input   class="contacts-form__submit" type="submit" value="ОТПРАВИТЬ"/>
                                </div>
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
                <!-- Таб "Потребитель"	-->
                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="home-tab">
                    <form class="pharma-form pharma-form-consumer" id="pharma-form-consumer" action="/pharma-cons" method="post">
                        {{csrf_field()}}
                        <!-- Персональные данные-->
                        <div class="pharma-form__block">
                            <div class="pharma-form__block-title">Персональные данные</div>
                            <div class="pharma-form__cols">
                                <div class="pharma-form__col-1_2">
                                    <input   type="text" name="pharma__cunsomer-name" placeholder="Фамилия Имя Отчество*"/>
                                </div>
                                <div class="pharma-form__col-1_2">
                                    <input   type="text" name="pharma__cunsomer-country" placeholder="Страна*"/>
                                </div>
                            </div>
                            <div class="pharma-form__cols">
                                <div class="pharma-form__col-1_2">
                                    <input   type="text" name="pharma__cunsomer-age" placeholder="Возраст*"/>
                                </div>
                                <div class="pharma-form__col-1_2">
                                    <div class="pharma-select__container">
                                        <select name="sex">
                                            <option selected="selected" disabled="disabled">Пол*</option>
                                            <option value="Мужской">Мужской</option>
                                            <option value="Женский">Женский</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="pharma-form__cols">
                                <div class="pharma-form__col-1_2">
                                    <input   type="text" name="pharma__cunsomer-phone" placeholder="Контактный телефон*"/>
                                </div>
                                <div class="pharma-form__col-1_2">
                                    <input   type="text" name="pharma__cunsomer-mail" placeholder="Контактный e-mail*"/>
                                </div>
                            </div>
                        </div>
                        <!-- Информация о подозреваемом лекарственном средстве-->
                        <div class="pharma-form__block">
                            <div class="pharma-form__block-title">Информация о подозреваемом лекарственном средстве</div>
                            <div class="pharma-form__cols">
                                <div class="pharma-form__col-1_2">
                                    <textarea class="opisaniePodProd" rows="5" cols="50" name="drugsName"  placeholder="Торговое название лекарственного средства, которое Вы применяли (см. упаковку)*"></textarea>
                                </div>
                                <div class="pharma-form__col-1_2" style="justify-content:flex-start;">
                                    <input   class="mod_margin-top-0" type="text" name="serial" placeholder="Номер серии (см. упаковку)*"/>
                                </div>
                            </div>
                        </div>
                        <!-- Информация о нежелательной реакции / отсутствии эффективности-->
                        <div class="pharma-form__block">
                            <div class="pharma-form__block-title">Информация о нежелательной реакции / отсутствии эффективности</div>
                            <div class="pharma-form__cols">
                                <div class="pharma-form__col-1_2">
                                    <textarea class="opisaniePodProd" rows="5" cols="50" name="opisanieSluchaya"  placeholder="Описание случая нежелательной реакции /отсутствии эффективности*"></textarea>
                                </div>
                                <div class="pharma-form__col-1_2"></div>
                            </div>
                        </div>
                        <input   type="hidden" name="request_url" class="form-control" >
                        <div class="pharma-form__block pharma-text">
                            <div class="pharma-form__block-title">Отправляя эту форму, Вы принимаете нашу <a href="#">политику конфиденциальности.</a></div>
                            <div class="pharma-form__cols">
                                <div class="pharma-form__cols pharma-form__submit">
                                    <input class="contacts-form__submit" type="submit" value="ОТПРАВИТЬ"/>
                                </div>
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
    <div class="footer-separator"></div>
    <!-- Корректировка Тайтла "Фармаконадзора"-->
    <script src="{!! asset('js/pharma__change-title.js') !!}"></script>
    <!-- Корректировка полей ввода даты-->
    <script src="{!! asset('js/inputDateForm.js') !!}"></script>
    <!-- серый футер-->
    <script src="{!! asset('js/footer-grey.js') !!}"></script>
    <!-- ***** /Контент *****-->
@stop
