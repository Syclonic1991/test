@extends('layouts.master')

@section('content')
    <table class="table table-bordered" id="users-table">
        <thead>
        <tr>
            <th>Изображение</th>
            <th>Название</th>
            <th>Дата начала</th>
            <th>Дата конца</th>
        </tr>
        </thead>
    </table>
@stop

@push('scripts')
    <script>
        $(function() {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('getdata') !!}',
                columns: [
                    { data: 'img_preview', name: 'img_preview' },
                    { data: 'name', name: 'name' },
                    { data: 'started_date', name: 'created_date' },
                    { data: 'end_date', name: 'end_date' }
                ]
            });
        });
    </script>
@endpush