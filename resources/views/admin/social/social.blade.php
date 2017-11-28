@extends('layouts.admin')

@section('content')

    <div class="layout-content">
        <div class="layout-content-body">
            <h1 class="title-bar-title">Редактирование раздела "Социальные сети"</h1>
            <p class="title-bar-description">Тут вы можете отредактировать раздел "Социальные сети"</p>
            <div class="row">
                <div class="col-md-8">
                    <div class="demo-form-wrapper">
                        <form action="/update-social" method="post" class="form form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">VK</label>
                                <div class="col-sm-9">
                                    <input id="" class="form-control" name="vk" value="{!!$social[0]->vk!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Instagram</label>
                                <div class="col-sm-9">
                                    <input id="" class="form-control" name="inst" value="{!!$social[0]->inst!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Facebook</label>
                                <div class="col-sm-9">
                                    <input id="" class="form-control" name="fb" value="{!!$social[0]->fb!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">OK</label>
                                <div class="col-sm-9">
                                    <input id="" class="form-control" name="ok" value="{!!$social[0]->ok!!}">
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