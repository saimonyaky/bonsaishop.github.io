@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Thêm mới danh mục</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" action="{{ route('category.store') }}" method="POST">
                                @csrf
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên danh mục</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Tên danh mục" name="name" value="{{ old('name') }}">
                                    </div>
                                    @if ($errors->any())
                                        <span class="text-danger">
                                            {{ $errors->first('name') }}
                                        </span>
                                    @endif
                                    <div class="form-group box-body">
                                        <label for="exampleInputFile">Ảnh danh mục</label>
                                        <input type="file" id="exampleInputFile" name="image" value="{{ old('image') }}">
                                    </div>
                                    @if ($errors->any())
                                        <span class="text-danger">
                                            {{ $errors->first('image') }}
                                        </span>
                                    @endif
                                    <!-- /.box-body -->
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Thêm</button>
                                        <a href="{{ route('category.index') }}" type="button" class="btn btn-default">Quay
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
