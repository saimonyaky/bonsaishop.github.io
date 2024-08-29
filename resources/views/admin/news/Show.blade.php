@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Thông tin chi tiết</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tiêu đề</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        value="{{ $data->title }}" readonly>
                                </div>
                                <div class="form-group box-body">
                                    <label>Nội dung</label>
                                    <textarea type="text" class="form-control" id="exampleInputEmail1" readonly>{{ $data->content }}</textarea>
                                </div>
                                <div class="form-group box-body col-sm-4">
                                    <label for="exampleInputFile">Ảnh minh họa</label>
                                    @if ($data->image)
                                    <p>
                                        <img src="{{ asset($data->image) }}" alt="">
                                    </p>         
                                    @else
                                        <p>Không có ảnh</p>
                                    @endif
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <a href="{{ route('news.index') }}" type="button" class="btn btn-default">Quay
                                    lại</a>
                                <a href="{{ route('news.edit', $data->id) }}" type="button"
                                    class="btn btn-warning">Sửa</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
        </div>
        <!-- /.row -->
        </section>
    </div>
    </div>
@endsection
