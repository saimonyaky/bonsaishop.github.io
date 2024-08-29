@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        @if (session()->has('mess'))
            <div class="m-0 callout callout-success">
                <i class="icon fa fa-check"> </i>
                {{ session()->get('mess') }}
            </div>
        @endif
        <div class="container">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Tin tức
                </h1>
            </section>
            <div class="box-body">
                <form action="{{ route('news.index') }}" method="get">
                    <div class="input-group box-body">
                        <input type="text" name="search" class="form-control" placeholder="Tìm kiếm">
                        <span class="input-group-btn">
                            <button type="submit" id="search-btn" class="btn btn-default"><i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="col-3 box-body"><a type="button" class="btn btn-info"
                                    href="{{ route('news.create') }}">Thêm tin tức mới</a></div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 15px">STT</th>
                                            <th>Tiêu đề</th>
                                            <th>Thời gian</th>
                                            <th style="width: 200px">Tác vụ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($data != null)
                                            @foreach ($data as $key => $val)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $val['title'] }}</td>
                                                    <td>{{ $val->updated_at }}</td>
                                                    <td>
                                                        <a href="{{route('news.show',$val->id)}}" type="button" class="btn btn-info">Xem</a>
                                                        <a href="{{route('news.edit',$val->id)}}" type="button" class="btn btn-warning">Sửa</a>
                                                        <a href="{{route('newsDestroy',$val->id)}}" onclick="if(confirm('Bạn có chắc không?'))return true;else return false;" type="button" class="btn btn-danger">Xóa</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td>Không có dữ liệu</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                                {{ $data->links() }}
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.container -->
    </div>
@endsection
