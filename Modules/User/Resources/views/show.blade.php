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
                    <h3 class="box-title">User Details</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputName">Name</label> 
                        <div class="box-body pad">
                            {{$user->name}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUserName">User Name</label> 
                        <div class="box-body pad">
                            {{$user->email}}
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputBody">User Roles</label>
                        <div class="box-body pad">

                            @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $roleName)
                            {{ $roleName }}
                            <br/>
                            @endforeach
                            @endif


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
                            <a href="{{url('users')}}" class="btn btn-block btn-primary">Users List</a>
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
