@extends('khach.Master')


@section('main')
<div>
    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">New</div>
</div>
<div class="container-fluid paddding mb-5">
    <div class="row mx-0">
        <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
            <div class="fh5co_suceefh5co_height">
                <img src="public/file/baiviet/{{$baiviet1->hinh_anh}}"  alt="website template image" />
                <div class="fh5co_suceefh5co_height_position_absolute"></div>
                <div class="fh5co_suceefh5co_height_position_absolute_font">
                   
                    <div><a href="baiviet/{{ $baiviet1->id }}" class="fh5co_good_font"> {{ $baiviet1->tieu_de }}</a></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
               
                    @foreach ($baiviet as $bv)
                   
                        <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                            <div class="fh5co_suceefh5co_height_2">
                                <img src="public/file/baiviet/{{$bv->hinh_anh}}" alt="website template image" />
                                <div class="fh5co_suceefh5co_height_position_absolute"></div>
                                <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                                
                                    <div>
                                        <a href="baiviet/{{ $bv->id }}" class="fh5co_good_font_2">
                                            {{ $bv->tieu_de }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
              
                    @endforeach
               
               
               
             
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pt-3">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">{{ $chuyenmuctren->ten_chuyenmuc }}</div>
        </div>
        <div class="owl-carousel owl-theme js" id="slider1">
            @foreach ($slidengang as $item)
            <div class="item px-2">
                <div class="fh5co_latest_trading_img_position_relative">
                    <div class="fh5co_latest_trading_img"><img src="public/file/baiviet/{{$item->hinh_anh}}" alt="website template image" class="fh5co_img_special_relative" /></div>
                    <div class="fh5co_latest_trading_img_position_absolute"></div>
                    <div class="fh5co_latest_trading_img_position_absolute_1">
                        <a href="{{ route('post.getbaiviet', $item->id) }}" class="text-white">{{ $item->tieu_de }}</a>
                      
                    </div>
                </div>
            </div>
            @endforeach

            
        </div>
    </div>
</div>
{{-- <div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News</div>
        </div>
        <div class="owl-carousel owl-theme" id="slider2">
            <div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="khach/assets/images/39-324x235.jpg" alt="website template image" /></div>
                    <div>
                        <a href="pages/single.html" class="d-block fh5co_small_post_heading"><span>The top 10 best computer speakers in the market</span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2045</div>
                    </div>
                </div>
            </div>
            <div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="khach/assets/images/joe-gardner-75333.jpg" alt="website template image" /></div>
                    <div>
                        <a href="pages/single.html" class="d-block fh5co_small_post_heading"><span>The top 10 best computer speakers in the market</span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2045</div>
                    </div>
                </div>
            </div>
            <div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="khach/assets/images/ryan-moreno-98837.jpg" alt="website template image" /></div>
                    <div>
                        <a href="pages/single.html" class="d-block fh5co_small_post_heading"><span>The top 10 best computer speakers in the market</span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2045</div>
                    </div>
                </div>
            </div>
            <div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="khach/assets/images/seth-doyle-133175.jpg" alt="website template image" /></div>
                    <div>
                        <a href="pages/single.html" class="d-block fh5co_small_post_heading"><span>The top 10 best computer speakers in the market</span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2045</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}



@endsection
