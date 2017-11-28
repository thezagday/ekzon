@extends('layouts.admin')

@section('content')
    <div class="layout-content">
        <div class="layout-content-body">
            <h1 class="title-bar-title">Редактирование "Партнерам"</h1>
            <p class="title-bar-description">Тут вы можете отредактировать информацию в разделе "Партнерам"</p>
            <div class="row">
                <div class="col-md-8">
                    <div class="demo-form-wrapper">
                        <form action="/update-partner" method="post" class="form form-horizontal">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Текст (RU)</label>
                                <div class="col-sm-9">
                                    <textarea id="textarea-1" class="form-control" name="text_ru">{!!$partner->text_ru!!}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Текста (EN)</label>
                                <div class="col-sm-9">
                                    <textarea id="textarea-2" class="form-control" name="text_en">{!!$partner->text_en!!}</textarea>
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