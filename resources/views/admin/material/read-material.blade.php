@extends('layouts.admin')

@section('content')

    <div class="layout-content">
        <div class="layout-content-body">
            <h1 class="title-bar-title">Редактирование материала</h1>
            <p class="title-bar-description">Тут вы можете отредактировать материал на главной странице</p>
            <div class="row">
                <div class="col-md-8">
                    <div class="demo-form-wrapper">
                        <form action="/update-material" method="post" class="form form-horizontal" >
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Заголовок (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="title_ru" value="{!!$material->title_ru!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Заголовок (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="title_en" value="{!!$material->title_en!!}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Первый абзац (RU)</label>
                                <div class="col-sm-9">
                                    <textarea id="textarea-1" class="form-control" name="text_first_ru">{!!$material->text_first_ru!!}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Первый абзац (EN)</label>
                                <div class="col-sm-9">
                                    <textarea id="textarea-2" class="form-control" name="text_first_en">{!!$material->text_first_en!!}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Второй абзац (RU)</label>
                                <div class="col-sm-9">
                                    <textarea id="textarea-3" class="form-control" name="text_second_ru">{!!$material->text_second_ru!!}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Второй абзац (EN)</label>
                                <div class="col-sm-9">
                                    <textarea id="textarea-4" class="form-control" name="text_second_en">{!!$material->text_second_en!!}</textarea>
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