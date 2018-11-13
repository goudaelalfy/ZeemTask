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
                            <h3 class="box-title">Users</h3>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-2">
                            @can('user-create')
                            <a href="{{url('users/create')}}" class="btn btn-block btn-primary">New</a>
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
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>
                                    <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                        <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                                        @can('user-edit')
                                        <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                                        @endcan


                                        @csrf
                                        @method('DELETE')
                                        @can('user-delete')
                                        @if(Auth::user()->id != $user->id)
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        @endif
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
                {{ $users->links() }}
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
