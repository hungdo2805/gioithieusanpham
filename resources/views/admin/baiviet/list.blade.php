@extends('admin.layout.index')
@section('menu2')   active  @endsection

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
                        <a href="#">Danh sách Bài viết </a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title" style="font-size: 14px!important; font-weight: 600!important;">Danh sách Bài viết</h4>
                                <a href=" {{ route('baiviet.create') }}" class="btn btn-primary btn-round ml-auto">
                                    <i class="fa fa-plus"></i>
                                    Tạo mới bài viêt
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Modal add -->
                          
                       
                            <div class="table-responsive">
                                  <table id="add-row" class="display table table-striped table-hover" >
                                    <thead>
                                        <tr>     
                                            <th>STT</th>                                   
                                            <th style="width: 320px;">Tiêu đề</th> 
                                            <th>danh mục</th>
                                            <th>Nổi bật</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        @php   $stt=1   @endphp
                                        @foreach ($data as $cot)
                                            <tr>
                                                <td>{{ $stt++ }}</td>
                                                <td>{{ $cot->tieu_de}}</td>
                                                <td>{{ $cot->chuyenmuc->ten_chuyenmuc }}</td>
                                                <td>
                                                    @if ($cot->noi_bat==1)
                                                        Có
                                                    @else
                                                        Không
                                                    @endif
                                                </td>

                                                <td>
                                                    <div class="form-button-action">
                                                        {{-- <a href="{{ route('baiviet.show',$cot->id) }}" class="btn btn-link btn-primary btn-lg" data-original-title="Xem thông tin">
                                                            <i class="fa fa-info"></i>
                                                        </a> --}}
                                                        <a href="{{ route('baiviet.edit',$cot->id) }}" class="btn btn-link btn-primary btn-lg" data-original-title="Xem thông tin">
                                                            <i class="fa fa-edit"></i>
                                                        </a>

                                                        <form action="{{ route('baiviet.destroy',$cot->id) }}" method="post">
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

