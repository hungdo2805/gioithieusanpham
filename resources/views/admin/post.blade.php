@extends('admin.layout.index')

@section('content_admin')
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <ul class="breadcrumbs" style="margin-left: 0px !important;">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Danh sách bài viết</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title" style="font-size: 14px!important; font-weight: 600!important;">Danh sách bài viết</h4>
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                                    <i class="fa fa-plus"></i>
                                    Thêm mới
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Modal add -->
                            <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header no-bd">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold" style="color: #007bff;font-weight: 700!important;">Thêm mới bài viết</span> 
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span style="color: #F25961 !important;" aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="" method="POST" enctype="multipart/form-data">
                                           @csrf
                                            <div class="modal-body">													
                                                <div class="row">
                                                    <div class="form-group col-lg-12 col-md-12">
                                                        <label for="Tên sản phẩm">Tiêu đề</label>
                                                        <input type="text" name="tieu_de" class="form-control"  placeholder="Nhập tiêu đề" required>
                                                    </div>         
                                                    <div class="form-group col-lg-12 col-md-12">
                                                        <label for="Tên sản phẩm">Nội dung</label>
                                                        <textarea class="form-control" name="noi_dung" id="noi_dung" rows="5" required></textarea>
                                                    </div>   
                                                    <div class="form-group col-lg-12 col-md-12">
                                                        <label for="">Thuộc chuyên muc</label>
                                                        <select name="id_chuyenmuc" class="form-control" required>
                                                            <option value="1">Chuyên mục a</option>
                                                            <option value="2">Chuyên mục b</option>   
                                                            <option value="3">Chuyên mục c</option>      
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-lg-12 col-md-12">
                                                        <label for="exampleFormControlFile1">Nhấn để chọn ảnh</label>
                                                        <input required type="file" name="hinh_anh" class="form-control-file" id="exampleFormControlFile1">
                                                    </div>  
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" name="noi_bat" type="checkbox" value="1">
                                                            <span class="form-check-sign">Nổi bật</span>
                                                        </label>
                                                    </div>                  
                                                </div>
                                            </div>
                                            <div class="modal-footer no-bd">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Đóng</button>
                                                <button type="submit" id="" class="btn btn-primary"><i class="fas fa-plus"></i> Thêm mới</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                       
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover" >
                                    <thead>
                                        <tr>                                        
                                            <th>Tiêu đề</th>
                                            <th>Hình ảnh</th>
                                            <th>Thuộc danh mục</th>
                                            <th>Nổi bật</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>                                                                           
                                        <tr>
                                            <td>Tiêu đề bài viết</td>         
                                            <td><img width="100px" src="https://cdnmedia.tinmoi.vn/resize_738x442/upload/thanhdat/2021/06/07/hlv-park-hang-seo-loai-6-cai-ten-chot-danh-sach-cau-thu-viet-nam-vs-indonesia1623054710.jpg" alt=""></td>                                                       
                                            <th>Danh mục a</th>
                                            <th>Nổi bật</th>
                                            <td>
                                                <div class="form-button-action">
                                                    <a href="" type="button" class="btn btn-link btn-primary btn-lg" >
                                                            <i class="fa fa-edit"></i>
                                                    
                                                    </a>
                                                    <form action="" method="post">
                                        
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" onclick="return confirm('Bạn có muốn xóa bài viết?')" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Xóa">
                                                            <i class="fa fa-trash"></i>
                                                        </button>                             
                                                    </form>                                                                   
                                                </div>
                                            </td>
                                        </tr>                                                           									
                                    </tbody>
                                </table>
                            </div>

                             {{-- MODAL --}}
                                      <!-- medium modal -->
                                      <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
                                      aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <h5 class="modal-title">
                                                      <span class="fw-mediumbold">
                                                      Sửa bài viết
                                                      </span> 
                                      
                                                  </h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                  </button>
                                              </div>
                                              <div class="modal-body" id="mediumBody">
                                                  <div>
                                                      <!-- the result to be displayed apply here -->
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                 
                             {{-- END  --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

