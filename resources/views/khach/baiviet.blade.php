@extends('khach.Master')
@section('body')
  single
@endsection

@section('kethuacss')
  <link rel="stylesheet" type="text/css" href="khach/assets/css/chitietsp.css" />
@endsection
@section('main')
    
    {{-- POST --}}
    <div id="fh5co-title-box" style="background-image:url(file/baiviet/{{$post->hinh_anh}}); background-position: 50% 90.5px;" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="page-title"><img src="file/baiviet/{{$post->hinh_anh}}" alt="website template image"><span>{{date('d/m/Y H:i',strtotime($post->updated_at)) }}</span>
        <h2>{{ $post->tieu_de }}</h2>
      </div>
    </div>
    <div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
      <div class="container paddding">
        <div class="row mx-0">
          <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
              {!! $post->noi_dung !!}


              <br><br>
              <div id="comment">
                <h3 style="color: darkorange">Bình luận</h3>
                <div class="col-md-9 comment">
                  <form method="POST" action="{{route('khach.binhluan')}}">
                    @csrf
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input required type="email" class="form-control"  name="email">
                    </div>
                    <div class="form-group">
                      <label for="name">Tên:</label>
                      <input required type="text" class="form-control"  name="name">
                    </div>
                    <div class="form-group">
                      <label for="cm">Bình luận:</label>
                      <textarea required rows="10" id="cm" class="form-control" name="noi_dung"></textarea>
                    </div>
                    <div class="form-group">
                      <input type="hidden" type="number" class="form-control"  name="id_baiviet" value="{{ $post->id }}">
                    </div>
                    <div class="form-group text-right">
                      <button type="submit" class="btn btn-default">Gửi</button>
                    </div>
                  </form>
                </div>
              </div>

              <div id="comment-list">
                @foreach ($binhluan as $bl)
                  
                  <ul>
                    <li class="com-title">
                    {{$bl->name}}
                      <br>
                      <span>{{date('d/m/Y H:i',strtotime($bl->created_at)) }}</span>	
                    </li>
                    <li class="com-details">
                      {{$bl->noi_dung}}
                    </li>
                  </ul>
                @endforeach
              </div>
          </div>

          

          <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
            {{-- <div>
              <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>
            </div>
            <div class="clearfix"></div>
            <div class="fh5co_tags_all">
              <a  class="fh5co_tagg">Business</a>
              <a href="https://www.free-css.com/free-css-templates" class="fh5co_tagg">Technology</a>
              <a href="https://www.free-css.com/free-css-templates" class="fh5co_tagg">Sport</a>
              <a href="https://www.free-css.com/free-css-templates" class="fh5co_tagg">Art</a>
              <a href="https://www.free-css.com/free-css-templates" class="fh5co_tagg">Lifestyle</a>
              <a href="https://www.free-css.com/free-css-templates" class="fh5co_tagg">Three</a>
              <a href="https://www.free-css.com/free-css-templates" class="fh5co_tagg">Photography</a>
              <a href="https://www.free-css.com/free-css-templates" class="fh5co_tagg">Lifestyle</a>
              <a href="https://www.free-css.com/free-css-templates" class="fh5co_tagg">Art</a>
              <a href="https://www.free-css.com/free-css-templates" class="fh5co_tagg">Education</a>
              <a href="https://www.free-css.com/free-css-templates" class="fh5co_tagg">Social</a>
              <a href="https://www.free-css.com/free-css-templates" class="fh5co_tagg">Three</a>
            </div> --}}
            <div>
              <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Chuyên mục</div>
            </div>
            <div class="clearfix"></div>
            <div class="fh5co_tags_all">
              {{ $post->chuyenmuc->ten_chuyenmuc }}
              </div>
            


            <div>
              <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Review nổi bật</div>
            </div>
            @foreach ($noibat as $bainoibat)
              <div class="row pb-3">
                <div class="col-5 align-self-center"><img src="file/baiviet/{{$bainoibat->hinh_anh}}" alt="website template image" class="fh5co_most_trading"></div>
                <div class="col-7 paddding">
                  <a href="{{ route('khach.getbaiviet', $bainoibat->id) }}" style="color: black" class="most_fh5co_treding_font">{{ $bainoibat->tieu_de }}</a>
                  <div class="most_fh5co_treding_font_123">{{date('d/m/Y H:i',strtotime($bainoibat->updated_at)) }}</div>
                </div>
              </div>
            @endforeach
           
           
          </div>
        </div>
      </div>
    </div>

    {{-- END POST --}}
@endsection