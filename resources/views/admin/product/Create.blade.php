@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Thêm sản phẩm mới</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" action="{{ route('product.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên sản phẩm</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Tên sản phẩm" name="name" value="{{ old('name') }}">
                                        @if ($errors->any())
                                            <span class="text-danger">
                                                {{ $errors->first('name') }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả</label>
                                        <textarea type="text" class="form-control" placeholder="Mô tả sản phẩm" name="describe" value="">{{ old('describe') }}</textarea>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 ">
                                            <label>Loại sản phẩm</label>
                                            <select class="form-control select2" style="width: 100%;" name='category_id'>
                                                <option @if (empty(old('category_id'))) selected @endif value="">
                                                    ---Chọn
                                                    loại sản phẩm---</option>
                                                @foreach ($dataCategory as $key => $val)
                                                    <option @if (old('category_id') == $val['id']) selected @endif
                                                        value="{{ $val['id'] }}">{{ $val['name'] }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->any())
                                                <span class="text-danger">
                                                    {{ $errors->first('category_id') }}
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="exampleInputEmail1">Giá sản phẩm</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                placeholder="Giá sản phẩm" name="price" value="{{ old('price') }}">
                                            @if ($errors->any())
                                                <span class="text-danger">
                                                    {{ $errors->first('price') }}
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="exampleInputFile">Ảnh sản phẩm</label>
                                            <input type="file" id="exampleInputFile" name="image"
                                                value="{{ old('image') }}">
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <label>Thông tin khác:</label>
                                        <textarea type="text" class="form-control" placeholder="Thông tin khác" name="info" value="">{{ old('info') }}</textarea>
                                        <div class="form-group">
                                            <div class="col-sm-4">
                                                <label>Đặc điểm</label>
                                                <textarea type="text" class="form-control" placeholder="Đặc điểm sản phẩm" name="features" value="">{{ old('features') }}</textarea>
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Điều kiện</label>
                                                <textarea type="text" class="form-control" placeholder="Điều kiện lí tưởng" name="condition" value="">{{ old('condition') }}</textarea>
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
                                                                            name="images[]" accept=".jpg,.gif,.png"
                                                                            multiple>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
