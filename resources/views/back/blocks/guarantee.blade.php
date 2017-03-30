@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Гарантия и сервис'])

    <div class="box box-info group-item-widget"
         data-block="support">
        <div class="box-header with-border">
            <h3 class="box-title"> Текстовые абзацы </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">
            <div class="groupflat-widget group-item-wrap">
                @foreach($guarantee->support_group as $item)
                    @include('back.groups.support.support_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>


    <div class="box box-info group-item-widget"
         data-block="slider">
        <div class="box-header with-border">
            <h3 class="box-title"> Изображения в слайдере (jpg, png 700×490 пикселей) </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">
            <div class="groupflat-widget group-item-wrap">
                @foreach($guarantee->slider_group as $item)
                    @include('back.groups.slider.slider_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>
@endsection