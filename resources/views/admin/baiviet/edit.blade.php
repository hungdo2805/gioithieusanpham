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
                                <h4 class="card-title">Cập nhật bài viết</h4>
                            
                            </div>
                        </div>
                        <div class="card-body">
                         
                            @foreach ($errors->all() as $message)
                                <div class="alert alert-danger" style="color: red">{{ $message }}</div>
                            @endforeach
                        

                            {{-- FORM ADD --}}

                            <form action="{{ route('baiviet.update',$data->id) }}"  method="POST" enctype="multipart/form-data">
                                @csrf
                                @method("PUT")
                                <div class="modal-body">													
                                    <div class="row">
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label for="">Chuyên mục</label>
                                            <select name="id_chuyenmuc" class="form-control" required>
                                                @foreach ($chuyenmuc as $chuyenmuc)
                                                    <option  <?php if($chuyenmuc->id==$data->id_chuyenmuc) echo "selected" ?> value=" {{ $chuyenmuc->id }} ">{{ $chuyenmuc->ten_chuyenmuc }}</option>
                                                 @endforeach  
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label for="Tên sản phẩm">Tiêu đề</label>
                                            <input type="text" name="tieu_de" class="form-control" value="{{ $data->tieu_de }}" placeholder="Nhập tiêu đề" required>
                                        </div>         
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label for="Tên sản phẩm">Nội dung</label>
                                            <textarea class="form-control" name="noi_dung" id="noi_dung"  rows="20" required>{{ $data->noi_dung }}</textarea>
                                        </div>   
                                       
                                        <div class="form-group col-lg-12 col-md-12 ">
                                            <label for="Hình ảnh">Hình ảnh đại diện</label>
                                            @if (!empty ($data->hinh_anh))
                                                 <img  style="width: 70px;height:70px" src="public/file/baiviet/{{$data->hinh_anh}}" class="thumbnail">
                                            @endif
                                            <input type="file" name="hinh_anh" class="form-control" >
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6">
                                            <label for="">Nổi bật</label>
                                            <select name="noi_bat" class="form-control">
                                                <option value="1">Có</option>
                                                <option value="0">Không</option>
                                            </select>
                                        </div>                  
                                    </div>
                                </div>
                                <div class="modal-footer no-bd">
                                  
                                    <button type="submit" id="" class="btn btn-primary"> Cập nhật</button>
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

