@php
    $route = Route::current()->getName();
@endphp
@endphp
<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{asset('admin_assets/img/profile.jpg')}}" alt="avatar admin" class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="admin" aria-expanded="true">
                        <span>
                           ADMIN
                            <span class="user-level">Administrator</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a >
                                    <span class="link-collapse">Thông tin của tôi</span>
                                </a>
                            </li>
                            <li>
                                <a >
                                    <span class="link-collapse">Sủa thông tin</span>
                                </a>
                            </li>
                            <li>
                                <a >
                                    <span class="link-collapse">Cài đặt</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item @yield('menutong1')">
                    <a href="admin">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                </li>
                <li class="nav-item active">
                    <a data-toggle="collapse" href="#base"  aria-expanded="false">
                        <i class="fas fa-layer-group"></i>
                        <p>Review sản phẩm</p>
                        <span class="caret"></span>
                    </a>
                    
                    <div class="collapse show" id="base">
                        <ul class="nav nav-collapse">
                            <li class="@yield('menu1')">
                                <a href="{{route('chuyenmuc.index')}}">
                                    <span class="sub-item">Chuyên Mục</span>
                                </a>
                            </li>
                            <li class="@yield('menu2')">
                                <a href="{{route('baiviet.index')}}">
                                    <span class="sub-item">Bài viết</span>
                                </a>
                            </li>
                            
                            <li class="@yield('menu3')">
                                <a href="{{route('binhluan.index')}}">
                                    <span class="sub-item">Bình Luận </span>
                                </a>
                            </li>
                           
                           

                        </ul>
                    </div>
                </li>
               
            </ul>

            

        </div>
    </div>
</div>
