<form action="{{ route('chuyenmuc.update',$data->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <div class="row">
        <div class="col-md-12">
            <div class="form-group form-group-default">
                <label style=" font-weight: bold;">Tên Chuyên Mục</label>
                <input required name="ten_chuyenmuc" type="text" class="form-control" value="{{ $data->ten_chuyenmuc }}" required/> <br>
            </div>
        </div>
    </div>
    <div class="modal-footer no-bd">
        <button type="submit" id="addRowButton" class="btn btn-primary">Cập nhật</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>     
    </div>
</form>

