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
                    <h3 class="box-title">Article Details</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputName">Article Name</label> 
                        <div class="box-body pad">
                        {{$article->name}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputBody">Article Body</label>
                        <div class="box-body pad">
                            {!! $article->body !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Date / Time</label> 
                        <div class="box-body pad">
                        {{date_format($article->created_at,"Y-m-d H:i")}}
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="row">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-2">
                        <div class="box-footer">
                            <a href="{{url('articles')}}" class="btn btn-block btn-primary">Articles List</a>

                        </div>
                    </div>
                </div>


            </div>
            <!-- /.box -->

        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
@stop
