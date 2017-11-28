@extends('layouts.admin')

@section('content')
    <div class="layout-content">
        <div class="layout-content-body">
            <h1 class="title-bar-title">Редактирование слайдера</h1>
            <p class="title-bar-description">Тут вы можете отредактировать имеющийся слайдер </p>
            <div class="row">
                <div class="col-md-8">
                    <div class="demo-form-wrapper">
                        <form action="" method="post" class="form form-horizontal">
                            @foreach ($sliders as $item)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="form-control-1"></label>
                                    <div class="col-sm-9">
                                        <div class="list-group">
                                            <a class="list-group-item" href="/edit-slider/{!! $item->id !!}">
                                                <div class="media">
                                                    <div class="media-middle media-body">
                                                        <h5 class="media-heading">{{ strip_tags($item->title_ru)}} ({!! strip_tags($item->title_en) !!})</h5>
                                                    </div>
                                                    <div class="media-middle media-right">
                                                        <span class="icon icon-pencil"></span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item" href="/delete-slider/{{$item->id}}">
                                                <div class="media">
                                                    <div class="media-middle media-body">
                                                        <h5 class="media-heading"><small>Удалить</small></h5>
                                                    </div>
                                                    <div class="media-middle media-right">
                                                        <span class="icon icon-remove"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1"></label>
                                <div class="col-sm-9">
                                    <input type="button" class="btn-primary" id="input_btn" value="Добавить" onClick='location.href="/add-slider"'>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop