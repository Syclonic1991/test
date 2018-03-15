<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SB Admin 2 | cham11ng') }}</title>

    <link rel="stylesheet" href="{{ asset('css/appSB.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/timeline.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/jquery-ui/jquery-ui.css') }}">
    <link rel="icon" href="{{ url('/assets/images/favicon.png') }}" type="image/x-icon">


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>
<body>
@yield('body')

<script src="{{ asset("js/appSB.js") }}"></script>
<script src="{{ asset("js/Chart.js") }}"></script>
<script src="{{ asset("js/admin.js") }}"></script>
<!-- jQuery -->

<!-- DataTables -->
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

<script src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('/js/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('/js/jquery-ui/datepicker-ru.js') }}"></script>

<script type="text/javascript">
    tinymce.init({
        selector: '#promotion_description',
        menubar: false,
        toolbar: "bold italic | bullist numlist | link",
        language: 'ru',
        plugins: ['lists', 'link']
    });
</script>

<!-- App scripts -->
@stack('scripts')
</body>
</html>