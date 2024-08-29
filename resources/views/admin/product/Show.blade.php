@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Chi tiết sản phẩm</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="">
                                    <label for="exampleInputFile">Ảnh sản phẩm</label>
                                    @if ($data->image)
                                        <p>
                                            <img src="{{ asset($data->image) }}" alt="">
                                        </p>
                                    @else
                                        <p>Không có ảnh</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        value="{{ $data->name }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <textarea type="text" class="form-control" placeholder="Mô tả sản phẩm" name="describe" value="" readonly>{{ old('describe') }}</textarea>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4">
                                        <label>Loại sản phẩm</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            value="{{ $dataCategory->name }}" readonly>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="exampleInputEmail1">Giá sản phẩm</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="price"
                                            value="{{ $data->price }}" readonly>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <label>Thông tin khác:</label>
                                    <textarea type="text" class="form-control" placeholder="Thông tin khác" name="info" readonly>{{ $data->info }}</textarea>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label>Đặc điểm</label>
                                            <textarea type="text" class="form-control" placeholder="Đặc điểm sản phẩm" name="features" readonly>{{ $data->features }}</textarea>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Điều kiện</label>
                                            <textarea type="text" class="form-control" placeholder="Điều kiện lí tưởng" name="condition" readonly>{{ $data->condition }}</textarea>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="exampleInputFile">Hình ảnh liên quan</label>
                                            @if ($data->product_images()->get())
                                                @foreach ($data->product_images()->get() as $value)
                                                <p>
                                                    <img src="{{ asset($value->image) }}" alt="">
                                                </p>                                                   
                                                @endforeach
                                            @else
                                                <p>Không có ảnh</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <a href="{{ route('product.index') }}" type="button" class="btn btn-default">Quay
                                    lại</a>
                                <a href="{{ route('product.edit', $data->id) }}" type="button"
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
