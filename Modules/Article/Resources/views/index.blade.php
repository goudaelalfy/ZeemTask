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
                            <h3 class="box-title">Articles</h3>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-2">
                            @can('article-create')
                            <a href="{{url('articles/create')}}" class="btn btn-block btn-primary">New</a>
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
                                <th>Date / Time</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                            <tr>
                                <td>{{ $article->name }}</td>
                                <td>{{ date_format($article->created_at,"Y-m-d H:i") }}</td>
                                <td>
                                    <form action="{{ route('articles.destroy',$article->id) }}" method="POST">
                                        <a class="btn btn-info" href="{{ route('articles.show',$article->id) }}">Show</a>
                                        @can('article-edit')
                                        <a class="btn btn-primary" href="{{ route('articles.edit',$article->id) }}">Edit</a>
                                        @endcan


                                        @csrf
                                        @method('DELETE')
                                        @can('article-delete')
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
                {{ $articles->links() }}
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
