@extends('layouts.admin')

@section('content')

    <div class="layout-content">
        <div class="layout-content-body">
            <h1 class="title-bar-title">Редактирование материала "О компании"</h1>
            <p class="title-bar-description">Тут вы можете отредактировать материал на странице "О компании"</p>
            <div class="row">
                <div class="col-md-8">
                    <div class="demo-form-wrapper">
                        <form action="/update-company" method="post" class="form form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Текст (RU)</label>
                                <div class="col-sm-9">
                                    <textarea id="textarea-1" class="form-control" name="text_ru">{!!$material->text_ru!!}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Текст (EN)</label>
                                <div class="col-sm-9">
                                    <textarea id="textarea-2" class="form-control" name="text_en">{!!$material->text_en!!}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Изображение</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="img" value="{!!$material->img!!}">
                                    <input type="file" name="img">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Дополнительный Текст (RU)</label>
                                <div class="col-sm-9">
                                    <textarea id="textarea-3" class="form-control" name="second_text_ru">{!!$material->second_text_ru!!}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Дополнительный Текст (EN)</label>
                                <div class="col-sm-9">
                                    <textarea id="textarea-4" class="form-control" name="second_text_en">{!!$material->second_text_en!!}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Год</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="year" value="{!!$year!!}">
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