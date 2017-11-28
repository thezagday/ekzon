@extends('layouts.admin')

@section('content')
    <div class="layout-content">
        <div class="layout-content-body">
            <h1 class="title-bar-title">Редактирование продукта "{!! strip_tags($product->title_ru) !!}" ("{!!strip_tags($product->title_en) !!}")</h1>
            <p class="title-bar-description">Тут вы можете отредактировать выбранный продукт</p>
            <div class="row">
                <div class="col-md-8">
                    <div class="demo-form-wrapper">
                        <form action="/edit-product" method="post" class="form form-horizontal" enctype="multipart/form-data">
                            <p>
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{$product->id}}">
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Заголовок (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="title_ru" value="{{$product->title_ru}}" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Заголовок (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="title_en" value="{{$product->title_en}}" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Регистрационный номер (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="reg_ru" value="{{$product->reg_ru}}" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Регистрационный номер (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="reg_en" value="{{$product->reg_en}}" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Торговое наименование (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="name_ru" value="{{$product->name_ru}}" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Торговое наименование (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="name_en" value="{{$product->name_en}}" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Международное наименование (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="inter_name" value="{{$product->inter_name}}" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Краткое описание (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="short_desc_ru" value="{{$product->short_desc_ru}}" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Краткое описание(EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="short_desc_en" value="{{$product->short_desc_en}}" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Показания к применению (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="appointment_ru" value="{{$product->appointment_ru}}" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Показания к применению (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="appointment_en" value="{{$product->appointment_en}}" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Упаковка (RU)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="volume" value="{{$product->volume}}" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Упаковка (EN)</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="packing_en" value="{{$product->packing_en}}" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Код ATX</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="atx" value="{{$product->atx}}" >
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Рецепт</label>
                                <div class="col-sm-9">
                                    @if($product->recipe == 1)
                                        <label><input type="radio" checked name="recipe" value="1"/> Да</label>
                                        <label><input type="radio" name="recipe" value="0"/> Нет</label>
                                    @else
                                        <label><input type="radio" name="recipe" value="1"/> Да</label>
                                        <label><input type="radio" checked name="recipe" value="0"/> Нет</label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Описание (RU)</label>
                                <div class="col-sm-9">
                                    <textarea id="textarea-1" name="desc_ru" rows="5" class="form-control">{{$product->desc_ru}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Описание (EN)</label>
                                <div class="col-sm-9">
                                    <textarea id="textarea-2" name="desc_en" rows="5" class="form-control">{{$product->desc_en}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Картинка</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="img" value="{{$product->img}}" >
                                    <input type="file" name="img">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Новинка</label>
                                <div class="col-sm-9">
                                    @if($product->isNew == 1)
                                        <label><input type="radio" checked name="isNew" value="1"/> Да</label>
                                        <label><input type="radio" name="isNew" value="0"/> Нет</label>
                                    @else
                                        <label><input type="radio" name="isNew" value="1"/> Да</label>
                                        <label><input type="radio" checked name="isNew" value="0"/> Нет</label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Файл</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="file" value="{{$product->file}}" >
                                    <input type="file" name="file">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Форма выпуска</label>
                                <div class="col-sm-9">
                                    <select name="category" class="custom-select">
                                        @foreach ($parents as $item)
                                            @if ($product->parentCategory->id == $item->id)
                                                <option selected value="{!! $item->id !!}">{!! $item->title_ru !!}</option>
                                            @endif
                                            @if ($product->parentCategory->id != $item->id)
                                                <option value="{!! $item->id !!}">{!! $item->title_ru !!}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Цена</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="price" value="{{$product->price}}" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Франко-назначения</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="franko" value="{{$product->franko}}" >
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
                                    <a href="{!! route('read-products',['id' => $product->category]) !!}"> Назад к редактированию</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop