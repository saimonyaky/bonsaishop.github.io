@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Chi tiết danh mục</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" action="{{ route('category.update', $data->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên danh mục</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Tên danh mục" name="name" value="{{ $data->name }}">
                                    </div>
                                    @if ($errors->any())
                                        <span class="text-danger">
                                            {{ $errors->first('name') }}
                                        </span>
                                    @endif
                                    <div class="form-group box-body">
                                        <label for="exampleInputFile">Ảnh danh mục</label>
                                        <input type="file" id="exampleInputFile" name="new_image">
                                        @if ($data->image)
                                            <img src="{{ asset($data->image) }}" alt="">
                                        @endif
                                    </div>
                                    @if ($errors->any())
                                        <span class="text-danger">
                                            {{ $errors->first('new_image') }}
                                        </span>
                                    @endif
                                    <!-- /.box-body -->
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                                        <a href="{{ route('product.index') }}" type="button" class="btn btn-default">Quay
                                            lại</a>
                                    </div>
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
