@extends('admin.layouts.dashboard')

@section('page_heading','Добавление акции')

@section('section')
    @if ($errors->any())
        <div class="alert alert-danger">Необходимо исправить следующие ошибки
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="col-sm-12">
        <div class="row" id="formStart">
            <form action="{{ route('promotion.store') }}" method="POST" id="formCreatePromotion">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="status">Статус акции</label>
                    <select class="form-control" id="status" name="status" style="width: 200px">
                        <option value="Активна">Активна</option>
                        <option value="Неактивна">Не активна</option>
                        <option value="Черновик" selected = "selected">Черновик</option>
                    </select>
                </div>
                <div class="form-inline">
                    <div id="label_date" style="font-weight: 700; margin-bottom: 5px;">Срок действия акции</div>
                    <div style="padding-top: 0; color: #b8b894; margin-bottom: 5px"><i>Выберите дату в поле либо введте дату в формате: "дд.мм.гггг")</i></div>
                    <input type="text" class="form-control datepicker" name="started_date" id="start_date" style="width: 200px">&nbsp; &ndash; &nbsp;
                    <input type="text" class="form-control datepicker" name="end_date" id="end_date" style="width: 200px" disabled="disabled">
                    <div id="date_start_alert" class="alert alert-danger" style="width: 700px; display:none; margin-top: 10px;">Введите дату начала акции</div>
                    <div id="date_end_alert" class="alert alert-danger" style="width: 700px; display:none; margin-top: 10px;">Введите дату окончания акции</div>
                </div>
                <div class="form-group" style="margin-top: 10px">
                    <label for="promotion_name" id="label_promotion_name">Название акции</label>
                    <div style="padding-top: 0; color: #b8b894; margin-bottom: 5px"><i>(Максимальное количество символов 85)</i></div>
                    <input type="text" class="form-control" id="promotion_name" name="promotion_name" style="width: 300px" maxlength="85">
                    <div id="promotion_name_alert" class="alert alert-danger" style="width: 700px; display:none; margin-top: 10px;">Введите название акции</div>
                </div>
                <div class="form-group">
                    <label for="promotion_description" id="label_promotion_description">Описание акции</label>
                    <textarea class="form-control" id="promotion_description" name="promotion_description" style="width: 700px;"></textarea>
                    <div id="promotion_description_alert" class="alert alert-danger" style="width: 700px; display:none; margin-top: 10px;">Введите описание акции</div>
                </div>
                <div class="form-group">
                    <label id="label_preview_image">Маленькая картинка для акции в разделе "Акции"</label>
                    <div style="margin-bottom: 10px; color: #b8b894;">
                        <i>Размер изображения 450px по ширине и 240px по высоте. Максимальный размер файла 5 МБ. Разрешенный формат файлов: jpeg.</i>
                    </div>
                    <input type='file' id="input_img_preview" />
                    <img id="img_preview" src="" alt="Preview image" style="margin-top: 10px" hidden/>
                     <div id="input_img_preview_alert" class="alert alert-danger" style="width: 700px; display:none; margin-top: 10px;">Загрузите изображение</div>
                </div>
                <div class="form-group" style="margin-bottom: 30px;">
                    <label id="label_banner_image">Картинка для акции в разделе "Подробнее об акции"</label>
                    <div style="margin-bottom: 10px; color: #b8b894;">
                        <i>Размер изображения 450px по ширине и 240px по высоте. Максимальный размер файла 5 МБ. Разрешенный формат файлов: jpeg.</i>
                    </div>
                    <input type='file' id="input_img_banner" />
                    <img id="img_banner" src="" alt="Banner image" style="margin-top: 10px" hidden/>
                    <div id="input_img_banner_alert" class="alert alert-danger" style="width: 700px; display:none; margin-top: 10px;">Загрузите изображение</div>

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
                <button type="submit" class="btn btn-primary submit">Сохранить</button>
            </form>
        </div>
    </div>
@endsection
@push('scripts')
<script>

    var _URL = window.URL || window.webkitURL;
    function displayPreview(files) {
        var img = new Image(),
            fileSize=Math.round(files.size / 1024);

        img.onload = function () {
            var width=this.width,
                height=this.height,
                imgsrc=this.src;
            if (fileSize > 5000) {
                $('#input_img_preview').val('');
                alert('Размер файла больше 5 МБ');
                $('#img_preview').hide();
            } else if (width != 450 || height != 240) {
                $('#input_img_preview').val('');
                alert('Неверный размер изображения.');
                $('#img_preview').hide();
            } else if(files.type != 'image/jpeg') {
                $('#input_img_preview').val('');
                alert('Неверный тип изображения. Загрузите jpeg изображение.');
                $('#img_preview').hide();
            }
             else {
                $('#img_preview').attr('src', imgsrc);
                $('#img_preview').show();
                $('#input_img_preview_alert').hide('slow');
            }
        };

            img.src = _URL.createObjectURL(files);
    }

        function displayBanner(files) {
        var img = new Image(),
            fileSize=Math.round(files.size / 1024);
        img.onload = function () {
            var width=this.width,
                height=this.height,
                imgsrc=this.src;
            if (fileSize > 5000) {
                $('#input_img_banner').val('');
                alert('Размер файла больше 5 МБ');
                $('#img_banner').hide();
            } else if (width != 450 || height != 240) {
                $('#input_img_banner').val('');
                alert('Не верный размер изображения.');
                $('#img_banner').hide();
            } else if(files.type != 'image/jpeg') {
                $('#input_img_banner').val('');
                alert('Неверный тип изображения. Загрузите jpeg изображение.');
                $('#img_banner').hide();
            } 
            else {
                $('#img_banner').attr('src', imgsrc);
                $('#img_banner').show();
                $('#input_img_banner_alert').hide('slow');
            }
        };

            img.src = _URL.createObjectURL(files);
    }

    $ (document).ready(function() {
        if ($('#status').find(":selected").text() == 'Черновик') {
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

    function scrollTop() {
        var targetOffset = $('#formStart').offset().top;
        $('html, body').animate({scrollTop: targetOffset}, 1000);
    };

    //Validation function
    $('.submit').click(function( event ) {
        $('#date_start_alert').hide('slow');
        $('#date_end_alert').hide('slow');
        $('#promotion_name_alert').hide('slow');
        $('#promotion_description_alert').hide('slow');

        if ($('#status').find(":selected").text() != 'Черновик') {
            if ($('#start_date').val() == '')  {
                $('#date_start_alert').show('slow');
                scrollTop();
                return false;
            } else {
                $('#date_start_alert').hide('slow');
            }

            if ($('#end_date').val() == '') {
                $('#date_end_alert').show('slow');
                    scrollTop();
                    return false;
            } else {
                $('#date_end_alert').hide('slow');
            }

            if ($('#promotion_name').val() == '') {
                $('#promotion_name_alert').show('slow');
                scrollTop();
                return false;
            } else {
                $('#promotion_name_alert').hide('slow');
            }
            var tinyText = tinyMCE.activeEditor.getContent({
                format: 'text'
            });
            var promotion_description = tinyText.trim();

            if (promotion_description.length == 0) {
                $('#promotion_description_alert').show('slow');
                scrollTop();
                return false;
            } else {
                $('#promotion_description_alert').hide('slow');
            }

            if ($('#input_img_preview').val() == '') {
                $('#input_img_preview_alert').show('slow');
                return false;
            } else {
                $('#input_img_preview_alert').hide('slow');
            }

            if ($('#input_img_banner').val() == '') {
                    $('#input_img_banner_alert').show('slow');
                    return false;
            } else {
                $('#input_img_banner_alert').hide('slow');
            }

        } else {
            $('#promotion_name_alert').hide('slow');
             if ($('#promotion_name').val() == '') {
                $('#promotion_name_alert').show('slow');
                scrollTop();
                return false;
            } else {
                $('#promotion_name_alert').hide('slow');
            }

        }

            $('#formCreatePromotion').submit();
    
        });
    });

    $('#status').change(function() {
        if ($(this).find(":selected").text() == 'Черновик') {
            $('#label_date').text('Срок действия акции');
            $('#label_promotion_name_label').text('Название акции *');
            $('#label_promotion_description').text('Описание акции');
            $('#label_preview_image').text('Картинка для акции в разделе \"Акции\"');
            $('#label_banner_image').text('Картинка для акции в разделе \"Подробнее об акции\"');
        } else {
            $('#formCreatePromotion').removeAttr('novalidate');
            $('#label_date').text('Срок действия акции *');
            $('#label_promotion_name').text('Название акции *');
            $('#label_promotion_description').text('Описание акции *');
            $('#label_preview_image').text('Картинка для акции в разделе \"Акции\" *');
            $('#label_banner_image').text('Картинка для акции в разделе \"Подробнее об акции\" *');
        }
    });


    


    $("#input_img_preview").change(function () {
        var file = this.files[0];
        displayPreview(file);
    });

    $("#input_img_banner").change(function () {
        var file = this.files[0];
        displayBanner(file);
    });

</script>
@endpush