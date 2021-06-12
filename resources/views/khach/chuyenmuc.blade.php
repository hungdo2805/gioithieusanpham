@extends('khach.Master')
@section('main')
    {{-- BÀI VIẾT THEO CHUYÊN MỤC --}}
    <div class="container-fluid pb-4 pt-4 paddding">
        <div class="container paddding">
          <div class="row mx-0">
            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
              <div>
                <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Chuyên mục Review || {{ $cate->ten_chuyenmuc }}</div>
              </div>

             {{-- Đổ data--}}
              @foreach ($list as $post)

                <div class="row pb-4">
                    <div class="col-md-5">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_news_img"><img src="file/baiviet/{{$post->hinh_anh}}" alt="website template image"></div>
                        <div></div>
                    </div>
                    </div>
                    <div class="col-md-7">
                        <a href="{{ route('khach.getbaiviet', $post->id) }}" class="fh5co_magna py-2"> {{ $post->tieu_de }}</a> <br>
                        <a class="fh5co_mini_time py-3">{{date('d/m/Y H:i',strtotime($post->updated_at)) }}</a>
                        {{-- <div class="fh5co_consectetur"> {{ substr('{!! $post->noi_dung !!}',  0, 20) }}</div> --}}
                       
                   
                    </div>
                </div>
            @endforeach
            {{-- End Data --}}
             
            </div>
            
          </div>
          <div class="row mx-0">
            <div class="col-12 text-center pb-4 pt-4">
                {!! $list->links() !!}
                {{-- <a href="https://www.free-css.com/free-css-templates" class="btn_mange_pagging"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp; Previous</a>
                <a href="https://www.free-css.com/free-css-templates" class="btn_pagging">1</a>
                <a href="https://www.free-css.com/free-css-templates" class="btn_pagging">2</a>
                <a href="https://www.free-css.com/free-css-templates" class="btn_pagging">3</a>
                <a href="https://www.free-css.com/free-css-templates" class="btn_pagging">...</a>
                <a href="https://www.free-css.com/free-css-templates" class="btn_mange_pagging">Next <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp;</a></div> --}}
          </div>
        </div>
    </div>
    
@endsection