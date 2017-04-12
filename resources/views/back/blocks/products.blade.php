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
                <label>Изображение (250 x 250px)</label>
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
                <label>Название</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$products->pr2_field}}"
                       data-name="pr2"
                       data-type="string"
                       data-block="products"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Количество</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$products->pr2_count_field}}"
                       data-name="pr2_count"
                       data-type="string"
                       data-block="products"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Изображение (250 x 250px)</label>
                <div class="dropzone">
                    <div class="file-input">
                        <div class="file-preview">
                            <div class="input-group file-caption-main">
                                <div class="file-preview-frame">
                                    <div class="kv-file-content">
                                        <img src="{{$products->pr2_img_field->link}}?{{$products->pr2_img_field->cache_index}}" class="kv-preview-data file-preview-image" title="{{$products->pr2_img_field->alt}}" alt="{{$products->pr2_img_field->alt}}">
                                    </div>
                                    <div class="file-thumbnail-footer">
                                        <div class="file-footer-caption" title="{{$products->pr2_img_field->alt}}">{{$products->pr2_img_field->name_field}} <br></div>
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
                               data-name="pr2_img"
                               data-type="image"
                               data-id="0">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="box box box-info">
        <div class="box-header">
            <h3 class="box-title">Центральный товар</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Название</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$products->pr3_field}}"
                       data-name="pr3"
                       data-type="string"
                       data-block="products"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Количество</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$products->pr3_count_field}}"
                       data-name="pr3_count"
                       data-type="string"
                       data-block="products"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Изображение (500 x 500px)</label>
                <div class="dropzone">
                    <div class="file-input">
                        <div class="file-preview">
                            <div class="input-group file-caption-main">
                                <div class="file-preview-frame">
                                    <div class="kv-file-content">
                                        <img src="{{$products->pr3_img_field->link}}?{{$products->pr3_img_field->cache_index}}" class="kv-preview-data file-preview-image" title="{{$products->pr3_img_field->alt}}" alt="{{$products->pr3_img_field->alt}}">
                                    </div>
                                    <div class="file-thumbnail-footer">
                                        <div class="file-footer-caption" title="{{$products->pr3_img_field->alt}}">{{$products->pr3_img_field->name_field}} <br></div>
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
                               data-name="pr3_img"
                               data-type="image"
                               data-id="0">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="box box box-info">
        <div class="box-header">
            <h3 class="box-title">Правый верхний товар</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Название</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$products->pr4_field}}"
                       data-name="pr4"
                       data-type="string"
                       data-block="products"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Количество</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$products->pr4_count_field}}"
                       data-name="pr4_count"
                       data-type="string"
                       data-block="products"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Изображение (250 x 250px)</label>
                <div class="dropzone">
                    <div class="file-input">
                        <div class="file-preview">
                            <div class="input-group file-caption-main">
                                <div class="file-preview-frame">
                                    <div class="kv-file-content">
                                        <img src="{{$products->pr4_img_field->link}}?{{$products->pr4_img_field->cache_index}}" class="kv-preview-data file-preview-image" title="{{$products->pr4_img_field->alt}}" alt="{{$products->pr4_img_field->alt}}">
                                    </div>
                                    <div class="file-thumbnail-footer">
                                        <div class="file-footer-caption" title="{{$products->pr4_img_field->alt}}">{{$products->pr4_img_field->name_field}} <br></div>
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
                               data-name="pr4_img"
                               data-type="image"
                               data-id="0">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="box box box-info">
        <div class="box-header">
            <h3 class="box-title">Правый нижний товар</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Название</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$products->pr5_field}}"
                       data-name="pr5"
                       data-type="string"
                       data-block="products"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Количество</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$products->pr5_count_field}}"
                       data-name="pr5_count"
                       data-type="string"
                       data-block="products"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Изображение (250 x 250px)</label>
                <div class="dropzone">
                    <div class="file-input">
                        <div class="file-preview">
                            <div class="input-group file-caption-main">
                                <div class="file-preview-frame">
                                    <div class="kv-file-content">
                                        <img src="{{$products->pr5_img_field->link}}?{{$products->pr5_img_field->cache_index}}" class="kv-preview-data file-preview-image" title="{{$products->pr5_img_field->alt}}" alt="{{$products->pr5_img_field->alt}}">
                                    </div>
                                    <div class="file-thumbnail-footer">
                                        <div class="file-footer-caption" title="{{$products->pr5_img_field->alt}}">{{$products->pr5_img_field->name_field}} <br></div>
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
                               data-name="pr5_img"
                               data-type="image"
                               data-id="0">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="box box box-info">
        <div class="box-header">
            <h3 class="box-title">Коммерческое предложение</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label></label>
                <div class="dropzone">
                    <div class="file-input">
                        <div class="file-preview">
                            <div class="input-group file-caption-main">
                                <div class="file-preview-frame">
                                    <div class="kv-file-content">
                                        <p style="font-size: 120px;"><i class="fa fa-file-text-o "></i></p>
                                    </div>
                                    <div class="file-thumbnail-footer">
                                        <div class="file-ssactions">
                                            <input type="text"
                                                   class="form-control title"
                                                   data-block="products"
                                                   data-name="title"
                                                   data-type="file"
                                                   value="{{$products->cp_field->title}}"
                                                   data-id="0"
                                                   placeholder="Имя файла при скачивании">
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="input-group-btn">
                    <button type="button" tabindex="500" title="Clear selected files" class="btn btn-default fileinput-remove fileinput-remove-button"><i class="glyphicon glyphicon-trash"></i>  <span class="hidden-xs">Удалить</span></button>
                    <button type="button" tabindex="500" title="Abort ongoing upload" class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i class="glyphicon glyphicon-ban-circle"></i>  <span class="hidden-xs">Отмена</span></button>
                    <div tabindex="500" class="btn btn-primary btn-file">
                        <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                        <span class="hidden-xs">Выбрать …</span>
                        <input type="file" class="form-control files"
                               data-block="products"
                               data-name="cp"
                               data-type="file"
                               data-id="0">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection