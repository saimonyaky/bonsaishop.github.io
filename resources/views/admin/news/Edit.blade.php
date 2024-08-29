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
                            <!-- form start -->
                            <form role="form" action="{{ route('product.update', $data->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tiêu đề</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Tiêu đề" name="title" value="{{ $data->title }}">
                                        @if ($errors->any())
                                            <span class="text-danger">
                                                {{ $errors->first('title') }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group box-body">
                                        <label for="exampleInputEmail1">Nội dung</label>
                                        <textarea type="text" class="form-control" id="exampleInputEmail1" name="content">{{ $data->content }}</textarea>
                                        @if ($errors->any())
                                            <span class="text-danger">
                                                {{ $errors->first('content') }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group box-body col-sm-4">
                                        <label for="exampleInputFile">Ảnh minh họa</label>
                                        <input type="file" id="exampleInputFile" name="new_image">
                                        @if ($data->image)
                                            <img src="{{ asset($data->image) }}" alt="">
                                        @endif
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                                    <a href="{{ route('news.index') }}" type="button" class="btn btn-default">Quay
                                        lại</a>
                                </div>
                            </form>
                        </div>
                        </form>
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
