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
                    <h3 class="box-title">User</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                @if(isset($user))
                {!! Form::model($user,['id' => 'row_form', 'route' => ['users.update', $user], 'files'=>true ,  'user' => 'form']) !!}
                {{ Form::hidden('id', null, ['id' => 'id']) }}
                <input name="_method" value="PUT" type="hidden">

                @else
                <form action="{{ URL::route('users.store') }}" method="POST" accept-charset="utf-8">
                    {{ csrf_field() }}
                    @endif        

                    <div class="box-body">
                        <div class="form-group @if ($errors->has('name'))has-error @endif">
                            <label for="exampleInputName">Name</label>
                            {{ Form::text('name', null, ['id' => 'name', 'class' => 'form-control']) }}

                            @if ($errors->has('name'))
                            <span class="help-block">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group @if ($errors->has('email'))has-error @endif">
                            <label for="exampleInputEmail">User Name</label>
                            {{ Form::text('email', null, ['id' => 'email', 'class' => 'form-control']) }}

                            @if ($errors->has('email'))
                            <span class="help-block">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group @if ($errors->has('password'))has-error @endif">
                            <label for="exampleInputPassword">Password</label>
                            {{ Form::password('password', ['id' => 'password', 'class' => 'form-control']) }}

                            @if ($errors->has('password'))
                            <span class="help-block">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="form-group @if ($errors->has('confirm-password'))has-error @endif">
                            <label for="exampleInputConfirm-password">Confirm Password</label>
                            {{ Form::password('confirm-password', ['id' => 'confirm-password', 'class' => 'form-control']) }}

                            @if ($errors->has('confirm-password'))
                            <span class="help-block">{{ $errors->first('confirm-password') }}</span>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputBody">User Roles</label>
                            <div class="box-body pad">
                                {!! Form::select('roles[]', $roles, $userRole, array('class' => 'form-control','multiple')) !!}
                       
            
                            </div>
                            
                            @if ($errors->has('roles'))
                            <span class="help-block">{{ $errors->first('roles') }}</span>
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
