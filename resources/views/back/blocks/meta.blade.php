@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Мета данные'])
    <div class="box box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования мета данных</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Тайтл</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$meta->seo_title_field}}"
                       data-name="seo_title"
                       data-type="seo"
                       data-block="products"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Ключевые слова</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$meta->seo_keywords_field}}"
                       data-name="seo_keywords"
                       data-type="seo"
                       data-block="products"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Описание страницы</label>
                <textarea class="form-control text"
                          data-name="seo_description"
                          data-type="seo"
                          data-block="products"
                          data-id="0">{{$meta->seo_description_field}}</textarea>
            </div>
            {{--<div class="form-group">
                <label>СЕО текст (выводится в нижней части страницы)</label>
                <textarea class="form-control text-editor"
                          data-name="seo_text"
                          data-type="seo"
                          data-block="head_slider"
                          data-id="0">{{$meta->seo_text_field}}</textarea>
            </div>--}}
        </div>
    </div>
@endsection