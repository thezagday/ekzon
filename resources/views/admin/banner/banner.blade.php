@extends('layouts.admin')

@section('content')
    <div class="layout-content">
        <div class="layout-content-body">
            <h1 class="title-bar-title">Редактирование раздела "Баннер" </h1>
            <p class="title-bar-description">Тут вы можете отредактировать картинку баннера в каталоге.</p>
            <br>
            <div class="row">
                <div class="col-md-8">
                    <div class="demo-form-wrapper">
                        <form action="/update-banner" method="post" class="form form-horizontal" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Баннер</label>

                                <div class="col-sm-9">
                                    @if ($banner != null)
                                    <ul class="file-list">
                                        <li class="file">
                                            <a class="file-link" href="{{$banner}}" title="{{$banner}}" download="{{$banner}}">
                                                <div class="file-thumbnail" style="background-image: url({{$banner}})"></div>
                                                <div class="file-info">
                                                    <span class="file-ext"></span>
                                                    <span class="file-name"></span>
                                                </div>
                                            </a>
                                            <a href="/delete-banner">
                                                <span class="icon icon-remove"> Удалить</span>
                                            </a>
                                        </li>
                                    </ul>
                                    @endif
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
