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
                                    <div class="">
                                        <label for="exampleInputFile">Ảnh sản phẩm</label>
                                        <input type="file" id="exampleInputFile" name="new_image">
                                        @if ($data->image)
                                            <img src="{{ asset($data->image) }}" alt="">
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên sản phẩm</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Tên sản phẩm" name="name" value="{{ $data->name }}">
                                        @if ($errors->any())
                                            <span class="text-danger">
                                                {{ $errors->first('name') }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả</label>
                                        <textarea type="text" class="form-control" placeholder="Mô tả sản phẩm" name="describe" value="">{{ $data->describe }}</textarea>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 ">
                                            <label>Loại sản phẩm</label>
                                            <select class="form-control select2" style="width: 100%;" name='category_id'>
                                                @foreach ($dataCategory as $key => $val)
                                                    <option value="{{ $val['id'] }}"
                                                        @if ($val['id'] == $data->category_id) {{ 'selected' }} @endif>
                                                        {{ $val['name'] }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->any())
                                                <span class="text-danger">
                                                    {{ $errors->first('category_id') }}
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-sm-4 ">
                                            <label for="exampleInputEmail1">Giá sản phẩm</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                placeholder="Giá sản phẩm" name="price" value="{{ $data->price }}">
                                            @if ($errors->any())
                                                <span class="text-danger">
                                                    {{ $errors->first('price') }}
                                                </span>
                                            @endif
                                        </div>
                                        
                                    </div>
                                    <div class="box-body">
                                        <label>Thông tin khác:</label>
                                        <textarea type="text" class="form-control" placeholder="Thông tin khác" name="info">{{ $data->info }}</textarea>
                                        <div class="form-group">
                                            <div class="col-sm-4">
                                                <label>Đặc điểm</label>
                                                <textarea type="text" class="form-control" placeholder="Đặc điểm sản phẩm" name="features">{{ $data->features }}</textarea>
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Điều kiện</label>
                                                <textarea type="text" class="form-control" placeholder="Điều kiện lí tưởng" name="condition">{{ $data->condition }}</textarea>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="exampleInputFile">Hình ảnh liên quan</label>
                                                <section class="bg-diffrent">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="verify-sub-box">
                                                                    <div class="file-loading">
                                                                        <input id="multiplefileupload" type="file"
                                                                            name="new_images[]" accept=".jpg,.gif,.png"
                                                                            multiple>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
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
                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                                    <a href="{{ route('product.index') }}" type="button" class="btn btn-default">Quay
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
