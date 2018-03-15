@extends('admin.layouts.dashboard')

@section('page_heading','Добавление акции')

@section('section')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="col-sm-12">
        <div class="row">
            <form action="{{ route('promotion.store') }}" method="POST" id="formCreatePromotion">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="status">Статус акции</label>
                    <select class="form-control" id="status" name="status" style="width: 200px">
                        <option value="active">Активна</option>
                        <option value="not_active">Не активна</option>
                        <option value="draft" selected = "selected">Черновик</option>
                    </select>
                </div>
                <div class="form-inline">
                    <div id="label_date" style="font-weight: 700; margin-bottom: 5px;">Срок действия акции</div>
                    <div style="padding-top: 0; color: #b8b894; margin-bottom: 5px"><i>(Кликните на поле ввода либо введте дату в формате: "дд.мм.гггг")</i></div>
                    <input type="text" class="form-control datepicker" name="started_date" id="start_date" style="width: 200px">&nbsp; &ndash; &nbsp;
                    <input type="text" class="form-control datepicker" name="end_date" id="end_date" style="width: 200px" disabled="disabled">
                </div>
                <div class="form-group" style="margin-top: 10px">
                    <label for="promotion_name" id="label_promotion_name">Название акции</label>
                    <div style="padding-top: 0; color: #b8b894; margin-bottom: 5px"><i>(Максимальное количество символов 85)</i></div>
                    <input type="text" class="form-control" id="promotion_name" name="promotion_name" style="width: 300px" maxlength="85" required>
                </div>
                <div class="form-group">
                    <label for="promotion_description" id="label_promotion_description">Описание акции</label>
                    <div id="promotion_description_alert" style="display:none; color: red; margin-bottom: 10px">Заполните это поле</div>
                    <textarea class="form-control" id="promotion_description" name="promotion_description" style="width: 700px;"></textarea>
                </div>
                <div class="form-group">
                    <label id="label_preview_image">Загрузить изображение для превью</label>
                    <div>
                        <p><i>Формат: jpeg</i></p>
                        <p><i>Размер изображения: 600x400 px</i></p>
                        <p><i>Максимальный размер файла: 5 МБ</i></p>

                    </div>
                    <input type='file' id="input_img_preview" onchange="readPreviewImage(this);" />
                    <img id="img_preview" src="" alt="Preview image" style="margin-top: 10px" hidden/>
                </div>
                <div class="form-group" style="margin-bottom: 30px;">
                    <label id="label_banner_image">Загрузить изображение для баннера</label>
                    <input type='file' id="input_img_banner"/>
                    <img id="img_banner" src="" alt="Banner image" style="margin-top: 10px" hidden/>

                </div>
                <div class="form-group" style="margin-top: 10px">
                    <label for="meta_title"> meta-title:</label>
                    <input type="text" class="form-control" name="meta_title" id="meta_title" style="width: 600px" maxlength="255">
                </div>
                <div class="form-group">
                    <label for="meta_description">meta-description:</label>
                    <div style="padding-top: 0; color: #b8b894; margin-bottom: 5px"><i>(Максимальное количество символов 180)</i></div>
                    <input type="text" class="form-control" name="meta_description" id="meta_description" style="width: 600px" maxlength="180">
                </div>
                <div class="form-group">
                    <label for="meta_keyword">meta-keywords:</label>
                    <input type="text" class="form-control" name="meta_keywords" id="meta_keywords" style="width: 600px" maxlength="255">
                </div>
                <div class="form-group">
                </div>
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
        </div>
    </div>
@endsection
@push('scripts')
<script>
    $ (document).ready(function() {
            if ($('#status').find(":selected").text() == 'Черновик') {
                $('#promotion_name').prop('required', true);
                $('#label_promotion_name').text('Название акции *');
            }
        $("#start_date").datepicker({
            dateFormat: "dd.mm.yy",
            minDate: 0,
            onSelect: function (date) {
                var endDate = $('#end_date');
                var minDate = $(this).datepicker('getDate');

                endDate.prop('disabled', false);
                endDate.datepicker('option', 'minDate', minDate);
            }
        });
        $('#end_date').datepicker({
            dateFormat: "dd.mm.yy"
        });
    });

    $('#status').change(function() {
        if ($(this).find(":selected").text() == 'Черновик') {
            $('#promotion_name').prop('required', true);
            $('#start_date').prop('required', false);
            $('#end_date').prop('required', false);
            $('#input_img_preview').prop('required', false);
            $('#input_img_banner').prop('required', false);

            $('#label_date').text('Срок действия акции');
            $('#label_promotion_name_label').text('Название акции *');
            $('#label_promotion_description').text('Описание акции');
            $('#label_preview_image').text('Загрузить изображение для превью');
            $('#label_banner_image').text('Загрузить изображение для баннера');
        } else {
            $('#formCreatePromotion').removeAttr('novalidate');
            $('#start_date').prop('required', true);
            $('#end_date').prop('required', true);
            $('#promotion_name').prop('required', true);
            $('#input_img_preview').prop('required', true);
            $('#input_img_banner').prop('required', true);

            $('#label_date').text('Срок действия акции *');
            $('#label_promotion_name').text('Название акции *');
            $('#label_promotion_description').text('Описание акции *');
            $('#label_preview_image').text('Загрузить изображение для превью *');
            $('#label_banner_image').text('Загрузить изображение для баннера *');
        }
    });

//    function readPreviewImage(input) {
//
//
//
//                var file_size = $('#input_img_preview')[0].files[0].size;
//                if(file_size>11) {
//                        alert('Максимальный размер файла: 5 MB');
//                        $('#input_img_preview').val('');
//                } else {
//                    if (input.files && input.files[0]) {
//                        var reader = new FileReader();
//                        reader.onload = function (e) {
//                            $('#img_preview')
//                                .attr('src', e.target.result)
//                                .removeAttr('hidden');
//                        };
//                        reader.readAsDataURL(input.files[0]);
//                }
//
//        }
//    }
    var _URL = window.URL || window.webkitURL;
    function displayPreview(files) {
        var img = new Image(),
            fileSize=Math.round(files.size / 1024);

        img.onload = function () {
            var width=this.width,
                height=this.height,
                imgsrc=this.src;

            if (fileSize > 5000 || width != 400) {
                $('#input_img_preview').val('');
                alert('Изображение не соответствует требованиям');
            } else {
                $('#img_preview').attr('src', imgsrc);
                $('#img_preview').show();
            }
        };
        img.src = _URL.createObjectURL(files);
    }
    function displayBanner(files) {
        var img = new Image(),
            fileSize=Math.round(files.size);

        img.onload = function () {
            var width=this.width,
                height=this.height,
                imgsrc=this.src;

            if (fileSize > 5000 || width != 400) {
                $('#input_img_banner').val('');
                alert('Изображение не соответствует требованиям');
            } else {
                $('#img_banner').attr('src', imgsrc);
                $('#img_banner').show();
            }
        };
        img.src = _URL.createObjectURL(files);
    }


    $("#input_img_preview").change(function () {
        var file = this.files[0];
        displayPreview(file);

    });
    $("#input_img_banner").change(function () {
        var file = this.files[0];
        displayBanner(file);

    });

//    function readBannerImage(input) {
//        if (input.files && input.files[0]) {
//            var reader = new FileReader();
//            reader.onload = function (e) {
//                $('#img_banner')
//                    .attr('src', e.target.result)
//                    .removeAttr('hidden');
//            };
//            reader.readAsDataURL(input.files[0]);
//        }
//    }

    $('#formCreatePromotion').submit(function( event ) {
        var tinyText = tinyMCE.activeEditor.getContent({
            format: 'text'
        });
        var promotion_description = tinyText.trim();

       if (promotion_description.length == 0 && $('#status').find(":selected").text() != 'Черновик') {
           $('#promotion_description_alert').show('slow');
           var targetOffset = $('#promotion_description_alert').offset().top;
           $('html, body').animate({scrollTop: targetOffset}, 1000);
           event.preventDefault();
        }
    });


</script>

@endpush