@extends('admin.layout.index')

@section('menu2')   active  @endsection

@section('content')
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Tạo bài viết</h4>
                            
                            </div>
                        </div>
                        <div class="card-body">
                         
                            @foreach ($errors->all() as $message)
                                <div class="alert alert-danger" style="color: red">{{ $message }}</div>
                            @endforeach
                        

                            {{-- FORM ADD --}}

                            <form action="{{ route('baiviet.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">													
                                    <div class="row">
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label for="">Chuyên mục</label>
                                            <select name="id_chuyenmuc" class="form-control" required>
                                                @foreach ($chuyenmuc as $data)
                                                    <option value=" {{ $data->id }} ">{{ $data->ten_chuyenmuc }}</option>
                                                 @endforeach  
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label for="Tên sản phẩm">Tiêu đề</label>
                                            <input type="text" name="tieu_de" class="form-control"  placeholder="Nhập tiêu đề" required>
                                        </div>         
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label for="Tên sản phẩm">Nội dung</label>
                                            <textarea required class="form-control" name="noi_dung" id="noi_dung" rows="5" required></textarea>
                                        </div>   
                                       
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label for="exampleFormControlFile1">Ảnh đại diện</label>
                                            <input required type="file" name="hinh_anh" class="form-control-file" id="exampleFormControlFile1">
                                        </div>  
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label for="">Nổi bật</label>
                                            <select name="noi_bat" id=""  class="form-control">
                                                <option value="1">Có</option>
                                                <option value="0">Không</option>
                                            </select>
                                        </div>         
                                        
                                        
                                    </div>
                                </div>
                                <div class="modal-footer no-bd">
                                    {{-- <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Đóng</button> --}}
                                    <button type="submit" id="" class="btn btn-primary"><i class="fas fa-plus"></i> Thêm mới</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

