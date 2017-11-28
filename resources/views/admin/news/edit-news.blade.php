@extends('layouts.admin')

@section('content')
    <div class="layout-content">
        <div class="layout-content-body">
            <h1 class="title-bar-title">Редактирование новости "{!! strip_tags($news->title_ru) !!}" ("{!!strip_tags($news->title_en) !!}")</h1>
            <p class="title-bar-description">Тут вы можете отредактировать выбранную новость</p>
            <div class="row">
                <div class="col-md-8">
                    <div class="demo-form-wrapper">
                        <form action="/edit-news" method="post" class="form form-horizontal" enctype="multipart/form-data">
                            <p>
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{$news->id}}">
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Заголовок (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="title_ru" value="{{$news->title_ru}}" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Заголовок (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="title_en" value="{{$news->title_en}}" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Краткое описание (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="prev_text_ru" value="{{$news->prev_text_ru}}" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Краткое описание (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="prev_text_en" value="{{$news->prev_text_en}}" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Новость (RU)</label>
                                <div class="col-sm-9">
                                    <textarea id="textarea-1" name="text_ru" rows="5" class="form-control">{{$news->text_ru}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Новость (EN)</label>
                                <div class="col-sm-9">
                                    <textarea id="textarea-2" name="text_en" rows="5" class="form-control">{{$news->text_en}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Дата</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="date" value="{{$news->date}}" placeholder="yyyy-mm-dd">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Картинка</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="default_img" value="{{$news->default_img}}" >
                                    <input type="file" name="default_img">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Акция</label>
                                <div class="col-sm-9">
                                    @if($news->share == 1)
                                        <label><input type="radio" checked name="share" value="1"/> Да</label>
                                        <label><input type="radio" name="share" value="0"/> Нет</label>
                                    @else
                                        <label><input type="radio" name="share" value=""/> Да</label>
                                        <label><input type="radio" checked name="share" value="0"/> Нет</label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Для акционеров</label>
                                <div class="col-sm-9">
                                    @if($news->sharer == 1)
                                        <label><input type="radio" checked name="sharer" value="1"/> Да</label>
                                        <label><input type="radio" name="sharer" value="0"/> Нет</label>
                                    @else
                                        <label><input type="radio" name="sharer" value="1"/> Да</label>
                                        <label><input type="radio" checked name="sharer" value="0"/> Нет</label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Слайдер</label>
                                <div class="col-sm-9">
                                    <ul class="file-list">
                                        @foreach ($news->images as $image)
                                            <li class="file">
                                                <a class="file-link" href="{{asset($image->img)}}" title="{{asset($image->img)}}" download="{{asset($image->img)}}">
                                                    <div class="file-thumbnail" style="background-image: url({{asset($image->img)}})"></div>
                                                    <div class="file-info">
                                                        <span class="file-ext"></span>
                                                        <span class="file-name"></span>
                                                    </div>
                                                </a>
                                                <a href="/delete-news-slide/{{$image->id}}">
                                                    <span class="icon icon-remove"> Удалить</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <label class="drive-uploader-btn btn btn-primary">
                                        <input class="drive-uploader-input" type="file" name="slider_img">
                                    </label>
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