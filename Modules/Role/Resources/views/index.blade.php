@extends('layouts.app')

@section('content')
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="box-title">Roles</h3>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-2">
                            @can('role-create')
                            <a href="{{url('roles/create')}}" class="btn btn-block btn-primary">New</a>
                            @endcan
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                            <tr>
                                <td>{{ $role->name }}</td>
                                <td>
                                    <form action="{{ route('roles.destroy',$role->id) }}" method="POST">
                                        <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
                                        @can('role-edit')
                                        <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                                        @endcan


                                        @csrf
                                        @method('DELETE')
                                        @can('role-delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        @endcan
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div>
                <!-- /.box-body -->
                
                <div class="box-footer clearfix">
                {{ $roles->links() }}
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
