@extends('admin.layout.index')
@section('menu3')   active  @endsection

@section('content')
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
                        <a href="#">Danh sách Bình Luận </a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title" style="font-size: 14px!important; font-weight: 600!important;">Danh sách Bình Luận</h4>
                                
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Modal add -->
                          
                       
                            <div class="table-responsive">
                                  <table id="add-row" class="display table table-striped table-hover" >
                                    <thead>
                                        <tr>     
                                                                       
                                            <th >Họ tên</th> 
                                            <th>Email</th>
                                            <th style="width: 100px;">Nội dung</th>
                                            <th>Bài viết</th>
                                            <th>Thời gian</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                    
                                        @foreach ($data as $cot)
                                            <tr>
                                         
                                                <td>{{ $cot->name}}</td>
                                                <td>{{ $cot->email }}</td>
                                                <td>{{ $cot->noi_dung }}</td>
                                                
                                                <td>{{ $cot->baiviet->tieu_de }}</td>
                                                <td>{{ $cot->updated_at }}</td>

                                                <td>
                                                    <div class="form-button-action">
                                                        

                                                        <form action="{{ route('binhluan.destroy',$cot->id) }}" method="post">
                                                            @method('DELETE')   @csrf
                                                            <button  type="submit"  onclick="return confirm('Bạn có chắc chắn muốn xóa?')"  class="btn btn-link btn-danger  btn-lg" data-original-title="Remove">
                                                                <i class="fa fa-trash"></i>
                                                            </button>             
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                         @endforeach
                                    </tbody>
                                </table>
                            </div>

                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

