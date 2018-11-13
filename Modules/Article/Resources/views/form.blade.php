@extends('layouts.app')

@section('content')
<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Article</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                @if(isset($article))
                {!! Form::model($article,['id' => 'row_form', 'route' => ['articles.update', $article], 'files'=>true ,  'role' => 'form']) !!}
                {{ Form::hidden('id', null, ['id' => 'id']) }}
                <input name="_method" value="PUT" type="hidden">

                @else
                <form action="{{ URL::route('articles.store') }}" method="POST" accept-charset="utf-8">
                    {{ csrf_field() }}
                    @endif        

                    <div class="box-body">
                        <div class="form-group @if ($errors->has('name'))has-error @endif">
                            <label for="exampleInputName">Article Name</label>
                            {{ Form::text('name', null, ['id' => 'name', 'class' => 'form-control']) }}

                            @if ($errors->has('name'))
                            <span class="help-block">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group @if ($errors->has('body'))has-error @endif">
                            <label for="exampleInputBody">Article Body</label>
                            <div class="box-body pad">
                                <!--  It is not recommended to set inline style but to achieve quickly --> 
                                {{ Form::textarea('body', null, ['id' => 'body', 'class' => 'form-control']) }}

                            </div>
                            @if ($errors->has('body'))
                            <span class="help-block">{{ $errors->first('body') }}</span>
                            @endif
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    {!! Form::close() !!}

            </div>
            <!-- /.box -->

        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
@stop
