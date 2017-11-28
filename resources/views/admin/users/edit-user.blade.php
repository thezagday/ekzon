@extends('layouts.admin')

@section('content')
    <div class="layout-content">
        <div class="layout-content-body">
            <h1 class="title-bar-title">Редактирование пользователя "{!! strip_tags($user->name) !!}" </h1>
            <p class="title-bar-description">Тут вы можете отредактировать выбранного пользователя</p>
            <div class="row">
                <div class="col-md-8">
                    <div class="demo-form-wrapper">
                        <form action="/edit-user" method="post" class="form form-horizontal" enctype="multipart/form-data">
                            <p>
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{$user->id}}">
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Имя</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="name" value="{{$user->name}}" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">E-mail (login)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="email" value="{{$user->email}}" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Пароль</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="password" value="{{$user->password}}" ><a href="/pass-reset/{{$user->id}}">Сбросить</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Телефон</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="phone" value="{{$user->phone}}" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Организация</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="organization" value="{{$user->organization}}" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">УНП</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="UNP" value="{{$user->UNP}}" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Страна</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="country" value="{{$user->country}}" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Адрес</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="address" value="{{$user->address}}" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Офис</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="office" value="{{$user->office}}" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Описание</label>
                                <div class="col-sm-9">
                                    <textarea id="form-control-1" class="form-control" name="desc" rows="5">{{$user->desc}}</textarea>
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
                                    <a href="/users"> Назад к пользователям</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop