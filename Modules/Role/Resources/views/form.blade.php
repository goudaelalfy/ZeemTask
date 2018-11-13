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
                    <h3 class="box-title">Role</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                @if(isset($role))
                {!! Form::model($role,['id' => 'row_form', 'route' => ['roles.update', $role], 'files'=>true ,  'role' => 'form']) !!}
                {{ Form::hidden('id', null, ['id' => 'id']) }}
                <input name="_method" value="PUT" type="hidden">

                @else
                <form action="{{ URL::route('roles.store') }}" method="POST" accept-charset="utf-8">
                    {{ csrf_field() }}
                    @endif        

                    <div class="box-body">
                        <div class="form-group @if ($errors->has('name'))has-error @endif">
                            <label for="exampleInputName">Role Name</label>
                            {{ Form::text('name', null, ['id' => 'name', 'class' => 'form-control']) }}

                            @if ($errors->has('name'))
                            <span class="help-block">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputBody">Role Permissions</label>
                            <div class="box-body pad">
                                @foreach($permissions as $permission)
                                
                                {{ Form::checkbox('permission[]', $permission->id, in_array($permission->id, $rolePermissions) ? true : false, ['class' => '']) }} {{$permission->name}}
                                <br/>
                                @endforeach
                                
                       
            
                            </div>
                            
                            @if ($errors->has('permission'))
                            <span class="help-block">{{ $errors->first('permission') }}</span>
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
