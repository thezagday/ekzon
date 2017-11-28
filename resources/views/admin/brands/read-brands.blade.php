@extends('layouts.admin')

@section('content')
    <div class="layout-content">
        <div class="layout-content-body">
            <h1 class="title-bar-title">Редактирование раздела "Бренды" </h1>
            <p class="title-bar-description">Тут вы можете отредактировать картинки брендов с которыми работаете. Для корректного отображения рекомендуется загружать картинки размером 250х200 px. </p>
            <div class="row">
                <div class="col-md-8">
                    <div class="demo-form-wrapper">
                        <form action="/add-brand" method="post" class="form form-horizontal" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Картинки</label>
                                <div class="col-sm-9">
                                    <ul class="file-list">
                                        @foreach ($images as $image)
                                            <li class="file">
                                                <a class="file-link" href="{{$image->img}}" title="{{$image->img}}" download="{{$image->img}}">
                                                    <div class="file-thumbnail" style="background-image: url({{$image->img}})"></div>
                                                    <div class="file-info">
                                                        <span class="file-ext"></span>
                                                        <span class="file-name"></span>
                                                    </div>
                                                </a>
                                                <a href="delete-brand/{{$image->id}}">
                                                    <span class="icon icon-remove"> Удалить</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <label class="drive-uploader-btn btn btn-primary">
                                        <input class="drive-uploader-input" type="file" name="img">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn-primary">Сохранить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
