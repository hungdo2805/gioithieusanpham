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
                        <a href="#">Danh sách chuyên mục </a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title" style="font-size: 14px!important; font-weight: 600!important;">Danh sách chuyên mục</h4>
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                                    <i class="fa fa-plus"></i>
                                    Thêm mới
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Modal add -->
                            <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header no-bd">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold" style="color: #007bff;font-weight: 700!important;">Danh mục</span> 
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
                                                        <label for="Tên sản phẩm">Tên chuyên mục</label>
                                                        <input type="text" name="ten_chuyenmuc" class="form-control"  placeholder="Nhập tên sản phẩm" required>
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
                                            <th>Danh muc</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>                                                                           
                                        <tr>
                                            <td>Danh muc a</td>                                                               
                                            <td>
                                                <div class="form-button-action">
                                                    <a href="" class="btn btn-link btn-primary btn-lg" data-original-title="Xem thông tin">
                                                        <i class="fa fa-info"></i>
                                                    </a>
                                                    <a href="" type="button" class="btn btn-link btn-primary btn-lg" >
                                                            <i class="fa fa-edit"></i>
                                                    
                                                    </a>
                                                    <form action="" method="post">
                                        
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" onclick="return confirm('Bạn có muốn xóa dòng này?')" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Xóa">
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
                                                      Sửa chuyên mục
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