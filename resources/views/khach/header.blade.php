<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 fh5co_padding_menu"><img src="khach/assets/images/logo.png" alt="website template image" class="fh5co_logo_width" /></div>
            <div class="col-12 col-md-9 align-self-center fh5co_mediya_right">


                {{-- <div id="search" class="col-md-7 col-sm-12 col-xs-12">
                    <form  method="get" action="timkiem">
                        <input type="text" name="key" placeholder="Nhập từ khóa ...">
                        <input type="submit" value="TÌM KIẾM">
                    </form>
    
                </div> --}}
{{--             
                    <div class="row justify-content-center pt-2 pb-4">
                        <div class="col-md-12">
                        <div class="input-group"><span class="input-group-addon fh5co_footer_text_box" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                            <input type="text" class="form-control fh5co_footer_text_box" placeholder="Enter your email..." aria-describedby="basic-addon1">
                            <a href="https://www.free-css.com/free-css-templates" class="input-group-addon fh5co_footer_subcribe" > <i class="fa fa-search">Tìm Kiếm....</a></div>
                        </div>
                    </div>
       --}}

                <div class="col-md-7">
                    <div style="position: relative;top: 54px;">
                        <form action="{{ route('khach.timkiem') }}" method="get">
                      
                            <input required type="text" name="key" class="form-control" placeholder="Tìm kiếm bài review...">
                            {{-- <input type="submit"  value="TÌM KIẾM"> --}}
                            {{-- <a href="" type="submit" style="position: relative;bottom: 35px;">
                                <i class="fa fa-search fa-2x"></i>
                            </a> --}}
                            <button type="submit" class="btn btn-link btn-success btn-sm" style="position: relative;bottom: 37px;" >  
                                <i class="fa fa-search fa-2x"></i>
                            </button>

                        </form>
                    </div>
                </div>

                {{-- <div class="text-center d-inline-block">
                    <a  class="fh5co_display_table">
                        <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                    </a>
                </div> --}}
           
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
    <div class="container padding_786">
        <nav class="navbar navbar-toggleable-md navbar-light">
            <button
                class="navbar-toggler navbar-toggler-right mt-3"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="fa fa-bars"></span>
            </button>
            <a class="navbar-brand" href="https://www.free-css.com/free-css-templates"><img src="khach/assets/images/logo.png" alt="website template image" class="mobile_logo_width" /></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('khach.index') }}">Trang chủ <span class="sr-only">(current)</span></a>
                    </li>
                    @foreach ($category as $data)
                        <li class="nav-item">
                            {{-- <a class="nav-link" href="{{ $data->ten_khongdau }}/{{ $data->id }}">{{ $data->ten_chuyenmuc }} <span class="sr-only">(current)</span></a> --}}
                            <a class="nav-link" href="{{ route('khach.getchuyenmuc', $data->ten_khongdau) }}">{{ $data->ten_chuyenmuc }} <span class="sr-only">(current)</span></a>

                        </li>
                    @endforeach
                 
                    
                </ul>
            </div>
        </nav>
    </div>
</div>