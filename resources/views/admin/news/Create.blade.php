@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Thêm tin tức mới</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" action="{{ route('news.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tiêu đề</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Tiêu đề" name="title" value="{{ old('title') }}">
                                        @if ($errors->any())
                                            <span class="text-danger">
                                                {{ $errors->first('title') }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group box-body">
                                        <label for="exampleInputEmail1">Nội dung</label>
                                        <textarea type="text" class="form-control" id="exampleInputEmail1"
                                             name="content" value="{{ old('content') }}"></textarea>
                                        @if ($errors->any())
                                            <span class="text-danger">
                                                {{ $errors->first('content') }}
                                            </span>
                                        @endif
                                    </div>                                
                                    <div class="form-group box-body col-sm-4">
                                        <label for="exampleInputFile">Ảnh minh họa</label>
                                        <input type="file" id="exampleInputFile" name="image" value="{{ old('image') }}">
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
