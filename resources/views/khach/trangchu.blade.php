@extends('khach.Master')

<style type="text/javascript">

</style>
@section('main')


    <div>
        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">New</div>
    </div>
    <div class="container-fluid paddding mb-5">
        <div class="row mx-0">
            <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
                <div class="fh5co_suceefh5co_height">
                    <img src="public/file/baiviet/{{$baiviet_to1->hinh_anh}}"  alt="website template image" />
                    <div class="fh5co_suceefh5co_height_position_absolute"></div>
                    <div class="fh5co_suceefh5co_height_position_absolute_font">
                    
                        <div><a href="baiviet/{{ $baiviet_to1->id }}" class="fh5co_good_font"> {{ $baiviet_to1->tieu_de }}</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                
                        @foreach ($baiviet_4o as $bv)
                    
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


    {{-- code here --}}
    <div class="container mt-5">   
        @foreach($category as $cate)
                @php    $posts = $cate->baiviet->take(8)->sortByDesc('id');    @endphp
                <div class="fh5co_heading fh5co_heading_border_bottom">{{$cate->ten_chuyenmuc}}</div> 
                <div class="category">
                @foreach ($posts as $post)                   
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img">
                                <img src="public/file/baiviet/{{$post->hinh_anh}}" alt="website template image" />
                            </div>
                            <div>
                                <a href="baiviet/{{$post->id}}" class="d-block fh5co_small_post_heading">
                                    <span>{{ $post->tieu_de }}</span>
                                </a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> {{date('d/m/Y H:i',strtotime($post->updated_at)) }} </div>
                            </div>
                        </div>
                    </div>                         
                @endforeach
            </div>
        @endforeach

    <div>


@endsection


