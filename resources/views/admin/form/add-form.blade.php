@extends('layouts.admin')

@section('content')
    <div class="layout-content">
        <div class="layout-content-body">
            <h1 class="title-bar-title">Добавление продуктов на форму в личном кабинете</h1>
            <p class="title-bar-description">Тут вы можете добоавить необхоимые товары, которые будут отображаться на форме в личном кабинете  </p>
            <br>
            <div class="row">
                <div class="col-md-8">
                    <div class="demo-form-wrapper">
                        <form action="/add-form" method="post" class="form form-horizontal" id="add-product-main-page-form">
                            {{csrf_field()}}
                            @foreach ($allProducts as $item)
                                @if (!in_array($item->id,$existsProducts))
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="form-control-1"></label>
                                    <div class="col-sm-9">
                                        <label class="custom-control custom-control-primary custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" name="products[]" value="{!! $item->id !!}">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-label">{!! $item->title_ru !!} ({!! $item->title_en !!}) - {!! $item->reg_ru !!}</span>
                                        </label>
                                    </div>
                                </div>
                                @endif
                            @endforeach

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1"></label>
                                <div class="col-sm-9">
                                    <input type="submit" class="btn-primary" id="input_btn" value="Добавить">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop