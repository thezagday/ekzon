@extends('layouts.admin')

@section('content')

    <div class="layout-content">
        <div class="layout-content-body">
            <h1 class="title-bar-title">Редактирование контактов</h1>
            <p class="title-bar-description">Тут вы можете отредактировать контактную информацию</p>
            <div class="row">
                <div class="col-md-8">
                    <div class="demo-form-wrapper">
                        <form action="/update-contacts" method="post" class="form form-horizontal">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Фирма (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="firm_ru" value="{!!$contacts[0]->firm_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Фирма (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="firm_en" value="{!!$contacts[0]->firm_en!!}">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Поле 1 (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="field_address_ru" value="{!!$contacts[0]->field_address_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Поле 1 (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="field_address_en" value="{!!$contacts[0]->field_address_en!!}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">{!!$contacts[0]->field_address_ru!!}</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="address_ru" value="{!!$contacts[0]->address_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">{!!$contacts[0]->field_address_en!!}</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="address_en" value="{!!$contacts[0]->address_en!!}">
                                </div>
                            </div>
                            <hr>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Поле 2 (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="field_reception_ru" value="{!!$contacts[0]->field_reception_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Поле 2 (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="field_reception_en" value="{!!$contacts[0]->field_reception_en!!}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">{!!$contacts[0]->field_reception_ru!!}</label>
                                <div class="col-sm-9">
                                    <textarea id="textarea-1" class="form-control" name="reception_ru">{!!$contacts[0]->reception_ru!!}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">{!!$contacts[0]->field_reception_en!!}</label>
                                <div class="col-sm-9">
                                    <textarea id="textarea-2" class="form-control" name="reception_en">{!!$contacts[0]->reception_en!!}</textarea>
                                </div>
                            </div>
                            <hr>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Поле 3</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="field_email" value="{!!$contacts[0]->field_email!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">{!!$contacts[0]->field_email!!} (RU)</label>
                                <div class="col-sm-9">
                                    <textarea id="textarea-3" class="form-control" name="email_ru">{!!$contacts[0]->email_ru!!}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">{!!$contacts[0]->field_email!!} (EN)</label>
                                <div class="col-sm-9">
                                    <textarea id="textarea-4" class="form-control" name="email_en">{!!$contacts[0]->email_en!!}</textarea>
                                </div>
                            </div>
                            <hr>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Поле 4 (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="field_requisites_ru" value="{!!$contacts[0]->field_requisites_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Поле 4 (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="field_requisites_en" value="{!!$contacts[0]->field_requisites_en!!}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">{!!$contacts[0]->field_requisites_ru!!} (RU)</label>
                                <div class="col-sm-9">
                                    <textarea id="textarea-5" class="form-control" name="requisites_ru">{!!$contacts[0]->requisites_ru!!}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">{!!$contacts[0]->field_requisites_en!!} (EN)</label>
                                <div class="col-sm-9">
                                    <textarea id="textarea-6" class="form-control" name="requisites_en">{!!$contacts[0]->requisites_en!!}</textarea>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Поле 5 (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="field_work_ru" value="{!!$contacts[0]->field_work_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Поле 5 (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="field_work_en" value="{!!$contacts[0]->field_work_en!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">{!!$contacts[0]->field_work_ru!!}</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="work_ru" value="{!!$contacts[0]->work_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">{!!$contacts[0]->field_work_en!!}</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="work_en" value="{!!$contacts[0]->work_en!!}">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Поле 6 (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="field_leadership_ru" value="{!!$contacts[0]->field_leadership_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Поле 6 (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="field_leadership_en" value="{!!$contacts[0]->field_leadership_en!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">{!!$contacts[0]->field_leadership_ru!!} (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="leadership_ru" value="{!!$contacts[0]->leadership_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">{!!$contacts[0]->field_leadership_en!!} (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="leadership_en" value="{!!$contacts[0]->leadership_en!!}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Имя (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="name_lead_ru" value="{!!$contacts[0]->name_lead_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Имя (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="name_lead_en" value="{!!$contacts[0]->name_lead_en!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Телефон (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="phone_lead_ru" value="{!!$contacts[0]->phone_lead_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Телефон (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="phone_lead_en" value="{!!$contacts[0]->phone_lead_en!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Email</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="mail_lead" value="{!!$contacts[0]->mail_lead!!}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">{!!$contacts[0]->field_leadership_ru!!} (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="vice_leadership_ru" value="{!!$contacts[0]->vice_leadership_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">{!!$contacts[0]->field_leadership_en!!} (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="vice_leadership_en" value="{!!$contacts[0]->vice_leadership_en!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Имя (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="name_vice_lead_ru" value="{!!$contacts[0]->name_vice_lead_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Имя (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="name_vice_lead_en" value="{!!$contacts[0]->name_vice_lead_en!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Телефон</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="vice_phone" value="{!!$contacts[0]->vice_phone!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Email</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="vice_mail" value="{!!$contacts[0]->vice_mail!!}">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Поле 7 (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="field_marketing_ru" value="{!!$contacts[0]->field_marketing_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Поле 7 (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="field_marketing_en" value="{!!$contacts[0]->field_marketing_en!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">{!!$contacts[0]->field_marketing_ru!!}</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="marketing_ru" value="{!!$contacts[0]->marketing_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">{!!$contacts[0]->field_marketing_en!!}</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="marketing_en" value="{!!$contacts[0]->marketing_en!!}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Имя (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="name_marketing_ru" value="{!!$contacts[0]->name_marketing_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Имя (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="name_marketing_en" value="{!!$contacts[0]->name_marketing_en!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Телефон </label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="phone_marketing" value="{!!$contacts[0]->phone_marketing!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Email </label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="mail_marketing" value="{!!$contacts[0]->mail_marketing!!}">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Поле 8 (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="field_tech_dep_ru" value="{!!$contacts[0]->field_tech_dep_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Поле 8 (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="field_tech_dep_en" value="{!!$contacts[0]->field_tech_dep_en!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">{!!$contacts[0]->field_tech_dep_ru!!} </label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="head_dep_ru" value="{!!$contacts[0]->head_dep_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">{!!$contacts[0]->field_tech_dep_en!!} </label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="head_dep_en" value="{!!$contacts[0]->head_dep_en!!}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Имя (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="name_head_dep_ru" value="{!!$contacts[0]->name_head_dep_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Имя (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="name_head_dep_en" value="{!!$contacts[0]->name_head_dep_en!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Телефон </label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="phone_head_dep" value="{!!$contacts[0]->phone_head_dep!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Email </label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="mail_head_dep" value="{!!$contacts[0]->mail_head_dep!!}">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Поле 9 (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="field_control_ru" value="{!!$contacts[0]->field_control_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Поле 9 (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="field_control_en" value="{!!$contacts[0]->field_control_en!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">{!!$contacts[0]->field_control_ru!!} </label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="head_con_ru" value="{!!$contacts[0]->head_con_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">{!!$contacts[0]->field_control_en!!} </label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="head_con_en" value="{!!$contacts[0]->head_con_en!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Имя (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="name_head_con_ru" value="{!!$contacts[0]->name_head_con_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Имя (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="name_head_con_en" value="{!!$contacts[0]->name_head_con_en!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Телефон </label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="phone_con" value="{!!$contacts[0]->phone_con!!}">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Поле 10 (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="field_bookkeeping_ru" value="{!!$contacts[0]->field_bookkeeping_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Поле 10 (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="field_bookkeeping_en" value="{!!$contacts[0]->field_bookkeeping_en!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">{!!$contacts[0]->field_bookkeeping_ru!!} </label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="head_bk_ru" value="{!!$contacts[0]->head_bk_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">{!!$contacts[0]->field_bookkeeping_en!!} </label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="head_bk_en" value="{!!$contacts[0]->head_bk_en!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Имя (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="name_head_bk_ru" value="{!!$contacts[0]->name_head_bk_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Имя (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="name_head_bk_en" value="{!!$contacts[0]->name_head_bk_en!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Телефон </label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="phone_bk" value="{!!$contacts[0]->phone_bk!!}">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Поле 11 (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="field_sales_ru" value="{!!$contacts[0]->field_sales_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Поле 11 (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="field_sales_en" value="{!!$contacts[0]->field_sales_en!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">{!!$contacts[0]->field_sales_ru!!} </label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="head_sales_ru" value="{!!$contacts[0]->head_sales_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">{!!$contacts[0]->field_sales_en!!} </label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="head_sales_en" value="{!!$contacts[0]->head_sales_en!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Имя (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="name_head_sales_ru" value="{!!$contacts[0]->name_head_sales_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Имя (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="name_head_sales_en" value="{!!$contacts[0]->name_head_sales_en!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Телефон </label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="phone_sales" value="{!!$contacts[0]->phone_sales!!}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">{!!$contacts[0]->field_sales_ru!!} </label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="lead_spec_ru" value="{!!$contacts[0]->lead_spec_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">{!!$contacts[0]->field_sales_en!!} </label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="lead_spec_en" value="{!!$contacts[0]->lead_spec_en!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Имя (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="name_lead_spec_ru" value="{!!$contacts[0]->name_lead_spec_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Имя (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="name_lead_spec_en" value="{!!$contacts[0]->name_lead_spec_en!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Телефон </label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="phone_lead_spec" value="{!!$contacts[0]->phone_lead_spec!!}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">{!!$contacts[0]->field_sales_ru!!} </label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="spec_bad_ru" value="{!!$contacts[0]->spec_bad_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">{!!$contacts[0]->field_sales_en!!} </label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="spec_bad_en" value="{!!$contacts[0]->spec_bad_en!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Телефон (Факс) (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="fax_bad_ru" value="{!!$contacts[0]->fax_bad_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Телефон (Факс) (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="fax_bad_en" value="{!!$contacts[0]->fax_bad_en!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Телефон </label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="phone_bad" value="{!!$contacts[0]->phone_bad!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Email </label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="mail_bad" value="{!!$contacts[0]->mail_bad!!}">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Поле 12 (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="field_sup_ru" value="{!!$contacts[0]->field_sup_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Поле 12 (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="field_sup_en" value="{!!$contacts[0]->field_sup_en!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">{!!$contacts[0]->field_sup_ru!!} </label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="head_sup_ru" value="{!!$contacts[0]->head_sup_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">{!!$contacts[0]->field_sup_en!!} </label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="head_sup_en" value="{!!$contacts[0]->head_sup_en!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Имя (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="name_sup_ru" value="{!!$contacts[0]->name_sup_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Имя (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="name_sup_en" value="{!!$contacts[0]->name_sup_en!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Телефон (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="phone_sup_ru" value="{!!$contacts[0]->phone_sup_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Телефон (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="phone_sup_en" value="{!!$contacts[0]->phone_sup_en!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Email </label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="mail_sup" value="{!!$contacts[0]->mail_sup!!}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn-primary" id="input_btn">Сохранить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop