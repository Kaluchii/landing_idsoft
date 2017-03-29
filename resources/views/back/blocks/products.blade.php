@extends('back.layout')
@section('content')

    @include('back.content-top', ['title' => 'Оборудование'])

    <div class="box box box-info">
        <div class="box-header">
            <h3 class="box-title">Левый верхний товар</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Название</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$products->pr1_field}}"
                       data-name="pr1"
                       data-type="string"
                       data-block="products"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Количество</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$products->pr1_count_field}}"
                       data-name="pr1_count"
                       data-type="string"
                       data-block="products"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Изображение</label>
                <div class="dropzone">
                    <div class="file-input">
                        <div class="file-preview">
                            <div class="input-group file-caption-main">
                                <div class="file-preview-frame">
                                    <div class="kv-file-content">
                                        <img src="{{$products->pr1_img_field->link}}?{{$products->pr1_img_field->cache_index}}" class="kv-preview-data file-preview-image" title="{{$products->pr1_img_field->alt}}" alt="{{$products->pr1_img_field->alt}}">
                                    </div>
                                    <div class="file-thumbnail-footer">
                                        <div class="file-footer-caption" title="{{$products->pr1_img_field->alt}}">{{$products->pr1_img_field->name_field}} <br></div>
                                        <div class="file-actions">
                                            <input type="text" class="form-control alt-text" data-block="products" data-type="images" data-id="0" data-name="alt">
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-group-btn">
                    <button type="button" tabindex="500" title="Clear selected files" class="btn btn-default fileinput-remove fileinput-remove-button"><i class="glyphicon glyphicon-trash"></i>  <span class="hidden-xs">Очистить</span></button>
                    <button type="button" tabindex="500" title="Abort ongoing upload" class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i class="glyphicon glyphicon-ban-circle"></i>  <span class="hidden-xs">Cancel</span></button>
                    <div tabindex="500" class="btn btn-primary btn-file">
                        <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                        <span class="hidden-xs">Выбрать изображение …</span>
                        <input type="file" class="form-control file"
                               data-block="products"
                               data-name="pr1_img"
                               data-type="image"
                               data-id="0">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="box box box-info">
        <div class="box-header">
            <h3 class="box-title">Левый нижний товар</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Номер телефона</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$products->pr1_field}}"
                       data-name="pr1"
                       data-type="string"
                       data-block="products"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Номер телефона</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$products->pr1_count_field}}"
                       data-name="pr1_count"
                       data-type="string"
                       data-block="products"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Логотип</label>
                <div class="dropzone">
                    <div class="file-input">
                        <div class="file-preview">
                            <div class="input-group file-caption-main">
                                <div class="file-preview-frame">
                                    <div class="kv-file-content">
                                        <img src="{{$products->pr1_img_field->link}}?{{$products->pr1_img_field->cache_index}}" class="kv-preview-data file-preview-image" title="{{$products->pr1_img_field->alt}}" alt="{{$products->pr1_img_field->alt}}">
                                    </div>
                                    <div class="file-thumbnail-footer">
                                        <div class="file-footer-caption" title="{{$products->pr1_img_field->alt}}">{{$products->pr1_img_field->name_field}} <br></div>
                                        <div class="file-actions">
                                            <input type="text" class="form-control alt-text" data-block="products" data-type="images" data-id="0" data-name="alt">
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-group-btn">
                    <button type="button" tabindex="500" title="Clear selected files" class="btn btn-default fileinput-remove fileinput-remove-button"><i class="glyphicon glyphicon-trash"></i>  <span class="hidden-xs">Очистить</span></button>
                    <button type="button" tabindex="500" title="Abort ongoing upload" class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i class="glyphicon glyphicon-ban-circle"></i>  <span class="hidden-xs">Cancel</span></button>
                    <div tabindex="500" class="btn btn-primary btn-file">
                        <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                        <span class="hidden-xs">Выбрать изображение …</span>
                        <input type="file" class="form-control file"
                               data-block="products"
                               data-name="pr1_img"
                               data-type="image"
                               data-id="0">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection