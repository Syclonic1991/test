@extends('admin.layouts.dashboard')

@section('page_heading','Акции')


@section('section')
    @if(session()->has('successMessage'))
        <div class="alert alert-success">
            {{ session()->get('successMessage') }}
        </div>
    @endif
    <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-4 offset-md-4"></div>
                <a href="{{ route('promotions.create') }}" class="btn btn-primary"> Добавить акцию</a>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-bordered" id="users-table">
                    <thead>
                        <tr>
                            <th>Изображение</th>
                            <th>Название</th>
                            <th>Дата начала</th>
                            <th>Дата окончания</th>
                        </tr>
                    </thead>
                </table>

            </div>
        </div>
        <!-- /.row -->
    </div>
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