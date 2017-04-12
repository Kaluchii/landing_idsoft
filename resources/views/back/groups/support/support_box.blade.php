<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Абзац {{$item->sorter_field}}</h3>
        <button type="submit" class="btn btn-primary pull-right remove-flat-item" data-id="{{$item->id_field}}"
                data-block="support">Удалить
        </button>
    </div>
    <div class="box-body">

        <div class="form-group">
            <label>Заголовок</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->text_title_field}}"
                   data-name="text_title"
                   data-type="string"
                   data-block="support"
                   data-id="{{$item->id_field}}">
        </div>

        <div class="form-group">
            <label>Текст описание</label>
            <textarea class="form-control text"
                      data-name="descr"
                      data-type="text"
                      data-block="support"
                      data-id="{{$item->id_field}}">{{$item->descr_field}}</textarea>
        </div>

    </div>
</div>