@extends('layouts.admin')

@section('content')
    <div class="layout-content">
        <div class="layout-content-body">
            <h1 class="title-bar-title">Создание новой новости</h1>
            <p class="title-bar-description">Тут вы можете добавить новую новость</p>
            <div class="row">
                <div class="col-md-8">
                    <div class="demo-form-wrapper">
                        <form action="/add-news" method="post" class="form form-horizontal" enctype="multipart/form-data">
                            <p>
                                {{ csrf_field() }}

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Заголовок (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="title_ru" value="" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Заголовок (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="title_en" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Краткое описание (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="prev_text_ru" value="" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Краткое описание (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="prev_text_en" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Новость (RU)</label>
                                <div class="col-sm-9">
                                    <textarea id="textarea-1" name="text_ru" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Новость (EN)</label>
                                <div class="col-sm-9">
                                    <textarea id="textarea-2" name="text_en" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Дата</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="date" value="" placeholder="yyyy-mm-dd" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Картинка по умолчанию</label>
                                <div class="col-sm-9">
                                    <input type="file" name="default_img">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Акция</label>
                                <div class="col-sm-9">
                                    <label><input type="radio" checked name="share" value="1"/> Да</label>
                                    <label><input type="radio" name="share" value="0"/> Нет</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Для акционеров</label>
                                <div class="col-sm-9">
                                    <label><input type="radio" checked name="sharer" value="1"/> Да</label>
                                    <label><input type="radio" name="sharer" value="0"/> Нет</label>
                                </div>
                            </div>

                            </p>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn-primary" id="input_btn">Сохранить</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1"></label>
                                <div class="col-sm-9">
                                    <a href="/read-news"> Назад к новостям</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop