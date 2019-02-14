@extends('layouts.app')

@section('content')
    @push('styles')
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    @endpush
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
        <h3 class="box-title">Title</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
            <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
        </div>
        <div class="box-body">
                <a href="{{url('product/create') }}" class="btn btn-flat btn-primary"><i class="glyphicon glyphicon-plus"></i> Create</a>
                <br />
                <br />
            <table class="table table-bordered" id="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>SKU</th>
                        <th>Description</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        Footer
        </div>
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->
    @push('scripts')
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <script>
            $(function() {
                $('#table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! url('product/data') !!}',
                    columns: [
                        { data: 'name', name: 'name' },
                        { data: 'slug', name: 'slug' },
                        { data: 'sku', name: 'sku' },
                        { data: 'description', name: 'description' },
                        { data: 'created_at', name: 'created_at' },
                        { data: 'updated_at', name: 'updated_at' },
                        { data: 'action', name: 'action', orderable: false, searchable: false}
                    ]
                });
            });
            </script>
    @endpush
@endsection
