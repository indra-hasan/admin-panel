@extends('layouts.app')

@section('content')
<section class="content">
        {!! Form::model($model,['files' => true]) !!}
        <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Title</h3>
  
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                <label>Name</label>
                {!! Form::text('name' , null ,['class' => 'form-control']) !!}
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                <label>Description</label>
                {!! Form::textarea('description' , null ,['class' => 'form-control']) !!}
                @if ($errors->has('description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>

          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">{{ !empty($model->id) ? 'Update' : 'Save' }}</button>
          </div>
          <!-- /.box-footer-->
        </div>
        <!-- /.box -->
        {!! Form::close() !!}
      </section>
    
    
    

    @push('scripts')
        
    @endpush
@endsection
